<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrahents extends Model
{
    protected $table = 'contrahents';
    protected $fillable = [
        'name',
        'g',
        'email',
        'token',
        'k',
        'f',
        'notes',
    ];

    public function houers(){
        return $this->hasMany(Houers::class);
    }
}
