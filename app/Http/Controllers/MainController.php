<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(Request $request){
        $times = DB::table('reservation')->whereBetween('time', array(Carbon::today(), Carbon::today()->addDays(20) ))->get();

        $imagesTop = DB::table('images')->where('slider_id', 1)->orderBy('position','asc')->get();
        $imagesMid = DB::table('images')->where('slider_id', 2)->orderBy('position','asc')->get();
        $price = DB::table('config')->get();

        $client = new Client([
            'base_uri' => 'https://api.vk.com/method/',
        ]);
        $request = $client->request('GET','board.getComments', [
            'query' => [
                'group_id' => 126702429,
                'topic_id' => 34566953,
                'start_comment_id' => 3,
                'extended' => true,
                'v' => 5.53
            ]
        ]);
        $json = $request->getBody();
        $vk = json_decode($json, true);
        return view('app', [
            'price'        => $price,
            'times'        => $times,
            'imagestop'       => $imagesTop,
            'imagesmid'       => $imagesMid,
            'vkmsg'        => $vk['response']['items'],
            'vkprofiles'   => $vk['response']['profiles']
            ]
        );
    }

    public function createUser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('admin/register');
    }
}
