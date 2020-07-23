<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //$entry->user
    //Entry N - user 1
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
