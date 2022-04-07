<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bejegyzes extends Model
{
    public function tevekenyseg(){
        return $this->hasOne(Tevekenysegek::class, 'id', 'tevekenysegID');
    }
    use HasFactory;
}
