<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
       'categorie',
        'fournisseurId',
        'userId',
    ];

    public function users(){
        return $this->BelongsTo(User::class, 'userId');
    }
}
