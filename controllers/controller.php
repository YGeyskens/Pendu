<?php 
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    include 'getController.php';
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'postController.php';

}else {
    die('Vous n’avez rien à faire ici');
}

$serializedLettersArray = urlencode(serialize($lettersArray)); /* on convertit un array en chaine de caractère pour pouvoir la contenir dans une variable pour sauvegarder le nouvel array en chaine de caractère. */