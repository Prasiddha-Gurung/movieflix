<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    public $timestamps=false;
    protected $fillable=['name','age'];
    public function movie()
    {
        return $this->hasMany('Movie');
    }
}
