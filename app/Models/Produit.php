<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price'];
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user_produit',
            'produit_id',
            'user_id',
            'id',
            'id'
        );
    }
}
