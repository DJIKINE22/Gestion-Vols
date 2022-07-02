<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    protected $fillable = ['code','date_depart', 'heure_depart','nbre_plc_classA','nbre_plc_classB','prixA','prixB'];
}
