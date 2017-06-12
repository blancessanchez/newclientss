<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
	public $primaryKey = 'billId';
    protected $table = 'tblbilling';
	public $timestamps = false;
}
