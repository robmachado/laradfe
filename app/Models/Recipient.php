<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    
    public function address()
    {
        return $this->hasOne('App\Models\RecipientAddress');
    }
    
    public function contacts()
    {
        return $this->hasMany('App\Models\RecipientContact');
    }
}
