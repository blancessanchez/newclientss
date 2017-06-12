<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ssr extends Model
{
	public $primaryKey = 'ssrId';
    protected $table = 'tblssr';
	public $timestamps = false;
}
