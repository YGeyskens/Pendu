<?php

function getWordsArray()
{
    return file(FILE_PATH, FILE_IGNORE_NEW_LINES);
}

function getRandomIndex($wordsArray) //recupere un nombre aléatoire
{
    return rand(0, count($wordsArray)-1);
}

function getWord($index, $wordsArray)
{
    return $wordsArray[$index];
}

function getRemplacement($nbrLetter)
{
    return  str_repeat(REPLACEMENT, $nbrLetter) ;
}

