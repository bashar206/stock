<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }


    public function store(Request $data){

    	$store=Category::insert([
    		'name'=>$data->name,
    		'status'=>$data->status,
    		'created_at'=>now()
    	]);

    	if ($store) {
            Session::flash('success');
            return back();
        }else{
            Session::flash('error');
            return back();
        }
    	

    }

    public function update(Request $data,$id){

    	$update=Category::where('id',$id)->update([
    		'name'=>$data->name,
    		'status'=>$data->status,
    		'updated_at'=>now()
    	]);

    	if ($update) {
            Session::flash('success');
            return back();
        }else{
            Session::flash('error');
            return back();
        }
    	

    }

    public function deletecat($id){
    	$del=Category::where('id',$id)->delete();
    	return back();
    }

    public function active($id){

    	Category::where('id',$id)->update([
    		'status'=>1
    	]);
    	return back();
    }

    public function inactive($id){

    	Category::where('id',$id)->update([
    		'status'=>0
    	]);
    	return back();
    }


}
