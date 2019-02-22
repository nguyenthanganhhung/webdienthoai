<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    protected $guared = ['id'];
    
    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function products()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function orders()
    {
    	return $this->belongsTo('App\Order', 'order_id');
    }
}
