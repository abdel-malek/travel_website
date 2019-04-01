<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
//    protected $fillable = [
//      'title'  
//    ];
    public function package()
    {
    	return $this->belongsTo('App\Package');
    }
}
