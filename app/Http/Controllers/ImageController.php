<?php

namespace App\Http\Controllers;

use Approached\LaravelImageOptimizer\ImageOptimizer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function topSlider(){
        $images = DB::table('images')->where('slider_id', 1)->orderBy('position','asc')->get();

        return view('admin.topslider', [
            'images' => $images
        ]);
    }
    public function midSlider(){
        $images = DB::table('images')->where('slider_id', 2)->orderBy('position','asc')->get();

        return view('admin.midslider', [
            'images' => $images
        ]);
    }

    public function getUploadTop(){

        return view('admin.topupload', [
        ]);
    }
    public function getUploadMid(){

        return view('admin.midupload', [
        ]);
    }

    public function storeTop(Request $request){
        $input = Input::all();

        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $destinationPath = 'images/slider/top/'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension
        $name = Input::file('file')->getClientOriginalName(); // getting file extension
        $fileName = rand(1111111, 9999999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
        if ($upload_success) {
            if( DB::table('images')->where('slider_id', 1)->exists() )
                $position = DB::table('images')
                        ->where('slider_id', 1)
                        ->orderBy('position', 'desc')
                        ->first()
                        ->position + 1;
            else
                $position = 1;
            DB::table('images')
                ->insert([
                    'name' => $name,
                    'file_path' => $fileName,
                    'slider_id' => 1,
                    'position' => $position
                ]);
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }
    public function storeMid(Request $request){
        $input = Input::all();

        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $destinationPath = 'images/slider/mid/'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension
        $name = Input::file('file')->getClientOriginalName(); // getting file extension
        $fileName = rand(1111111, 9999999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
        if ($upload_success) {
            if( DB::table('images')->where('slider_id', 2)->exists() )
                $position = DB::table('images')
                        ->where('slider_id', 2)
                        ->orderBy('position', 'desc')
                        ->first()
                        ->position + 1;
            else
                $position = 1;
            DB::table('images')
                ->insert([
                    'name' => $name,
                    'file_path' => $fileName,
                    'slider_id' => 2,
                    'position' => $position
                ]);
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }

    public function deleteTop(Request $request){
        $id = $request->input('id');

        $file = DB::table('images')->where('id', $id)->first();
        if( Storage::exists('public/images/slider/top/'.$file->file_path) )
                Storage::delete('public/images/slider/top/'.$file->file_path);

        DB::table('images')->where('id', $id)->delete();

        return 'success';
    }
    public function deleteMid(Request $request){
        $id = $request->input('id');

        $file = DB::table('images')->where('id', $id)->first();
        if( Storage::exists('public/images/slider/mid/'.$file->file_path) )
                Storage::delete('public/images/slider/mid/'.$file->file_path);

        DB::table('images')->where('id', $id)->delete();

        return 'success';
    }

    public function order(Request $request){
        $data = json_decode($request->input('data'));

        for($i = 0; $i < count($data); $i++){
            DB::table('images')->where('id', $data[$i])->update(['position' => $i+1]);
        }

        return "success";
    }
}
