<?php $db = new PDO('mysql:host=localhost;dbname=quetegit','root','') ; ?>
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




<?php 
    if(isset($_GET['id'])){
    $sql = "SELECT * FROM item WHERE id = :id";
            $prepare=$db->prepare($sql);
            $prepare->execute(
                [
                    'id' => $_GET['id']
                ]
            );
            $list = $prepare->fetch();
        ?>

        <section class="container-fluid mt-5 pt-5">
                <div class="row justify-content-center">
                    <div class="col-3">
                    <img class="col-12" src="<?php echo $list['image'] ;?>" alt=""> 
                    </div>
                    <div class="col-4 text-center">
                    <p class="text-light"><?php echo 'titre: ' . $list['titre']; ?></p>
                    <p class="text-light"><?php echo 'description: ' . $list['description']; ?></p>
                    <p class="text-light"><?php echo 'redirection: ' . $list['redirection']; ?></p>
                    <p class="text-light"><?php echo 'studio: ' . $list['studio']; ?></p>
                    <p class="text-light"><?php echo 'Id : ' . $list['id']; ?></p>
                    <a href="?modifier&item=<?php echo $list['id'] ?>"><button class="btn btn-dark" name="modifier">Modifier</button></a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                    </div>
                </div>
        </section>
            <?php
}
    else if (isset($_GET['studio'])) {
        // DreamWorks
            if ($_GET['studio'] == "dreamworks"){
                $sql = "SELECT * FROM item WHERE studio = :studio";
                $prepare=$db->prepare($sql);
                $prepare->execute(
                    [
                        'studio' => "DreamWorks Animation"
                    ]
                );
                $list = $prepare->fetchall(); ?>
                <section class="mt-5 pt-5">
                <div class=" row justify-content-center">
                    <?php
                foreach ($list as $value){ ?>
                    <div class="col-2 m-3" >
                    <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="250" alt="">
                    </div>
                <?php } 
                ?>
                </div>
                </section>
                <?php }
            
            // pixar

            if ($_GET['studio'] == "pixar"){
                $sql = "SELECT * FROM item WHERE studio = :studio";
                $prepare=$db->prepare($sql);
                $prepare->execute(
                    [
                        'studio' => "Pixar"
                    ]
                );
                $list = $prepare->fetchall(); ?>
                <section class="mt-5 pt-5">
                <div class=" row justify-content-center">
                    <?php
                foreach ($list as $value){ ?>
                    <div class="col-2 m-3" >
                    <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="250" alt="">
                    </div>
                <?php } 
                ?>
                </div>
                </section>
                <?php }

                    // disney

            if ($_GET['studio'] == "disney"){
                $sql = "SELECT * FROM item WHERE studio = :studio";
                $prepare=$db->prepare($sql);
                $prepare->execute(
                    [
                        'studio' => "Disney"
                    ]
                );
                $list = $prepare->fetchall(); ?>
                <section class="mt-5 pt-5">
                <div class=" row justify-content-center">
                    <?php
                foreach ($list as $value){ ?>
                    <div class="col-2 m-3" >
                    <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="250" alt="">
                    </div>
                <?php } 
                ?>
                </div>
                </section>
                <?php }


                    // ankama
                if ($_GET['studio'] == "ankama"){
                    $sql = "SELECT * FROM item WHERE studio = :studio";
                    $prepare=$db->prepare($sql);
                    $prepare->execute(
                        [
                            'studio' => "Ankama"
                        ]
                    );
                    $list = $prepare->fetchall(); ?>
                    <section class="mt-5 pt-5">
                    <div class=" row justify-content-center">
                        <?php
                    foreach ($list as $value){ ?>
                        <div class="col-2 m-3" >
                        <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="250" alt="">
                        </div>
                    <?php } 
                    ?>
                    </div>
                    </section>
                    <?php }


                        // toei
                if ($_GET['studio'] == "toei"){
                    $sql = "SELECT * FROM item WHERE studio = :studio";
                    $prepare=$db->prepare($sql);
                    $prepare->execute(
                        [
                            'studio' => "Toei Animation"
                        ]
                    );
                    $list = $prepare->fetchall(); ?>
                    <section class="mt-5 pt-5">
                    <div class=" row justify-content-center">
                        <?php
                    foreach ($list as $value){ ?>
                        <div class="col-2 m-3" >
                        <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="250" alt="">
                        </div>
                    <?php } 
                    ?>
                    </div>
                    </section>
                    <?php }
            

           
            }
    else { 
        ?>
        <div class="jumbotron bg-dark">
        </div>
        <section class="container">
            <div class="row text-center" >
        <?php

            $sql= 'SELECT * FROM item';
            $prepare = $db->prepare($sql);
            $prepare->execute();
            $liste = $prepare->fetchALL();
            foreach ($liste as $value){ ?>
            <div class="col-2 m-3" >
            <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="150" alt="">
            </div>
        <?php } 
        ?>
            </div>
        </section>
        <?php }
        ?>




<footer class="fixed-bottom">
<p class="text-center mt-3 footerColor">&copy;St2mflix</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
