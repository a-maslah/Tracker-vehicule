<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    protected $table = 'utilisateurs'; // Nom de la table concernée par cette classe
	public $timestamps = false;
}
