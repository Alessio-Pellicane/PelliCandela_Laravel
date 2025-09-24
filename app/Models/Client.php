<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        "nom",
        "prenom",
        "date_naissance",
        "email",
        "telephone"
    ];
}
