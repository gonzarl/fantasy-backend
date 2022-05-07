<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    public function finishes(){
        return $this->belongsToMany(Driver::class, 'finishes', 'id', 'id');
    }
}
