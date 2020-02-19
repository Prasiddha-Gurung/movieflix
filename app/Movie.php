<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable=['name','run_time','rating'];
    public $timestamps=false;
    public function director()
    {
        return $this->belongsTo(Director::class);
    }

}
