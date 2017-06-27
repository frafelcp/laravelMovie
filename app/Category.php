<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';
  protected $primaryKey = 'id';
  protected $fillable = ['name', 'description'];
  protected $guarded = ['id'];

  public function movies()
  {
    return $this->hasMany('App\Movie', 'category_id', 'id');
  }
}
