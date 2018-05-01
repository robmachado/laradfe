<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'fantasy',
        'name',
        'cnpj',
        'ie',
        'im',
        'cnae',
        'crt',
        'certificate',
        'password',
        'validuntil',
        'chain',
        'model',
        'serie',
        'number',
        'environment'
    ];
    
    public function address()
    {
        return $this->hasOne('App\Models\Address');
    }
}
