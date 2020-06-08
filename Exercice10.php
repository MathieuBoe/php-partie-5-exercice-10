<?php
$title = 'Exercice10';
include 'header.php';
include '../Exercice5/Exercice5.php';
foreach ($departement as $key => $value){
    ?> <p>Le département <?=$value?> a le numéro <?=$key?> </p> <?php
}
include 'footer.php';?>