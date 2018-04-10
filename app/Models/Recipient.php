<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    
    public function phone()
    {
        return $this->hasOne('App\Models\RecipientAdress');
    } 
    public function contacts()
    {
        return $this->hasMany('App\Models\RecipientContact');
    }
}
