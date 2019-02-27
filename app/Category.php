<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function products()
    {
    	return $this->hasMany('App\Product', 'category_id');
    }

}