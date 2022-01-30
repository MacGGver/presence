<?php

    include_once "../header.php";
    require_once "fonction.php";

    $tableNiveau = obtenirNiveau();
    $tableModif = trouverEtudiant($_GET['idEt']);

    if(isset($_POST['modif']))
    {
        extract($_POST);

    
        if($tableModif['nomEt']==$nom && $tableModif['prenomEt']==$prenom && $tableModif['villeEt']==$ville && $tableModif['emailEt']==$email && $tableModif['filiereEt']==$filiere && $tableModif['telEt']==$telephone && $tableModif['adresseEt']==$adresse)
        {
            header("location:http://localhost/CERBS/models/liste.php");
        }

       if(modiftudiant($nom,$prenom,$ville,$email,$adresse,$filiere,$telephone,$niveau,$id))
      
        {
            header("location:http://localhost/CERBS/models/liste.php");
        }
        else
        {
            echo '<h3 class="alert alert-danger bg-danger text-white">erreur </h3>';
        }
    }

?>

<div class="container col-md-6 mt-5">
    <a href="http://localhost/CERBS/models/liste.php" class="btn btn-primary">liste</a>
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white text-center">Modification Des Enregistrements</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <label for="">Nom</label>
                <input type="text" name="nom" value="<?= $tableModif['nomEt'] ?>" class="form-control" placeholder="Nom" required>
                
                <label for="">Prenom</label>
                <input type="text" name="prenom" value="<?= $tableModif['prenomEt'] ?>" class="form-control" placeholder="Prenom" required>
                
                <label for="">Ville</label>
                <input type="text" name="ville" value="<?= $tableModif['villeEt'] ?>" class="form-control" placeholder="Ville" required>
                
                <label for="">Email</label>
                <input type="text" name="email" value="<?= $tableModif['emailEt'] ?>" class="form-control" placeholder="Email" required>

                <label for="">Adresse</label>
                <input type="text" name="adresse" value="<?= $tableModif['adresseEt'] ?>" class="form-control" placeholder="Adresse" required>
                <label for="">Filière</label>
                <input type="text" name="filiere" value=" <?= $tableModif ['filEt']?> " class="form-control" placeholder="Filière" required>
                
                <label for="">Telephone</label>
                <input type="text" name="telephone" value="<?= $tableModif['telEt']?>" class="form-control" placeholder="Telephone" required>

                <label for="">Niveau</label>
                <select name="niveau" class="form-control" id="">
                    <option value="">Choisir Votre Niveau S'Il Vous Plait!!!!</option>
                    <?php foreach($tableNiveau as $key) { ?>
                        <option <?= $tableModif['idNivF']==$key['idNiv']?"selected":"" ?> value="<?= $key['idNiv'] ?>"><?= $key['nomNiv'] ?></option>

                        <?php } ?>
                </select>
                <button type="submit" name="modif" class="btn btn-success hover-overlay mt-3 offset-3">Enregistrer les modification</button>
                <input type="hidden" name="id" value="<?= $_GET['idEt'] ?>">
               
            </form>
        </div>
    </div>
</div>