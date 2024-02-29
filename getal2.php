<?php

$random = rand(1,100);
$aantal= 1;
$getal = 0;

$getal = readline("Raad het getal: ");

while ($getal!=$random) {
}if($random > $getal){
    echo "Het getal is hoger
    ";
    $aantal=$aantal+1 ;
    $getal=readline("Raad opnieuw: ");
}if($random < $getal){
    echo "Het getal is lager
    ";
    $aantal=$aantal+1;
    $getal=readline("Raad het opnieuw: ");
}

if ($getal=$random)
    echo("je hebt het getal geraden in $aantal beurten");