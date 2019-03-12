<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\CamelCasing;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class subCategory extends Model
{
    //
	//use CamelCasing;

	protected $primaryKey = 'id_sub_categories';
	protected $table = 'sub_categories';
	public $timestamps = false;
	
}
