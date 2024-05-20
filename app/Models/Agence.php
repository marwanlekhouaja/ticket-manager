<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function tickets(){
        return $this->hasMany(Ticket::class,'agenceId','id') ;
    }
}
