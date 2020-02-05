<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Subcat extends Model
{
    public function relcat(){
    	return $this->belongsTo('App\Category','catid','id');
    }
}
