<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produit;
class TestController extends Controller
{
    public function getusers()
    {
        $produit = Produit::find(2);
        return $produit->users;
    }
    public function getproduit()
    {
        $user = User::find(2);
        return $user->produits;
    }
}
