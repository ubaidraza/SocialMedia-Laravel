<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id','content','live','post_on'];
    protected $dates = ['post_on'];

    
public function setLiveAttribute($value){
    $this->attributes['live'] = (boolean)($value);
}

public function setPostOnAttribute($value){
    $this->attributes['post_on']= Carbon::parse($value);
}

}

