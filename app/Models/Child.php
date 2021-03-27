<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildPhoto;
use App\Models\Payment;

Class Child extends Model
{
    use HasFactory;

    public $HELP = 1;
    public $DONT_HELP = 2;
    public $EXPECTED = 3;
    protected $fillable = ['name','description','sum','status','ru','name_parent','city'];
    protected $table = 'children';
    protected $with = ['photo','payment'];
    public $timestamps = false;
    
    public function photo()
    {
        return $this->hasMany(ChildPhoto::class,'child_id','id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class, 'children_id', 'id')->active();
    }
}