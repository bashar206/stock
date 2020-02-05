<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Session;
use Carbon\Carbon;

class StaffController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }


    public function store(Request $data){

    	$store=Staff::insert([
    		'sname'=>$data->sname,
    		'sdesig'=>$data->sdesig,
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

    public function deletestaff($id){
    	Staff::where('id',$id)->delete();
    	return back();
    }
}
