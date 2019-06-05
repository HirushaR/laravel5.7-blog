<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SummernoteController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function insert(Request $request)
    {
        DB::table('post')->insert([
            'title'=>$request['title'],
            'details'=>$request['summernote'],
        ]);
        return back();
    }
    public function viewCode()
    {
        $data = DB::table('post')->get();
        return view('viewCode',compact('data'));
    }
    public function readInfo($id)
    {
        $data = DB::table('post')->where('id',$id)->first();
        return view('action/read',compact('data'));
    }
    public function deleteInfo($id)
    {
        DB::table('post')->where('id',$id)->delete();
        return back();
    }
    public function editInfo($id){
        $data = DB::table('post')->where('id',$id)->first();
        return view('action/edit',compact('data'));
    }
    public function updateInfo(Request $request)
    {
        DB::table('post')->where('id',$request['id'])->update([
            'title' =>$request['title'],
            'details' =>  $request['summernote']
        ]);
        return back();
    }

}
