<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'tblproject';
    public $primaryKey = 'projectId';
    public $timestamps = false;

}
