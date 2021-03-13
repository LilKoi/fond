<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

Class Сhildren extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',	'description',
        'sum','header_photo'];

    protected $table = 'children';
}