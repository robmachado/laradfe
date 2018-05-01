<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issued extends Model
{
    protected $fillable = [
        'key',
        'number',
        'serie',
        'version',
        'model',
        'issuedate',
        'recipient',
        'amount',
        'billed',
        'weight',
        'status',
        'xmlcontent'
    ];
}
