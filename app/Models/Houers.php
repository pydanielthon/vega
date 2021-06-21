<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houers extends Model
{
    protected $table = 'houers';
    protected $fillable = [
        'name',
        'workers_id',
        'contrahents_id',
        'data',
        'houers',
        'corrections',
    ];
    public function workers()
    {
        return $this->belongsTo(Workers::class);
    }

    public function contrahents()
    {
        return $this->belongsTo(Contrahents::class);
    }

}
