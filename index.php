<?php

require 'Pokemon.php';
require 'Pikachu.php';

$pikachu = new Pikachu(
	'Pikachu'
);

echo $pikachu->name . '<br>';
echo $pikachu->energytype . '<br>';
echo $pikachu->hitpoints . '<br>';
echo $pikachu->health . '<br>';
echo $pikachu->weakness . '<br>';
echo $pikachu->resistance . '<br>';

?>