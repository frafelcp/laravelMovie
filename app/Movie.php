<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'category_id'];
    protected $guarded = ['id'];

    public function category()
    {
      return $this->belongsTo('App\Category', 'category_id');
    }
}
