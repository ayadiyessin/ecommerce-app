<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomcategorie','imagecategorie'
    ]; // chnouma les champ eli bech yatihom utilisateur yani eli bech i3amarhom utilisateur 

}
