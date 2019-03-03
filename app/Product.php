<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $guared = ['id'];

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function categories()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'product_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\orderDetail', 'product_id');
    }
}
