<?php

    include_once "header.php";
    require_once "models/fonction.php";

    $tableNiveau = obtenirNiveau(); 

    if(isset($_POST['ajout']))
    {
        extract($_POST);
        if(insereEtudiant($nom,$prenom,$ville,$email,$adresse,$filiere,$telephone,$niveau))
        {
            header("location:http://localhost/CERBSENE/models/liste.php");
        }
        else
        {
            echo '<h3 class="alert alert-danger bg-primary text-white">erreur </h3>';
        }
    }

?>

<div class="container col-md-6 mt-5">
    <a href="http://localhost/CERBSENE/models/liste.php" class="btn btn-primary">liste</a>
    
        <div class="card-header bg-primary">
            <h3 class="text-white text-center">Enregistrement</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">

                
                <div class="form-floating mb-3">

                <label for="floatingInput" style=" font-weight:bolder;">Nom</label>
                <input type="text" name="nom" value="" id="floatingInput" class="form-control text-white"  style="   background: transparent;font-weight:bolder;" placeholder="Nom" required>
                </div>
                <label for="floatingInput" style=" font-weight:bolder;">Prenom</label>
                <input type="text" name="prenom" value="" id="floatingInput" class="form-control"  style="   background: transparent;font-weight:bolder;"placeholder="Prenom" required>
                
                <label for="floatingInput"style=" font-weight:bolder;">Ville</label>
                <input type="text" name="ville" value="" id="floatingInput" class="form-control"  style="   background: transparent;font-weight:bolder;"placeholder="Ville" required>
                
                <label for="floatingInput"style=" font-weight:bolder;">Email</label>
                <input type="text" name="email" value=""id="floatingInput" class="form-control" style="   background: transparent;"font-weight:bolder; placeholder="Email" required>
            
                <label for="floatingInput"style=" font-weight:bolder;">Adresse</label>
                <input type="text" name="adresse" value=""id="floatingInput" class="form-control"  style="   background: transparent;font-weight:bolder;"placeholder="Adresse" required>
                <label for="floatingInput"style=" font-weight:bolder;">Filière</label>
                <input type="text" name="filiere" value=""id="floatingInput" class="form-control"  style="   background: transparent;font-weight:bolder;"placeholder="Filière" required>
                
                <label for="floatingInput"style=" font-weight:bolder;">Telephone</label>
                <input type="text" name="telephone" value=""id="floatingInput" class="form-control"  style="   background: transparent;font-weight:bolder;"placeholder="Telephone" required>

                <label for="floatingInput"style=" font-weight:bolder;">Niveau</label>
                <select name="niveau" class="form-control" id="floatingInput"  style="   background: transparent;font-weight:bolder;" required>
                    <option value="">Choisir Votre Niveau S'Il Vous Plait!!!!</option>
                    <?php foreach($tableNiveau as $key) { ?>
                        <option value="<?= $key['idNiv'] ?>"><?= $key['nomNiv'] ?></option>

                        <?php } ?>
                </select>
                <button type="submit" name="ajout" class="btn btn-success hover-overlay mt-5 offset-4">Enregistrer</button>
               
            </form>
        </div>
>
</div>