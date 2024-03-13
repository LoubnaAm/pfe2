<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@100;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .main select{
            height: 40px;
            width: 90%;
            outline: none;
            padding: 0 20px;
        }

        .btn1 {
            background-color: #ff69b4;
            color: white;
            outline: none;
            border: none;
            width: 90%;
            height: 40px;
            margin-top: 32px;
        }

        .btn1:hover{
            background-color:#c71585;
            transition:0.5s;
        }

        .main span {
            color: gray;
            font-weight: 600;
        }

        .card {
            border: none;
        }

        .banner {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 0 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('/images/rose33.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            transition: 0.5s;
            color: white;
            text-align: center;
        }

        .main h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .main p {
            color: white;
        }
        /* style de main*/
        :root{
            --primary:#00B98E;
            --light:#Effdf5;
        }
    .property-item img {
        height: 300px; /* Réglez la hauteur souhaitée ici */
        object-fit: cover; /* Ajustez la propriété object-fit en fonction de vos besoins */
        width: 100%; /* Gardez la largeur à 100% pour maintenir l'aspect ratio */
    }
    .cat-item img{
        height: 100px; /* Réglez la hauteur souhaitée ici */
        object-fit: cover; /* Ajustez la propriété object-fit en fonction de vos besoins */
        width: 100%;
    }
    .icon{
        padding: 15px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #ffffff !important;
        border-radius: 50px;
        border: 1px dashed var(--primary) !important;
    }
    .align-top {
    vertical-align: top; /* Pour aligner le texte en haut */
    }
    .btn-hover-blue:hover {
            color: #0d6efd; /* Couleur bleue par défaut de Bootstrap */
        }
        .info {
            display: none;
        }
        .logo {
    position: fixed; /* Fixer la position du logo */
    top: 20px;
    left: 20px;
    z-index: 999; /* Assure que le logo est au-dessus de tous les autres éléments */
     }

.logo img {
    width: 80px; /* Ajustez la taille de votre logo selon vos besoins */
    height: auto;
}
       </style>
</head>
<body>
<div class="banner d-flex align-items-center justify-content-center">
    <div class="logo">
        <img src="images/logo.png" alt="Logo de l'agence">
    </div>
<section class="py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-10 py-5 mx-auto">
                    <h1 class="text-white text-center">Trouver Votre Maison De Rêve</h1>
                    <p class="text-white text-center">Nous proposons les meilleures Offres Immobilières</p>
                    <div class="d-flex justify-content-start"id="searchButtons" style="display: none;">
                        <input type="button" class="btn1 me-2 rounded-pill" id="btnRechercherVente" value="Rechercher Vente">
                        <input type="button" class="btn1 rounded-pill" id="btnRechercherLocation" value="Rechercher Location">
                    </div>
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <div class="card mt-4" id="searchBarVente" style="display:none;">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="col-lg-3">
                                            <span>Emplacement</span>
                                            <input type="text" class="mt-2" name="adresse" placeholder="Ville" id="adresse">
                                        </div>
                                        <div class="col-lg-3">
                                            <span>Type de propriété</span>
                                            <input  type="text"class="mt-2" name="type" id="type" placeholder="Type">
                                        </div>
                                        <div class="col-lg-3">
                                            <span>Echelle des prix</span>
                                            <input type="number"class="mt-2" name="price" id="price" placeholder="Prix/jours">
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="submit" class="btn1" id="btnRechercher" value="Rechercher Vente">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>


</section>
</div>
<div class="carousel-box">
    <!-- Contenu du carousel -->
</div>

<main>
    <div class="container-xxl bg-white p-0">
        <!---properyty List-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                      <div class="text-start mx-auto mb-5 wow slideInLeft">
                        <h1 class="mb-3 custom-heading">Catalogue de Vente</h1>
                    </div>
                    </div>

                </div>
                <!--tab content-->
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @php
                                $products = App\Models\Products::all();
                            @endphp
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 wow fadeIn">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <img src="{{ asset('images/' . $product->image) }}" alt="" class="img-fluid" onclick="showInfo(this, '{{ $product->price }}', '{{ $product->description }}', '{{ $product->adresse }}', '{{ $product->sqft }}', '{{ $product->numbed }}', '{{ $product->numdouch }}')" >
                                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 max-4 pt-1 px-3">{{ $product->type}}</div>
                                        </div>

                                        <div class="info">
                                            <h5 class="text-primary mb-3">{{ $product->price}}DH</h5>
                                            <div>{{ $product->description }}</div>
                                            <div><i class="fa fa-map-market-alt text-primary me-2"></i>{{ $product->adresse }}</div>
                                            <div>
                                                <i class="fa fa-ruler-combined text-primary me-2"></i>{{ $product->sqft }}
                                                <i class="fa fa-bed  text-primary me-2"></i>{{ $product->numbed }}
                                                <i class="fa fa-bath  text-primary me-2"></i>{{ $product->numdouch }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function showInfo(img, price, description, adresse, sqft, numbed, numdouch) {
        var infoDiv = img.parentElement.nextElementSibling;
        if (infoDiv.style.display === 'none') {
            $('.info').hide(); // Hide all info divs
            infoDiv.innerHTML =
                                '<div class="p-4 pb-0">'+
                                '<h5 class="text-primary mb-3">' + price +'DH</h5>' +
                                '<a href="#" class="d-block h5 mb-2 text-decoration-none text-dark">'+ description+'</a>'+
                                '<p><i class="fa fa-map-market-alt text-primary me-2"></i>'+adresse+'</p>' +'</div>'+
                                '<div class="d-flex border-top">' +
                                    '<small class="flex-fill text-center border-right py-3"><i class="fa fa-ruler-combined text-primary me-2"></i>' + sqft +'</small>' +
                                    '<small class="flex-fill text-center py-3"><i class="fa fa-bed text-primary me-2"></i>' + numbed+'</small>' +
                                    '<small class="flex-fill text-center py-3"><i class="fa fa-bath text-primary me-2"></i>'+numdouch+'</small>' +
                                '</div>';
            infoDiv.style.display = 'block';
        } else {
            infoDiv.style.display = 'none';
        }
    }
</script>
<script>
 $(document).ready(function(){
    $('#btnRechercher').click(function(e){
        e.preventDefault();

        var adresse = $('#adresse').val();
        var type = $('#type').val();
        var price = $('#price').val();

        $.ajax({
            url: "{{ route('search') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                adresse: adresse,
                type: type,
                price: price
            },
            success: function(response){
                // Mettez à jour le contenu de la section <main> avec la réponse
                $('main').html(response);
                console.log(response);

            },
            error: function(xhr){
                console.log(xhr.responseText);
            }
        });
    });

    $('#btnRechercherVente').click(function(){
        $('#searchBarLocation').hide();
        $('#searchBarVente').show();
    });

    $('#btnRechercherLocation').click(function(){
        $('#searchBarVente').hide();
        $('#searchBarLocation').show();
    });
});

</script>

</script>

</body>
</html>
