<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use Carbon\Carbon;
use Image;

class ProductController extends Controller
{
    function __construct(){
    	$this->middleware('auth');
    }
    function store(Request $data){
    	$num1=$data->total;
    	$num2=$data->famount;
    	$store=Product::insertGetId([
    		'purdate'=>$data->purdate,
    		'pcode'=>$data->pcode,
    		'subcatid'=>$data->subcatid,
    		'yard'=>$data->yard,
    		'amount'=>$data->amount,
    		'ks'=>$data->ks,
    		'kss'=>$data->kss,
    		'ksss'=>$data->ksss,
    		'total'=>$data->total,
    		'staffid'=>$data->staffid,
    		'swdate'=>$data->swdate,
    		'skolor'=>$data->skolor,
    		'famount'=>$data->famount,
    		'fdate'=>$data->fdate,
    		'pimg'=>'wating',
    		'fpimg'=>'wating',
    		'cartoon'=>$data->cartoon,
    		'sroom'=>$data->sroom,
    		'waste'=>$num1-$num2,
    		'created_at'=>now()
    	]);

    	if($data->hasFile('pimg')){
          $image1=$data->file('pimg');
          $ImageName1="sample-".$store.time().rand(100,10000).'.'.$image1->getClientOriginalExtension();
          Image::make($image1)->resize(50,50)->save('uploads/'.$ImageName1);

          Product::where('id',$store)->update([
            'pimg'=>$ImageName1
          ]);
        }

        if($data->hasFile('fpimg')){
          $image2=$data->file('fpimg');
          $ImageName2="product-".$store.time().rand(9999,999999).'.'.$image2->getClientOriginalExtension();
          Image::make($image2)->resize(50,50)->save('uploads/'.$ImageName2);

          Product::where('id',$store)->update([
            'fpimg'=>$ImageName2
          ]);
        }

        if ($store) {
            Session::flash('success');
            return back();
        }else{
            Session::flash('error');
            return back();
        }
    }
}
