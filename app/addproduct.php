<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\CamelCasing;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class addproduct extends Model
{
    //
	//use CamelCasing;

	protected $primaryKey = 'id_products';
	protected $table = 'product_lists';
	public $timestamps = false;
}
