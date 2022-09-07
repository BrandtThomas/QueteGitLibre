<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St2mflix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <!-- Nav -->
<nav class="navbar navbar-expand-md navbar-dark navBarCss fixed-top">
    <a class="navbar-brand" href="index.php"><img src="img/ressources/logo.png" height="40" alt="Logo St2mflix"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav m-auto ml-4">
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=dreamworks"><img src="img/ressources/dreamWorksLogo.png" height="40" alt="Logo DreamWorks"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=pixar"><img src="img/ressources/pixarLogo.png" height="40" alt="Logo DreamWorks"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=disney"><img src="img/ressources/disneyLogo.png" height="40" alt="Logo DreamWorks"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=ankama"><img src="img/ressources/ankamaLogo.png" height="40" alt="Logo DreamWorks"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=toei"><img src="img/ressources/toeiLogo.png" height="40" alt="Logo DreamWorks"></a>
        </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Recherche">
    </form>
    <button type="button" class="btn btn-outline-info mx-3">Log In</button>
</div>
</nav>
  
<div class="jumbotron bg-dark">
</div>
<section class="container-fluid">
    <div class="row justify-content-around">
        <div class="content1">
            <div class="card">
            <img src="./img/extrait/kungFuPandaExtrait.jpg" alt=""  width="300" height="200" >
            </div>
        </div>
    <div class="content2">
        <div class="card">
        <img src="./img/extrait/mulanExtrait.jpg" alt=""  width="300" height="200" >
        </div>
    </div>
    <div class="content3">
        <div class="card">
        <img src="./img/extrait/onePieceExtrait.jpg" alt=""  width="300" height="200" >
        </div>
    </div>

    <div class="content4">
        <div class="card">
        <img src="./img/extrait/rebelExtrait.jpg" alt=""  width="300" height="200" >
        </div>
    </div>
</div>
</section>

<footer>
<p class="text-center mt-3 footerColor">&copy;St2mflix</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
