<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable=['name','slug'];
  protected $table="category";

  public function posts(){
    return $this->hasMany('App\Post', 'id_category')->where('status','publish');
  }

  public function getRouteKeyName(){
    return 'slug';
  }
}
