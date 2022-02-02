<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include './StrUtils.php';

$chaine = new StrUtils("Une phrase");

echo $chaine->bold()."<br>";
echo $chaine->italic()."<br>";
echo $chaine->underline()."<br>";
echo $chaine->capitalize()."<br>";
echo $chaine->uglify()."<br>";