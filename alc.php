<?php

$naam = readline("Voer naam in: ");
echo "Welkom $naam
";

$leeftijd = readline("Voer leeftijd in: ");

if ($leeftijd < 18){
    echo"Je mag geen alcohol kopen.";
}else{
    echo"Je mag nog steeds geen alcohol kopen.";
}
