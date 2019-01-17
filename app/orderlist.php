<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\CamelCasing;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class orderlist extends Model
{
    //
	//use CamelCasing;

	protected $primaryKey = 'id_order_list';
	protected $table = 'order_lists';
	public $timestamps = false;

	public function itemList() {
		return $this->hasMany('App\itemList', 'id_order_list' , 'id_order_list');
	}
}
