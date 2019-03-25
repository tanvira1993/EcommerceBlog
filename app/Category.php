<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\CamelCasing;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Category extends Model
{
    //
	//use CamelCasing;

	protected $primaryKey = 'id_categories';
	protected $table = 'categories';
	public $timestamps = false;

	
}
