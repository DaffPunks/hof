<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReserveController extends Controller
{
    public function reserve(Request $request){
        $id = $request->input('ID');
        $firstname =  $request->input('FIRSTNAME');
        $lastname = $request->input('SECONDNAME');
        $phone = $request->input('PHONE');
        $email = $request->input('EMAIL');
        $timenow = Carbon::now();

        if ( DB::table('reservation')->where('id', $id)->first()->is_reserved )
            return redirect('/')->with('fail', 'Извините, но на это время уже нельзя заказать.');
        else{

            DB::table('reservation')->where('id', $id)->update([
                'is_reserved' => 1,
                'time_of_reserving' => $timenow,
                'first_name' => $firstname,
                'last_name' => $lastname,
                'phone' => $phone,
                'email' => $email
                ]);

            $info = DB::table('reservation')->where('id', $id)->first();
            $mails = DB::table('email')->get();

            foreach ($mails as $mail){
                Mail::send('email.reserveMail', [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'phone' => $phone,
                    'email' => $email,
                    'time' => $info->time
                ], function($message) use ($mail) {
                    $message->from('bar@mailgun.com', 'Проклятый бар');
                    $message->sender('bar@mailgun.com', 'Проклятый бар');
                    $message->to('serched@yandex.ru');
                    $message->subject('Зарезервированно время');
                });
            }

            return redirect('/')->with('success', 'Время забронировано, ожидайте звонка.');
        }
    }

}
