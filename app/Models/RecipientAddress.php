<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipientAddress extends Model
{
    public function recipient()
    {
        return $this->belongsTo('App\Models\Recipient');
    }
}
