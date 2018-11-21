<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
	protected $table = 'OrderDetails';
	
	protected $fillable = [
		'item_id',
		'order_id',
		'table_id',
		'item_qty',
		'remark'
	];
    

    public function order(){
    	return $this->belongsTo('App\Order');
    }


} // # OrderDetail

	
	
	
	
	