<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildPhoto;

Class Child extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','sum','header_photo'];

    protected $table = 'children';

    protected $with = ['photo'];

    public function photo()
    {
        return $this->hasMany(ChildPhoto::class);
    }
}