<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function index(){

        $emails = DB::table('email')->where('id', '>', 1)->get();

        return view('admin.email', [
            'emails' => $emails
        ]);
    }

    public function addEmail(Request $request){
        $email = $request->input('email');

        DB::table('email')->insert(['email' => $email]);

        return redirect('admin/email');
    }

    public function deleteEmail(Request $request){
        $id = $request->input('id');

        DB::table('email')->where('id', $id)->delete();

        return redirect('admin/email');
    }
}
