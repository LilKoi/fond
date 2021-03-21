<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'region',
        'city',
    ];

    protected $table = 'city';
    protected $hidden =["created_at","updated_at"];
}