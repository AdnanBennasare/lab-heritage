<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personne;
use App\Traits\MorphType; 

class Stagiaire extends Personne
{
    use HasFactory, MorphType; 
}
