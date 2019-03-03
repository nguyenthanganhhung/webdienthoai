<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    	'deleted_at',
    ];
    
    public function products()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
