<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // protected $guarded = []; //Perché non serve più? C'è ancora mass assignment!
  public function posts()
  {
    return $this->belongsTo("App\Category");
  }
}
