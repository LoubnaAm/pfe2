<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Récupérer tous les produits depuis la base de données
    //$products = Products::all();
    $products = Products::orderByDesc('created_at')->get();

    // Passer les produits à la vue 'ajouter' pour les afficher
    return view('ajouter', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
{

   return view('ajouter');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'type' => 'required',
        'price' => 'required',
        'description' => 'required',
        'adresse' => 'required',
        'sqft' => 'required',
        'numbed' => 'required',
        'numdouch' => 'required',
    ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $products = new Products();

        $products->image = $imageName;
        $products->type = $request->type;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->adresse = $request->adresse;
        $products->sqft = $request->sqft;
        $products->numbed= $request->numbed;
        $products->numdouch = $request->numdouch;
        $products->save();

        return redirect()->route('index')->with('success', 'Product added with success');


}
    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit($id)
     {
        // Récupérer le produit correspondant à l'ID donné
    $product = Products::findOrFail($id);

    // Passer le produit à la vue 'edit' pour l'afficher dans le formulaire d'édition
    return view('edit', compact('product'));
     }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $product = Products::findOrFail($id);

    $request->validate([
        'type' => 'required',
        'price' => 'required',
        'description' => 'required',
        'adresse' => 'required',
        'sqft' => 'required',
        'numbed' => 'required',
        'numdouch' => 'required',
    ]);

    // Vérifier si un fichier est téléversé
    if ($request->hasFile('image')) {
        // Téléverser le nouveau fichier
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    } else {
        // Utiliser le nom du fichier actuel
        $imageName = $request->current_image;
    }

    // Mettre à jour les attributs du produit avec les données du formulaire
    $product->update([
        'image' => $imageName,
        'type' => $request->type,
        'price' => $request->price,
        'description' => $request->description,
        'adresse' => $request->adresse,
        'sqft' => $request->sqft,
        'numbed' => $request->numbed,
        'numdouch' => $request->numdouch,
    ]);

    return redirect()->route('index')->with('success', 'Product updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('index')->with('success', 'Product deleted successfully');
    }

    public function search(Request $request)
    {
        // Récupérez les données de la requête
        $adresse = $request->input('adresse');
        $type = $request->input('type');
        $price = $request->input('price');

        
        $products = Products::where('adresse', 'LIKE', "%$adresse%")
            ->where('type', 'LIKE', "%$type%")
            ->where('price', $price)
            ->get();


        return view('Recherche', compact('products'));
    }

}
