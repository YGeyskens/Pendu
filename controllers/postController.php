<?php
$gameOver                   = false;
$gameWon                    = false;
$lettersArray               = unserialize(urldecode($_POST['lettersArray'])); // on decouvertit pour reavoir un array
$triedLetter                = $_POST['triedLetter']; // on stocke la lettre de la method POST la lettre essayer
$triedLetters               = $_POST['triedLetters'];
$triedLetters               .= $triedLetter;
$lettersArray[$triedLetter] = false;// pour ensuite  lui retourner la valeur false pour supprimer l'<option> dans index
$nbrLetter                  = $_POST['nbrLetter'];

$wordArray  = getWordsArray();// recup l'array de mots
$wordIndex  = $_POST['wordIndex'];
$word       = strtolower(getWord($wordIndex, $wordArray)); // recup le mot avec l'index aléatoire et l'array des mots pour avoir un ARRAY[$index]

$remplacement   = $_POST['replacementString'];
$letterFound    = false;
$trials         = $_POST['trials'];


for ($i = 0; $i < $nbrLetter; $i++) {
    $letter = substr($word, $i, 1);
    if ($triedLetter === $letter) {
        $letterFound    = true;
        $remplacement   = substr_replace($remplacement, $triedLetter, $i, 1);
    }
}

if($letterFound === false){
    $trials++;
}

$remainingTrials = MAX_TRIALS - $trials;

if($remainingTrials <= 0){
    $gameOver = true;
}elseif($remplacement === $word){
    $gameWon = true;
}
