<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcctUsers extends Model
{
	protected $fillable = [
		'acctName',
		'acctUsername',
		'acctContact',
		'email'
	];

	public $timestamps = false;

    protected $table = 'users';
}
