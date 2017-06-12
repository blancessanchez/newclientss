<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	public $primaryKey = 'prodId';
    protected $table = 'tblproducts';

}
