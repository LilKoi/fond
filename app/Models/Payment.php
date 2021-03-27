<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = ['system','price','children_id','status'];
    public $timestamps = true;

    public function scopeActive($query)
    {
        return $query->where('status', 2);
    }
}