<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="catalogue2.css">
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
    </style>
</head>
<body>
   <div class="container-xxl bg-white p-0">
    <!---properyty List-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft">
                        <h1 class="mb-3">Properety Listing</h1>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                                        '<small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>'+ sqft+'</small>'+
                                        '<small class="flex-fill text-center border-end py-2"><i class="fa fa-bed  text-primary me-2"></i>'+ numbed+'</small>'+
                                        '<small class="flex-fill text-center border-end py-2"><i class="fa fa-bath  text-primary me-2"></i>'+ numdouch+'</small>'+
                                    '</div>';
                infoDiv.style.display = 'block'; // Show the clicked info div
            } else {
                infoDiv.style.display = 'none'; // Hide if already visible
            }
        }
    </script>

</body>
</html>
