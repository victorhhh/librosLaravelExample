<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = "videos";
    protected $fillable =['tile','descripcion','users_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
