<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Customer extends \Eloquent {

	use SoftDeletingTrait;

	protected $guarded = [
		'id',
		'email',
		'deleted_at',
		'created_at',
		'updated_at',
	];
	
}