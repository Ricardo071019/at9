<?php

$nota1 = 12;
$nota2 = 10;
$nota3 = 18;
$media = 0;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo ' A media é igual a' . $media;

if ($media >= 9.5) {
	echo 'Aprovado';
}

elseif ($media >8 && $media <=9.5) {
	echo 'Recuperacao';
	
}
elseif ($media <=8) {
	echo 'Reprovado';
}

