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
                            <a href="<?php echo $list['redirection']; ?>"><button class="btn btn-warning" name="modifier">Voir le film</button></a>        
                        </div>
                        <div>
                            <a href="?modifyId=<?php echo $list['id'] ?>"><button class="btn btn-primary" name="modifier">Modifier</button></a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Supprimer</button>   
                        </div>
                    </div>             
                    
                    
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
            <div class="h1 d-flex text-light flex-end align-items-end"><?php echo $list['titre'] ?></div>
        </div>
        </a>
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

        $target_dirAffiche = "img/affiche/";
        $target_fileAffiche = $target_dirAffiche . basename($_FILES["fileToUpload"]["name"]);
        $target_dirExtrait = "img/extrait/";
        $target_fileExtrait = $target_dirExtrait . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileTypeAffiche = strtolower(pathinfo($target_fileAffiche,PATHINFO_EXTENSION));
        $imageFileTypeExtrait = strtolower(pathinfo($target_fileExtrait,PATHINFO_EXTENSION));
       // vérification si le fichier existe déjà
       if (file_exists($target_fileAffiche)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe déjà.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    if (file_exists($target_fileExtrait)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe déjà.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    // Vérification de la taille du fichier
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
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autorisés
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    if($imageFileTypeExtrait != "jpg" && $imageFileTypeExtrait != "png" && $imageFileTypeExtrait != "jpeg"
    && $imageFileTypeExtrait != "gif" ) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autorisés
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    // Vérification si $upload n'est pas à 0 (envoie message d'erreur)
    if ($uploadOk == 0) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier n'a pas été envoyé.
        </div>
    <?php
    // Si tout est ok, alors le fichier est uploadé dans le bon dossier
    } 
    else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_fileAffiche) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_fileExtrait)) { ?>
    
        <div class="alert alert-success text-center mb-5" role="alert">
        Le film a été ajouté avec succès !
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

?>
<?php 
    if (isset($_POST['filmButtonModify'])){

        $target_dirAffiche = "img/affiche/";
        $target_fileAffiche = $target_dirAffiche . basename($_FILES["fileToUpload"]["name"]);
        $target_dirExtrait = "img/extrait/";
        $target_fileExtrait = $target_dirExtrait . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileTypeAffiche = strtolower(pathinfo($target_fileAffiche,PATHINFO_EXTENSION));
        $imageFileTypeExtrait = strtolower(pathinfo($target_fileExtrait,PATHINFO_EXTENSION));
       // vérification si le fichier existe déjà
       if (file_exists($target_fileAffiche)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe déjà.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    if (file_exists($target_fileExtrait)) {
        ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier existe déjà.
        </div><br>
    <?php
    $uploadOk = 0;
    }
    // Vérification de la taille du fichier
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
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autorisés
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    if($imageFileTypeExtrait != "jpg" && $imageFileTypeExtrait != "png" && $imageFileTypeExtrait != "jpeg"
    && $imageFileTypeExtrait != "gif" ) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Seulement les fichiers JPG, JPEG, PNG et GIF sont autorisés
        </div><br>
    <?php
    
    $uploadOk = 0;
    }
    // Vérification si $upload n'est pas à 0 (envoie message d'erreur)
    if ($uploadOk == 0) { ?>
        <div class="alert alert-danger text-center" role="alert">
        Le fichier n'a pas été envoyé.
        </div>
    <?php
    // Si tout est ok, alors le fichier est uploadé dans le bon dossier
    } 
    else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_fileAffiche) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_fileExtrait)) { ?>
    
        <div class="alert alert-success text-center mb-5" role="alert">
        Le film a été ajouté avec succès !
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
        }}

    }

?>

<footer class="fixed-bottom">
<p class="text-center mt-3 footerColor">&copy;St2mflix</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
