<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'profession',
       
        'email',
        'password',
        'userId',
    ];

    public function users(){
        return $this->BelongsTo(User::class, 'userId');
    }
}
