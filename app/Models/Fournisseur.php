<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'date_livraison',
        'nbre_livres',
        'email',
        'password',
        'userId',
    ];

    public function users(){
        return $this->BelongsTo(User::class, 'userId');
    }
}
