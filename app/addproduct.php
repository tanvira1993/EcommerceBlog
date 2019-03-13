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

	public function category() {
		return $this->belongsTo('App\Category', 'id_categories' , 'id_categories');
	}

	public function subcategory() {
		return $this->belongsTo('App\subCategory', 'id_sub_categories' , 'id_sub_categories');
	}
}
