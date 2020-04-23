<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;
  protected $dates=['deleted_at'];
  protected $fillable=['judul','id_category','content','slug','gambar','users_id','status'];
  protected $table="posts";

  public function category(){
    return $this->belongsTo('App\Category', 'id_category');
  }

  public function tags(){
    return $this->belongsToMany('App\Tags');
  }

  public function users(){
    return $this->belongsTo('App\User');
  }

}
