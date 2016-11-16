<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{

    public $fillable = [
      'name',
      'description',
    ];

  public function user()
   {
       return $this->belongsTo('App\User');
   }

}
