<section class="container mt-5 pt-5">
                <h2 class="text-light text-center">Ajouter un Film</h2>
  <div class="row justify-content-center text-center">
    <form action="index.php" method='POST' enctype="multipart/form-data">

    <div class="col-12 mb-3">
        <label class="text-light col-12">Nom du film : </label>
        <input class="text col-8" type="text" name="titreAdd" value="">
    </div>

    <div class="col-12 mb-3">
        <label class="text-light col-12" >Description :</label>
        <input class="text col-8 descriptionInput" name="descriptionAdd" value=""></input>
    </div>

    <div class="col-12 mb-3">
        <label class="text-light col-12">Lien de redirection :</label>
        <input class="text col-8" type="text" name="lienRedirectionAdd" value="">
    </div>

    <div class="row justify-content-center my-2">
        <div class="form-check mx-2">
            <input class="form-check-input" type="radio" name="nomStudioAdd" value="DreamWorks Animation">
            <label class="form-check-label  text-light">
            DreamWorks
            </label>
            </div>
            <div class="form-check mx-2">
            <input class="form-check-input" type="radio" name="nomStudioAdd"  value="Pixar">
            <label class="form-check-label  text-light">
            Pixar
            </label>
            </div>
            <div class="form-check mx-2">
            <input class="form-check-input" type="radio" name="nomStudioAdd"  value="Disney">
            <label class="form-check-label  text-light">
            Disney
            </label>
            </div>
            <div class="form-check mx-2">
            <input class="form-check-input" type="radio" name="nomStudioAdd"  value="Ankama">
            <label class="form-check-label  text-light">
            Ankama
            </label>
            </div>
            <div class="form-check mx-2">
            <input class="form-check-input" type="radio" name="nomStudioAdd"  value="Toei Animation">
            <label class="form-check-label  text-light">
            Toei Animation
            </label>
            </div>
    </div>

    <div class="col-12 mb-3">   
        <label class="text-light col-12" >Affiche du film</label>
        <input class="text-light" type="file" name="fileToUpload">
    </div>

    <div class="col-12 mb-3">   
        <label class="text-light col-12" >Image extrait du film</label>
        <input class="text-light" type="file" name="fileToUpload2">
    </div>

        
    <div class="col-12">
        <input type="submit" name='filmButtonAdd' value="Ajouter le film">
    </div>
        
    </form>
  </div>
  
</section> 