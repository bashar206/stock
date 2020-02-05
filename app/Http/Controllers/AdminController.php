<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcat;
use App\Staff;
use App\Product;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
        $allpro=Product::orderBy('purdate','desc')->get();
    	return view('admin.dashboard',compact('allpro'));
    }
    public function product(){
    	return view('admin.product');
    }
    public function allcategory(){
        $allcat=Category::all();
    	return view('admin.allcategory',compact('allcat'));
    }
    public function addcategory(){
        return view('admin.addcategory');
    }
    public function editcategory($id){
        $edit=Category::where('id',$id)->first();
        return view('admin.editcategory',compact('edit'));
    }

    public function addstaff(){
        return view('admin.addstaff');
    }
    public function allstaff(){
        $allstaff=Staff::all();
        return view('admin.allstaff',compact('allstaff'));
    }

    public function addsubcat(){
        return view('admin.addsubcat');
    }
    public function allsubcat(){
        // $allsubcat=Db::table('subcats')->join('categories','subcats.catid','categories.id')->get();
        $allsubcat=Subcat::all();
        return view('admin.allsubcat',compact('allsubcat'));
    }

    public function editsubcat($id){
        $editsub=Subcat::where('id',$id)->first();
        return view('admin.editsubcat',compact('editsub'));
    }

    function addproduct(){
        return view('admin.addproduct');
    }
    function allproduct(){
        $allpro=Product::orderBy('purdate','desc')->get();
        return view('admin.allproduct',compact('allpro'));
    }
    function dailypur(){
        $date = Carbon::now()->startOfDay();
        $allpro=Product::where('purdate','=',$date)->orderBy('purdate','desc')->get();
        return view('report.dailypur',compact('allpro'));
    }
    function weekpur(){
        $date = Carbon::now()->subDays(7)->startOfDay();
        $allpro=Product::where('purdate','>=',$date)->orderBy('purdate','desc')->get();
        return view('report.dailypur',compact('allpro'));
    }
    function monthpur(){
        $date = Carbon::now()->subDays(30)->startOfDay();
        $allpro=Product::where('purdate','>=',$date)->orderBy('purdate','desc')->get();
        return view('report.dailypur',compact('allpro'));
    }
    function summary(){
        $date = Carbon::now()->subDays(30)->startOfDay();
        $sum=Product::where('purdate','>=',$date)->sum('amount');
        return view('report.summary',compact('sum'));
    }
}
