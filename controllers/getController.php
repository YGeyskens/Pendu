<?php
$gameOver = false;
$gameWon  = false;
$lettersArray = [
        'a' => true,
        'b' => true,
        'c' => true,
        'd' => true,
        'e' => true,
        'f' => true,
        'g' => true,
        'h' => true,
        'i' => true,
        'j' => true,
        'k' => true,
        'l' => true,
        'm' => true,
        'n' => true,
        'o' => true,
        'p' => true,
        'q' => true,
        'r' => true,
        's' => true,
        't' => true,
        'u' => true,
        'v' => true,
        'w' => true,
        'x' => true,
        'y' => true,
        'z' => true
];

$wordArray          = getWordsArray();// recup l'array de mots
$wordIndex          = getRandomIndex($wordArray);
$word               = strtolower(getWord($wordIndex, $wordArray)); // recup le mot avec l'index aléatoire et l'array des mots pour avoir un ARRAY[$index]

$nbrLetter          = strlen($word);
$remplacement       = getRemplacement($nbrLetter);
$remainingTrials    = MAX_TRIALS;
$trials             =  0;
$triedLetters       = '';