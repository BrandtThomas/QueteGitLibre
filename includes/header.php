    <!-- Nav -->
<header>
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
        <a href="?studio=pixar"><img src="img/ressources/pixarLogo.png" height="40" alt="Logo Pixar"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=disney"><img src="img/ressources/disneyLogo.png" height="40" alt="Logo Disney"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=ankama"><img src="img/ressources/ankamaLogo.png" height="40" alt="Logo Ankama"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=toei"><img src="img/ressources/toeiLogo.png" height="40" alt="Logo Toei"></a>
        </li>
        <li class="nav-item active mx-auto mx-md-3">
        <a href="?studio=wb"><img src="img/ressources/wbLogo.png" height="40" alt="Logo Toei"></a>
        </li>
    </ul>
    <form method="GET" class="form-inline my-2 my-md-0">
        <input class="form-control" name="recherche" type="search" placeholder="Recherche">
        <?php
              
              if (!empty($_SESSION)){ ?>
                  <a href="?form=deconnexion"><button type="button" class="btn btn-outline-danger ml-3">Log out</button></a>
              
             <?php }
      
             else { ?>
                  <a href="?form=login"><button type="button" class="btn btn-outline-info mx-3">Log in</button></a>
             
         <?php }
          ?>
    </form>
   
    </div>
    </nav>
</header>
