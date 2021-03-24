<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


Class ChildPhoto extends Model
{

    protected $fillable = ['name'];

    protected $table = 'child_photo';
    public $timestamps = false;
    
    public function getNameAttribute(){
        return env('APP_URL') . '/storage/' . $this->attributes['name'];
        }

}