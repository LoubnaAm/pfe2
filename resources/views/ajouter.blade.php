<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

    .modify-btn,
.delete-btn {
    width: 150px; /* Largeur fixe pour les boutons modifier et supprimer */
    min-width: 150px; /* Largeur minimale pour les boutons */
    max-width: 150px; /* Largeur maximale pour les boutons */
    background-color: #FF69B4; /* Couleur rose */
    border-color: #FF69B4; /* Couleur rose */
    color: white;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
    text-align: center;
    transition: background-color 0.3s ease;
    margin-right: 10px; /* Marge à droite pour l'espacement */
    margin-bottom: 10px; /* Marge en bas pour l'espacement */
}

.modify-btn:hover,
.delete-btn:hover {
    background-color: #FF1493; /* Couleur rose foncé au survol */
    border-color: #FF1493; /* Couleur rose foncé au survol */
}


</style>
<body>

<div class="container">
    <!-- Bouton "Ajouter" -->
    <div class="mb-3">
        <button id="showFormBtn" class="btn btn-primary btn-lg rounded-pill px-4 py-3 custom-btn-width" onclick="showForm()" style="font-size: 1.5rem; font-family: 'Roboto', sans-serif;"><span class="material-symbols-outlined" style="position:relative;top:7px;">add_circle</span> Ajouter</button>
    </div>
    <!-- Formulaire d'ajout (initiallement caché) -->
    <div id="addProductForm" style="display: none;">
        <div class="admin-product-form-container">
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3> Add New Product </h3>
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" accept="image/png,image/jpeg,image/jpg" name="image" class="box mb-3" required>
                        <input type="text" placeholder="Category" name="type" class="box mb-3" required>
                        <input type="number" placeholder="Price" name="price" class="box mb-3" required>
                        <input type="text" placeholder="Description" name="description" class="box mb-3" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Address" name="adresse" class="box mb-3" required>
                        <input type="number" placeholder="SQFT (Square Feet)" name="sqft" class="box mb-3" required>
                        <input type="number" placeholder="Number of Bedrooms" name="numbed" class="box mb-3" required>
                        <input type="number" placeholder="Number of Bathrooms" name="numdouch" class="box mb-3" required>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-success" value="Ajouter Produit">
                </div>
            </form>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session ('success')}}
                </div>
            @endif
        </div>
    </div>
    <!-- Tableau de produits -->
    <div id="productTable" class="product-display mt-3" style="overflow-x: auto; max-height:400px;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Image</th>
                <th>Type</th>
                <th>Price</th>
                <th>Description</th>
                <th>Address</th>
                <th>SQFT</th>
                <th>Number of Bedrooms</th>
                <th>Number of Bathrooms</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <!-- Ici va la boucle PHP pour afficher les produits -->
                @if(!empty($products))
                @foreach($products as $product)
                <tr>
                    <td><img src="{{ asset('images/' . $product->image) }}" alt="Product Image" style="max-height: 100px; max-width: 100px;"></td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->adresse }}</td>
                    <td>{{ $product->sqft }}</td>
                    <td>{{ $product->numbed }}</td>
                    <td>{{ $product->numdouch }}</td>
                    <!-- Boutons d'action -->
                    <td class="action-buttons">
                        <div class="btn-wrapper">
                            <a href="{{ route('products.edit', $product->id) }}" class="action-btn modify-btn">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                        </div>
                        <br>
                        <div class="btn-wrapper">
                            <!-- Ajoutez un identifiant unique pour chaque bouton supprimer -->
                            <form id="deleteForm_{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="#" class="action-btn delete-btn" onclick="confirmDelete('{{ $product->id }}')">
                                    <i class="fas fa-trash-alt"></i> Supprimer
                                </a>
                            </form>
                        </div>
                </tr>
            @endforeach
            @else
    <p>Aucun produit trouvé.</p>
@endif
        </tbody>
    </table>
</div>
</div>
<script>
function showForm() {
    document.getElementById('addProductForm').style.display = 'block';
    document.getElementById('showFormBtn').style.display = 'none';
    document.getElementById('productTable').style.display = 'none';
}

function hideForm() {
    document.getElementById('addProductForm').style.display = 'none';
    document.getElementById('showFormBtn').style.display = 'block';
    document.getElementById('productTable').style.display = 'block';
}
function confirmDelete(productId) {
        if (confirm("Voulez-vous vraiment supprimer ce produit ?")) {
            // Soumettre le formulaire de suppression correspondant
            document.getElementById('deleteForm_' + productId).submit();
        }
    }
</script>
</body>
</html>
