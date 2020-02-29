<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'title',
    	'user_id',
    	'cateogory_id',
    	'amount',
    	'description',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
