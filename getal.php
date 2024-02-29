<?php

$random = rand(1,100);
$aantal = 1;
$getal=0;

$getal=readline("Raad het getal: ");

Repeat:

if($random == $getal){
    echo"Je hebt het getal geraden in $aantal beurten";
}elseif($random > $getal){
        echo "Het getal is hoger
        ";
        $aantal=$aantal+1 ;
        $getal=readline("Raad opnieuw: ");
        goto Repeat;
}elseif($random < $getal){
            echo "Het getal is lager
            ";
            $aantal=$aantal+1 ;
            $getal=readline("Raad opnieuw: ");
            goto Repeat;
}