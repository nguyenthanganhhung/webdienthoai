<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function order_details()
    {
        return $this->hasMany('App\orderDetail', 'room_id');
    }
}
