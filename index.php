<?php session_start(); ?>
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
<?php include 'includes/header.php'; ?>

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
                    <div class="col-5 text-center">
                    <h1 class="text-light"><?php echo $list['titre']; ?></h1>
                    <h3 class="text-light"><?php echo 'Studio : ' . $list['studio']; ?></h3>
                    <p class="text-light my-4"><?php echo $list['description']; ?></p>      
                    <div class="row justify-content-between">
                        <div>
                        <a href="?viewFilm=<?php echo $list['id']; ?>"><button class="btn btn-warning" name="modifier">Voir le film</button></a>        
                        </div>
                <?php if (!empty($_SESSION)){ ?>
                    <div>
                                            
                    <a href="?modifyId=<?php echo $list['id'] ?>"><button class="btn btn-primary" name="modifier">Modifier</button></a>
                    </div>
                    <form action="index.php" method="POST">
                            <input type="hidden" name="valeurId" value="<?php echo $list["id"]; ?>">
                            <input type="submit" name="del" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" value="Supprimer"></input>   
                        </form>
                    </div>    
                <?php }
                ?>
                       
                    
                    
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
            <section class="container mt-5 pt-5">
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
            <section class="container mt-5 pt-5">
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
            <section class="container mt-5 pt-5">
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
                <section class="container mt-5 pt-5">
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
                <section class="container mt-5 pt-5">
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

                    // Warner Bros
            if ($_GET['studio'] == "wb"){
                $sql = "SELECT * FROM item WHERE studio = :studio";
                $prepare=$db->prepare($sql);
                $prepare->execute(
                    [
                        'studio' => "Warner Bros"
                    ]
                );
                $list = $prepare->fetchall(); ?>
                <section class="container mt-5 pt-5">
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

    else if (isset($_GET['addFilm'])){
        include 'includes/formAdd.php';
    }

    else if (isset($_GET['modifyId'])){
        $sql = "SELECT * FROM item WHERE id = :id";
        $prepare=$db->prepare($sql);
        $prepare->execute(
            [
                'id' => $_GET['modifyId']
            ]
        );
        $list = $prepare->fetch();
        include 'includes/formModify.php';
    }

    else if (isset($_GET['recherche'])) { ?>
        <SEction class='container mt-5 pt-5'>
            <div class="row justify-content-center ">
                 <?php
        $nomRecherche = $_GET['recherche'];
        $sql= 'SELECT * FROM item WHERE titre LIKE :titre';
        $prepare = $db->prepare($sql);
        $prepare->execute(
            [
                'titre' => '%' . $nomRecherche . '%'
            ]
        );
    
        $liste = $prepare->fetchALL();
        foreach ($liste as $value){ ?>
        <div class="col-3 m-3 text-center" >
        <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="300"  alt=""></a>
        </div>
    <?php } 
    ?>
            </div>
        </SEction>
        
       <?php

    }

    else if (isset($_GET['viewFilm'])) { ?>

        <section class="container mt-5 pt-5">
        <div class="row justify-content-center">
        
<?php
        $sql = "SELECT * FROM item WHERE id = :id";
        $prepare=$db->prepare($sql);
        $prepare->execute(
            [
                'id' => $_GET['viewFilm']
            ]
        );
        $list = $prepare->fetch();
        echo $list['redirection'];

?>
        </div>
        </section>
        
<?php 
    }
    else if (isset($_GET['form'])) { 
        if ($_GET['form'] == "login") {
            include 'includes/formLogin.php';
        }

        else if ($_GET['form'] == "deconnexion") {
            session_destroy(); ?>
            ?>
            <section class="mt-5 pt-5">
            <div class="alert alert-success text-center" role="alert">
            Vous vous ??tes d??connect??. A bient??t !
            </div>
            </section>
            <?php
        }
    }

    else { 
        $idRandom = rand(1,20);
        $sql = "SELECT * FROM item WHERE id = :id";
        $prepare=$db->prepare($sql);
        $prepare->execute(
            [
                'id' => $idRandom
            ]
        );
        $list = $prepare->fetch();
        
        ?>
        <a class="text-decoration-none" href="?id=<?php echo $list['id']; ?>">
        <div class="jumbotron bg-dark imgBackground d-flex" style="background-image: url('<?php echo $list['imageExtrait']; ?>');">
            <div class="h1 d-flex text-light flex-end align-items-end contour"><?php echo $list['titre'] ?></div>
        </div>
        </a>

<?php
            if (!empty($_SESSION['username'])){
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message 
                    ?>
                    <form class="container mb-3" method="POST" action="index.php">
                        <div class="row justify-content-between">
                            <div class="text-light">
                            Bonjour <?php echo $user; ?> , vous ??tes connect??
                            </div>
                            <div>
                            <a href="?addFilm=addForm"><button type="button" class="btn btn-outline-info mx-3">Ajouter</button></a>
                            </div>
                        </div>
                        

                    </form> 
                <?php }
            }

?>

        <section class="container mb-5">
            <div class="row text-center" >
                
        <?php

     

            $sql= 'SELECT * FROM item';
            $prepare = $db->prepare($sql);
            $prepare->execute();
            $liste = $prepare->fetchALL();
            foreach ($liste as $value){ ?>
            <div class="col-2 m-3" >
            <a href="?id=<?php echo $value['id'] ; ?>"><img src="<?php echo $value['image'] ?>" height="150" alt=""></a>
            </div>
        <?php } 
        ?>
            </div>
        </section>
        <?php }
        ?>

<?php 
    if (isset($_POST['filmButtonAdd'])){
        if (empty($_POST['titreAdd'])){ ?>
        <div class="alert alert-danger text-center" role="alert">
            Merci d'ajouter un nom de film
            </div><br>    
        <?php
        }

    else if (empty($_POST['descriptionAdd'])){ ?>
        <div class="alert alert-danger text-center" role="alert">
            Merci d'ajouter la description du film
            </div><br>    
        <?php
        }

    else if (empty($_POST['lienRedirectionAdd'])){ ?>
        <div class="alert alert-danger text-center" role="alert">
            Merci d'ajouter un lien pour regarder le film
            </div><br>    
        <?php
        }

    else if (empty($_POST['nomStudioAdd'])){ ?>
        <div class="alert alert-danger text-center" role="alert">
            Merci de s??lectionner un studio
            </div><br>    
        <?php
        }
    else {
        $target_dirAffiche = "img/affiche/";
        $target_fileAffiche = $target_dirAffiche . basename($_FILES["fileToUpload"]["name"]);
        $target_dirExtrait = "img/extrait/";
        $target_fileExtrait = $target_dirExtrait . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileTypeAffiche = strtolower(pathinfo($target_fileAffiche,PATHINFO_EXTENSION));
        $imageFileTypeExtrait = strtolower(pathinfo($target_fileExtrait,PATHINFO_EXTENSION));
       // v??rification si le fichier existe d??j??
       if (file_exists($target_fileAffiche)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe d??j??.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    if (file_exists($target_fileExtrait)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe d??j??.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    // V??rification de la taille du fichier
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        La taille du fichier est trop importante.
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    if ($_FILES["fileToUpload2"]["size"] > 5000000) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        La taille du fichier est trop importante.
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    // Autorisation seulement de certain format de fichier
    if($imageFileTypeAffiche != "jpg" && $imageFileTypeAffiche != "png" && $imageFileTypeAffiche != "jpeg"
    && $imageFileTypeAffiche != "gif" ) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autoris??s
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    if($imageFileTypeExtrait != "jpg" && $imageFileTypeExtrait != "png" && $imageFileTypeExtrait != "jpeg"
    && $imageFileTypeExtrait != "gif" ) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autoris??s
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    // V??rification si $upload n'est pas ?? 0 (envoie message d'erreur)
    if ($uploadOk == 0) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier n'a pas ??t?? envoy??.
        </div>
    <?php
    // Si tout est ok, alors le fichier est upload?? dans le bon dossier
    } 
    else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_fileAffiche) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_fileExtrait)) { ?>
    
        <div class="alert alert-success text-center mb-5" role="alert">
        Le film a ??t?? ajout?? avec succ??s !
        </div>
    <?php
            $sqlQuery = "INSERT INTO `item`(`titre`, `description`, `redirection`, `studio`, `image`, `imageExtrait`) VALUES (:titre, :description, :redirection, :studio, :image, :imageExtrait)";
            $insertSQL = $db->prepare($sqlQuery);
            $insertSQL->execute([
                "titre" => $_POST['titreAdd'],
                "description" => $_POST['descriptionAdd'],
                "redirection" => $_POST['lienRedirectionAdd'],
                "studio" => $_POST['nomStudioAdd'],
                "image" => 'img/affiche/' . basename($_FILES["fileToUpload"]["name"]),
                "imageExtrait" => 'img/extrait/' . basename($_FILES["fileToUpload2"]["name"])
            ]);
        }}

    }
    }
?>
<?php 
    if (isset($_POST['filmButtonModify'])){
        if (empty($_POST['titreModify'])){ ?>
            <div class="alert alert-danger text-center" role="alert">
                Merci d'ajouter un nom de film
                </div><br>    
            <?php
            }
    
        else if (empty($_POST['descriptionModify'])){ ?>
            <div class="alert alert-danger text-center" role="alert">
                Merci d'ajouter la description du film
                </div><br>    
            <?php
            }
    
        else if (empty($_POST['lienRedirectionModify'])){ ?>
            <div class="alert alert-danger text-center" role="alert">
                Merci d'ajouter un lien pour regarder le film
                </div><br>    
            <?php
            }
    
        else if (empty($_POST['nomStudioModify'])){ ?>
            <div class="alert alert-danger text-center" role="alert">
                Merci de s??lectionner un studio
                </div><br>    
            <?php
            }
        else if (empty($_POST['idFilmModify'])){ ?>
            <div class="alert alert-danger text-center" role="alert">
                Merci de renseigner un id
                </div><br>    
            <?php
            }
        else {
        $target_dirAffiche = "img/affiche/";
        $target_fileAffiche = $target_dirAffiche . basename($_FILES["fileToUpload"]["name"]);
        $target_dirExtrait = "img/extrait/";
        $target_fileExtrait = $target_dirExtrait . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileTypeAffiche = strtolower(pathinfo($target_fileAffiche,PATHINFO_EXTENSION));
        $imageFileTypeExtrait = strtolower(pathinfo($target_fileExtrait,PATHINFO_EXTENSION));
       // v??rification si le fichier existe d??j??
       if (file_exists($target_fileAffiche)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe d??j??.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    if (file_exists($target_fileExtrait)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe d??j??.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    // V??rification de la taille du fichier
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        La taille du fichier est trop importante.
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    if ($_FILES["fileToUpload2"]["size"] > 5000000) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        La taille du fichier est trop importante.
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    // Autorisation seulement de certain format de fichier
    if($imageFileTypeAffiche != "jpg" && $imageFileTypeAffiche != "png" && $imageFileTypeAffiche != "jpeg"
    && $imageFileTypeAffiche != "gif" ) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autoris??s
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    if($imageFileTypeExtrait != "jpg" && $imageFileTypeExtrait != "png" && $imageFileTypeExtrait != "jpeg"
    && $imageFileTypeExtrait != "gif" ) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autoris??s
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    // V??rification si $upload n'est pas ?? 0 (envoie message d'erreur)
    if ($uploadOk == 0) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier n'a pas ??t?? envoy??.
        </div>
    <?php
    // Si tout est ok, alors le fichier est upload?? dans le bon dossier
    } 
    
    else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_fileAffiche) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_fileExtrait)) { ?>
    
        <div class="alert alert-success text-center mb-5" role="alert">
        Le film a ??t?? ajout?? avec succ??s !
        </div>
    <?php
            $sqlQuery = "UPDATE `item` SET `id`= :id, `titre`= :titre, `description`= :description, `redirection`= :redirection, `studio`= :studio, `image`= :image, `imageExtrait`= :imageExtrait WHERE `id` = :id2";
            $insertSQL = $db->prepare($sqlQuery);
            $insertSQL->execute([
                "id" => $_POST['idFilmModify'],
                "titre" => $_POST['titreModify'],
                "description" => $_POST['descriptionModify'],
                "redirection" => $_POST['lienRedirectionModify'],
                "studio" => $_POST['nomStudioModify'],
                "image" => 'img/affiche/' . basename($_FILES["fileToUpload"]["name"]),
                "imageExtrait" => 'img/extrait/' . basename($_FILES["fileToUpload2"]["name"]),
                "id2" => $_POST['idFilmModify']
            ]);
            }
        }
    }
?>
<?php
    }

if (isset($_POST['del'])){
    $sql = "DELETE FROM `item` WHERE `id`= :id";
    $prepare = $db->prepare($sql);
    $prepare->execute([

        'id' => $_POST['valeurId']
  ]
);
}
?>

<?php

if (isset($_POST['submitLogin'])){
    if(isset($_POST['username']) && isset($_POST['password']))
    {   
        if($_POST['username'] !== "" && $_POST['password'] !== "")
        {
            $sql = "SELECT * FROM utilisateur where `username` = :username and `password` = :password";
            $prepare=$db->prepare($sql);
            $prepare->execute([
                'username' => $_POST['username'],
                'password' => $_POST['password']
            ]);
            $list = $prepare->fetch();
            $count = $prepare->rowCount();
            if($count > 0) // nom d'utilisateur et mot de passe correctes
            {
               $_SESSION['username'] = $_POST['username'];
               ?>
               <section class="mt-5 pt-5">
               <div class="alert alert-success text-center mt-5 pt-5" role="alert">
                Bonjour <?php echo $_SESSION['username'];?> , Vous ??tes connect??. <a href="index.php">Cliquez ici</a> pour retrouver tous vos films !
               </div>
               </section>
               <?php
            }
            else
            { ?>
                <div class="alert alert-danger text-center mt-5 pt-5" role="alert">
             Le mot de passe ou l'utilisateur ne correspond pas !
            </div>
            <?php 
            }
        }
    }
    else if (isset($_POST['username']) or isset($_POST['password'])){
        echo "bonjour";
    }
}


?>

<!-- <footer class="fixed-bottom">
<p class="text-center mt-3 footerColor">&copy;St2mflix</p>
</footer> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
