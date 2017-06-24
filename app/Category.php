<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';
  protected $primaryKey = 'id';
  protected $filliable = ['name', 'description'];
  protected $guarded = ['id'];
}
