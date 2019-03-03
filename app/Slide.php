<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    	'deleted_at',
    ];

}
