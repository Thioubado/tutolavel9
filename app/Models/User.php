<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    /*
        si la table de la base de donnees ne porte pas le mm nom alors on cree une variable publique et on y met le nom de la table comme ci-dessous:
        public $table = "le nom de la table";
    */

    public $timestamps = false;
}
