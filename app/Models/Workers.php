<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    protected $table = 'workers';
    protected $fillable = [
        'name',
        'surname',
        'token',
        'salary',
        'address',
        'notes',
        'price'
    ];

    public function houers(){
        return $this->hasMany(Houers::class);
    }
}
