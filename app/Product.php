<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function subcat(){
    	return $this->belongsTo('App\Subcat','subcatid','id');
    }

    function staff(){
    	return $this->belongsTo('App\Staff','staffid','id');
    }

    function staffid(){
    	return $this->belongsTo('App\Staff','skolorid','id');
    }
}
