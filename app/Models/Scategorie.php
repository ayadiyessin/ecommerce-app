<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomscategorie','imagescategorie','categorieID'
    ]; // les champ eli yejmou yda5alhom utilisateur
    public function categories() // hethy fonction  : une sous ctegorie appartien a une categorie
    {
        return $this->belongsTo(Categorie::class,"categorieID"); // une sous ctegorie appartien a une categorie
    }

    public function article() // sous categorie contient plusieur article 
    {
    return $this->hasMany(Article::class,"scategorieID");
    }
}
