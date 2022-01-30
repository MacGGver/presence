<?php
include_once "../header.php";
require_once "fonction.php";

$tableEt = obtenirEtudiant();
?>
<div class="container  mt-5">
<a href="http://localhost/CERBSENE/" class="btn btn-primary  ">Ajouter</a>
<div class="card-header bg-primary">
    <h3 class="text-center  text-white">Liste D'Enregistrement</h3>
</div>
<div class="card-body ">
<table class="table table-bordered">

<tr>
    <th>N°</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Ville</th>
    <th>Email</th>
    <th> Adresse</th>
    <th>Filiere</th>
    <th>Telephone</th>
    <th>Niveau</th>
    <th>Action</th>
</tr>
    <?php foreach($tableEt as $key) { ?>
        <tr>
            <td> <?= $key['id'] ?> </td>
            <td> <?= $key['nomEt'] ?></td>
            <td> <?= $key['prenomEt'] ?> </td>
            <td> <?= $key['villeEt'] ?> </td>
            <td> <?= $key['emailEt'] ?> </td>
            <td> <?= $key ['adresseEt'] ?> </td>
            <td> <?= $key ['filEt']?> </td>
            <td> <?= $key['telEt'] ?> </td>
            <td> <?= $key['nomNiv'] ?> </td>
           <td><a href="http://localhost/CERBSENE/models/modifier.php?idEt=<?= $key['id'] ?>" class="btn btn-warning">Modifier</a> </td> 
        </tr>
            <?php  } ?>

            </div>
            </div>
</table>
</div>
</div>
</div>
