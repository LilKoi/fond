<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildPhoto;

Class Child extends Model
{
    use HasFactory;

    public $DONT_HELP = 2;
    public $HELP = 1;
    public $EXPECTED = 3;
    protected $fillable = ['name','description','sum','status','ru','name_parent','city'];
    protected $table = 'children';
    protected $with = ['photo'];
    public $timestamps = false;
    public function photo()
    {
        return $this->hasMany(ChildPhoto::class,'child_id','id');
    }
}