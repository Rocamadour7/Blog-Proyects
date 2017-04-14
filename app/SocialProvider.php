<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
     protected $fillable = [
        'provider', 'provider_id'
     ];

    public function User()
    {
      return $this->belongsTo('App\User');
    }
}
