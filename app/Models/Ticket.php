<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable=['isValid'];
    protected $primaryKey='ticket_number';
    use HasFactory;
    public function agence(){
        return $this->belongsTo(Agence::class,'agenceId','id');
    }
   
}
