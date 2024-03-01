<?php

namespace App\Repositories\personne;

use App\Repositories\BaseRepositorie;
use App\Models\Formateur;

class FormateurRepositorie extends BaseRepositorie
{
    public function __construct(Formateur $client){
        parent::__construct($client);
    }

    public function paginate($perPage = 3, $type = 'formateur'){
        return parent::paginate($perPage, $type);
    }
    
    public function searchClient($search){
        return Formateur::where('type', 'formateur')->where(function($query) use ($search) {
            $query->where('nom', 'like', '%' . $search . '%')
                  ->orWhere('prenom', 'like', '%' . $search . '%');
        })->paginate();
    }
}