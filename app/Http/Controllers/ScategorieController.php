<?php

namespace App\Http\Controllers;

use App\Models\Scategorie;
use Illuminate\Http\Request;

class ScategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //get all
    {
        $scategories = Scategorie::with('categories')->get(); // bech tjib sous categorie + categorie   heka aleh amlin el with yani bech namel relation bin sous categorie w categorie
        return $scategories;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $scategorie = new Scategorie([
            'nomscategorie' => $request->input('nomscategorie'), // bech natih nomscategoriebel input
            'imagescategorie' => $request->input('imagescategorie'),
            'categorieID' => $request->input('categorieID'),
            ]);
            $scategorie->save();
            return response()->json($scategorie,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $scategorie = Scategorie::find($id);
        return response()->json($scategorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $scategorie = Scategorie::find($id); // model houwa eli yamel el  find  ( ylawej al id )
        $scategorie->update($request->all()); // update ll objet eli 9itou bel les valeur eli fi wost el request
        return response()->json($scategorie,200); // nejem nraja3 message awth code 200 ....

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $scategorie = Scategorie::find($id); // . find => nlawej alih
        $scategorie->delete();
        return response()->json('Scategorie supprimée !'); // nraja3 message se forme json

    }
    public function showSCategorieByCAT($idcat) // bech traja3li tous les sous categories mta categorie ili id mte3ou $idcat
    {
    $Scategorie= Scategorie::where('categorieID', $idcat)->with('categories')->get(); // brch trja3li resultaa fi  $Scategorie bech tmchy ll Scategorie w tlawej fi
                    //attribue categorieID  ala valeur $idcat w trja3houli w bad ametlou ->with 5ater 9otlou rajali l'objet kolou ( yani ma hachtich ken bel case heki hachty bel les attribue mte3ou lkol yani l'objet kemel )
    return response()->json($Scategorie);
    }

}
