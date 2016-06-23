<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	// set which columns can be mass assigned
	protected $fillable = [
		'title',
		'body'
	];
}
