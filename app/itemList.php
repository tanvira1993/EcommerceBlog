<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\CamelCasing;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class itemList extends Model
{
    //
	//use CamelCasing;

	protected $primaryKey = 'id_item_list';
	protected $table = 'item_lists';
	public $timestamps = false;

	public function product() {
		return $this->belongsTo('App\addproduct', 'id_products' , 'id_products');
	}
}
