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
         @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

.light {
  --mainColor: #64bcf4;
  --hoverColor: #5bacdf;
  --backgroundColor: #f1f8fc;
  --darkOne: #312f3a;
  --darkTwo: #45424b;
  --lightOne: #919191;
  --lightTwo: #aaa;
}

.right {
    margin: 90px; /* Ajoute une marge de 20px autour de l'élément */
}


.dark {
  --mainColor: #64bcf4;
  --hoverColor: #5bacdf;
  --backgroundColor: #192e3a;
  --darkOne: #f3f3f3;
  --darkTwo: #fff;
  --lightOne: #ccc;
  --lightTwo: #e7e3e3;
}

*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
}

.stop-scrolling {
  height: 100%;
  overflow: hidden;
}

img {
  width: 100%;
}

a {
  text-decoration: none;
}

.big-wrapper {
  position: relative;
  padding: 1.7rem 0 2rem;
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
  background-color: var(--backgroundColor);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  display: flex;
    align-items: center; /* Centrer verticalement */
    justify-content: center; /* Centrer horizontalement */
    min-height: 100vh; /* Assurer que le contenu occupe au moins toute la hauteur de la fenêtre */
    text-align: center;
}

.container {
  position: relative;
  max-width: 81rem;
  width: 100%;
  margin: 0 auto;
  padding: 0 3rem;
  z-index: 10;
}

header {
  position: relative;
  z-index: 70;
}

header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.overlay {
  display: none;
}

.logo {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.logo img {
  width: 40px;
  margin-right: 0.6rem;
  margin-top: -0.6rem;
}

.logo h3 {
  color: var(--darkTwo);
  font-size: 1.55rem;
  line-height: 1.2;
  font-weight: 700;
}
/*
.links ul {
  display: flex;
  list-style: none;
  align-items: center;

}

.links a {
  color: var(--lightTwo);
  margin-left: 4.5rem;
  display: inline-block;
  transition: 0.3s;
}

.links a:hover {
  color: var(--hoverColor);
  transform: scale(1.05);
}
*/
.btn {
  display: inline-block;
  padding: 0.9rem 1.9rem;
  color: #fff !important;
  background-color: var(--mainColor);
  border-radius: 16px;
  text-transform: capitalize;
  transition: 0.3s;
}

.btn:hover {
  background-color: var(--hoverColor);
  transform: scale(1) !important;
}

.hamburger-menu {
  position: relative;
  z-index: 99;
  width: 2rem;
  height: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  display: none;
}

.hamburger-menu .bar {
  position: relative;
  width: 100%;
  height: 3px;
  background-color: var(--darkTwo);
  border-radius: 3px;
  transition: 0.5s;
}

.bar::before,
.bar::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: var(--darkTwo);
  border-radius: 3px;
  transition: 0.5s;
}

.bar::before {
  transform: translateY(-8px);
}

.bar::after {
  transform: translateY(8px);
}

.big-wrapper.active .hamburger-menu .bar {
  background-color: transparent;
}

.big-wrapper.active .bar::before {
  transform: translateY(0) rotate(-45deg);
}

.big-wrapper.active .bar::after {
  transform: translateY(0) rotate(45deg);
}

.showcase-area .container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  align-items: center;
  justify-content: center;
}

.showcase-area .btn {
  box-shadow: 0 0 40px 2px rgba(0, 0, 0, 0.05);
}
.shape {
  position: absolute;
  z-index: 0;
  width: 500px;
  bottom: -180px;
  left: -15px;
  opacity: 0.1;
}

.copy {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  animation: appear 1s 1 both;
}

@keyframes appear {
  0% {
    clip-path: circle(30% at -25% -25%);
  }
  100% {
    clip-path: circle(150% at 0 0);
  }
}

@media screen and (max-width: 870px) {
  .hamburger-menu {
    display: flex;
  }

  .links {
    position: fixed;
    top: 0;
    right: 0;
    max-width: 450px;
    width: 100%;
    height: 100%;
    background-color: var(--mainColor);
    z-index: 95;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translateX(100%);
    transition: 0.5s;
  }

  .links ul {
    flex-direction: column;
  }

  .links a {
    color: #fff;
    margin-left: 0;
    padding: 2rem 0;
  }

  .links .btn {
    background: none;
  }

  .overlay {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 0;
    pointer-events: none;
    transition: 0.5s;
  }

  .big-wrapper.active .links {
    transform: translateX(0);
    box-shadow: 0 0 50px 2px rgba(0, 0, 0, 0.4);
  }

  .big-wrapper.active .overlay {
    pointer-events: all;
    opacity: 1;
  }

  .showcase-area {
    padding: 2.5rem 0;
    max-width: 700px;
    margin: 0 auto;
  }

  .showcase-area .container {
    grid-template-columns: 1fr;
    justify-content: center;
    grid-gap: 2rem;
  }

  .big-title {
    font-size: 1.1rem;
  }

  .text {
    font-size: 0.95rem;
    margin: 1.4rem 0 1.5rem;
  }

  .person {
    width: 100%;
    transform: none;
  }

  .logo h3 {
    font-size: 1.25rem;
  }

  .shape {
    bottom: -180px;
    left: -150px;
  }
}

@media screen and (max-width: 470px) {
  .container {
    padding: 0 1.5rem;
  }

  .big-title {
    font-size: 0.9rem;
  }

  .text {
    margin: 1.1rem 0 1.5rem;
  }

  .showcase-area .btn {
    font-size: 0.8rem;
  }
}

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
        .left-align {
    text-align: left;
    margin-left: 100px; /* Ajustez cette valeur selon votre besoin */
}
        .main h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .main p {
            color: white;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .logo img {
            width: 60px; /* Ajustez la taille de votre logo selon vos besoins */
            height: auto;
        }

        .links {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .links ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .links ul li {
            display: inline;
            margin-right: 20px; /* Augmentez l'espace entre les liens ici */
        }

        .links ul li:last-child {
            margin-right: 0; /* Aucun espace à droite pour le dernier lien */
        }

        .links ul li a {
            text-decoration: none;
            color: white;
        }

        .links ul li a:hover {
            color: #ff69b4;
        }
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
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

/* Thème clair */
.light {
    --mainColor: #64bcf4;
    --hoverColor: #5bacdf;
    --backgroundColor: #f1f8fc;
    --darkOne: #312f3a;
    --darkTwo: #45424b;
    --lightOne: #919191;
    --lightTwo: #aaa;
}

/* Thème sombre */
.dark {
    --mainColor: #64bcf4;
    --hoverColor: #5bacdf;
    --backgroundColor: #192e3a;
    --darkOne: #f3f3f3;
    --darkTwo: #fff;
    --lightOne: #ccc;
    --lightTwo: #e7e3e3;
}

/* Réinitialisation des styles par défaut */
*,
*::before,
*::after {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

/* Police de caractères globale */
body {
    font-family: "Poppins", sans-serif;
}

/* Classe pour désactiver le défilement */
.stop-scrolling {
    height: 100%;
    overflow: hidden;
}

/* Styles pour les liens dans le menu de navigation */
.links ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.links ul li {
    margin-right: 20px;
}
.links ul li:last-child {
    margin-right: 0;
}
.links ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    transition: color 0.3s;
}

.links ul li a:hover {
    color: #ff69b4;
}
.custom-heading {
    color: #0c0b0b; /* Couleur du texte */
    font-size: 2.5rem; /* Taille de la police */
    font-weight: italic; /* Gras */
    position: relative;
    left:350px ;

}
    </style>
</head>
<body>
<div class="banner">
    <div class="logo">
        <img src="images/logo.png" alt="Logo de l'agence">
    </div>
    <section class="main py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-10 py-5 mx-auto">
                    <h1 class="text-white text-center left-align">Bienvenue dans notre catalogue</h1>
                    <p class="text-white text-center left-align">Naviguez en toute Confiance dans le Monde de l'Immobilier avec Agence Aji Tsken</p>

                </div>
            </div>
        </div>
    </section>
    <div class="links">
        <ul>
            <li><a href="#">Acceuil</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Catalogues</a></li>
            <li><a href="#">Reglementation</a></li>
            <li><a href="#"> Contact</a></li>
        </ul>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
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
</body>
</html>
