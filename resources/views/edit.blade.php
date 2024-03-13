<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Produit</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root{
        --green: #27ae60;
        --black: #333;
        --white: #fff;
        --bg-color:#eee;
        --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
        --border: .1rem solid var(--black);
    }
    *{
        font-family: 'Poppins',sans-serif;
        margin: 0;
        padding:0;
        box-sizing: border-box;
        outline:none;border: none;
        text-decoration: none;
        text-transform: capitalize;
    }
    html{
        font-size:62.5%;
        overflow-x:hidden;
    }
    .container{
        max-width:1200px;
        padding:2rem;
        margin :0 auto;
        position :relative;
        left:60px;
        top:90px;
    }
    .admin-product-form-container form, .product-display-table {
        max-width: 60rem;
        margin: 1rem auto 0;
        padding: 2rem;
        border-radius: .5rem;
        background-color: #F8E7EB; /* Couleur rose */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Ombre douce */
    }
    .admin-product-form-container form h3{
        text-transform: uppercase;
        color: #333;
        margin-bottom: 1rem;
        text-align: center;
        font-size: 2rem;
    }
    .admin-product-form-container form .box, .product-display-table th, .product-display-table td {
        width:  100%;
        border-radius: .5rem;
        padding: 1rem;
        font-size: 1rem;
        margin: 0.7rem 0;
        background: #fff;
        text-transform: none;
        border: 1px solid #ccc; /* Bordure */
    }
    .admin-product-form-container form .box:focus{
        border-color: #27ae60; /* Bordure verte lorsqu'elle est focus */
    }
    .text-center {
        text-align: center;
    }
    .product-display {
        margin-top: 2rem;
        max-width: 100%;
    }
    .custom-btn-width {
        width: 200px;
        background-color: #FF69B4; /* Couleur rose */
        border-color: #FF69B4; /* Couleur rose */
    }
    .custom-btn-width:hover {
        background-color: #FF1493; /* Couleur rose foncé au survol */
        border-color: #FF1493; /* Couleur rose foncé au survol */
    }
    .product-display-table thead{
        background-color: #F8E7EB; /* Couleur rose pâle */
        color: var(--black);
        text-align: center;
    }
    .product-display-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .product-display-table tbody tr:hover {
        background-color: #ddd;
    }

    .product-display-table tbody tr {
        height:100px; /* Définissez la hauteur souhaitée pour chaque ligne du tableau */
    }

    .action-btn {
        width: 150px; /* Largeur fixe pour tous les boutons */
        background-color: #FF69B4; /* Couleur rose */
        border-color: #FF69B4; /* Couleur rose */
        color: white;
        padding: 5px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 12px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .action-btn:hover {
        background-color: #FF1493; /* Couleur rose foncé au survol */
        border-color: #FF1493; /* Couleur rose foncé au survol */
    }
    .current-image {
        max-width: 150px;
        height: auto;
        margin-top: 10px;
    }
</style>
<body>
    <div class="container">
        <div class="admin-product-form-container">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3>Modifier Produit</h3>
                <div class="row">
                    <div class="col-md-6">
                       <!-- <input type="text" class="box mb-3" value="{{ $product->image }}" readonly>-->                     <!-- Afficher l'image actuelle -->
                        <img src="{{ asset('images/' . $product->image) }}" alt="Current Image" class="current-image">
                        <!-- Champ pour téléverser une nouvelle image -->
                        <input id="imageInput" type="file" accept="image/png,image/jpeg,image/jpg" name="image" class="box mb-3">
                        <!-- Champ caché pour stocker le nom du fichier actuel -->
                        <input type="hidden" name="current_image" value="{{ $product->image }}">
                        <input type="text" name="type" class="box mb-3" placeholder="type" value="{{ $product->type }}" required>
                        <input type="number" name="price" class="box mb-3" placeholder="Prix" value="{{ $product->price }}" required>
                       </div>
                       <div class="col-md-6">
                        <input type="text" placeholder="Description" name="description" class="box mb-3" value="{{ $product->description }}" required>
                        <!-- Champ pour l'adresse -->
                        <input type="text" placeholder="Address" name="adresse" class="box mb-3" value="{{ $product->adresse }}" required>
                        <!-- Champ pour le SQFT -->
                        <input type="number" placeholder="SQFT (Square Feet)" name="sqft" class="box mb-3" value="{{ $product->sqft }}" required>
                        <!-- Champ pour le nombre de chambres -->
                        <input type="number" placeholder="Number of Bedrooms" name="numbed" class="box mb-3" value="{{ $product->numbed }}" required>
                        <!-- Champ pour le nombre de douches -->
                        <input type="number" placeholder="Number of Bathrooms" name="numdouch" class="box mb-3" value="{{ $product->numdouch }}" required>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-success" value="Modifier Produit">
                </div>
            </form>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>


</body>
</html>
