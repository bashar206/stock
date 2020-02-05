<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcat;
use Session;
use Carbon\Carbon;

class SubcatController extends Controller
{
    
    public function __construct(){
    	$this->middleware('auth');
    }

    public function store(Request $data){

    	$store=Subcat::insert([
    		'subname'=>$data->subname,
    		'catid'=>$data->catid,
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

    	$update=Subcat::where('id',$id)->update([
    		'subname'=>$data->subname,
    		'catid'=>$data->catid,
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

    public function active($id){
    	Subcat::where('id',$id)->update([
    		'status'=>1
    	]);
    	return back();
    }
    public function inactive($id){
    	Subcat::where('id',$id)->update([
    		'status'=>0
    	]);
    	return back();
    }

    function delete($id){
    	Subcat::where('id',$id)->delete();
    	return back();
    }

}
