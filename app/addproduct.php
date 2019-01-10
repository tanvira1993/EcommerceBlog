<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Eloquence\Behaviours\CamelCasing;

class OtherDocument extends Model
{
    //
	use CamelCasing;

	protected $primaryKey = 'id_products';
	protected $table = 'product_lists';
	public $timestamps = false;
}
