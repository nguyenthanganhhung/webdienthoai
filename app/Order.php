<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    	'deleted_at',
    ];

    public function order_details()
    {
        return $this->hasMany('App\orderDetail', 'order_id');
    }

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
