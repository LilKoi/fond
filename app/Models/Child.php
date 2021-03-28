<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildPhoto;
use App\Models\Payment;
use App\Models\City;

Class Child extends Model
{
    use HasFactory;

    public const STATUSES = [
        1 => "HELP",
        2 => 'DONT_HELP',
        3 => 'EXPECTED'
    ];
    protected $fillable = ['name','description','sum','status','ru','name_parent','city'];
    protected $table = 'children';
    protected $with = ['photo','payment','city'];
    public $timestamps = false;
    
    public function photo()
    {
        return $this->hasMany(ChildPhoto::class,'child_id','id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class, 'children_id', 'id')->active();
    }
    public function city()
    {
        return $this->hasOne(City::class,'id','city');
    }
}