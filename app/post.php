<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title','content','category_id','user_id','photo_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->belongsTo('App\photo');
    }

    public function category(){
        return $this->belongsTo('App\category');
    }
    //
}
