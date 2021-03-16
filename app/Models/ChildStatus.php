<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class ChildStatus extends Model
{
    protected $table = 'status_children';

    protected $fillable = ['name'];
    
    // public $timestamps = false;
}