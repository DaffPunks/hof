<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $response = DB::table('reservation')
            ->where('is_reserved', '=' , 1)
            ->where('time', '>=', Carbon::today())
            ->get();

        $count = DB::table('reservation')
            ->where('is_reserved', '=' , 1)
            ->where('time', '>=', Carbon::today())
            ->count();

        return view('admin.main', [
            'response' => $response,
            'count' => $count,
        ]);
    }

    public function calendar(){
        $new = DB::table('reservation')
            ->where('time', '>=', Carbon::today())
            ->orderBy('id', 'asc')
            ->take(140)
            ->get();

        return view('admin.calendar',[
            'new' => $new
        ]);
    }

    public function history(){
        $old = DB::table('reservation')
            ->where('time', '<', Carbon::today())
            ->orderBy('id', 'desc')
            ->take(140)
            ->get();

        return view('admin.history',[
            'old' => $old
        ]);
    }

    public function delete(Request $request){
        $id = $request->input('id');
        DB::table('reservation')
            ->where('id', $id)
            ->update([
                'is_reserved' => 0,
                'first_name' => NULL,
                'last_name' => NULL,
                'email' => NULL,
                'phone' => NULL
        ]);
        return 'success';
    }

    public function price(){
        $config = DB::table('config')
            ->get();

        return view('admin.price',[
            'config' => $config
        ]);
    }

    public function setPrice(Request $request){
        $first = $request->input('first-price');
        $last = $request->input('last-price');

        $reservations = DB::table('reservation')->get();

        DB::table('reservation')->where('session', '<', 5)->update(['price' => $first]);
        DB::table('reservation')->where('session', '>=', 5)->update(['price' => $last]);

        DB::table('config')->where('id', 1)->update(['value' => $first]);
        DB::table('config')->where('id', 2)->update(['value' => $last]);

        return redirect('/admin/pricing');
    }
}










