<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //Belong to relationship User

    public function user(){
        return $this->belongsTo('App\User');
    }
}
