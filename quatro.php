<?php

$num1 = rand(1,30);
$num2 = rand(1,30);
$num3 = rand(1,30);

echo $num1.' ' .$num2.' ' .$num3;
if ($num1 > $num2 && $num1 > $num3) {
	echo ' o maior numero é' .$num1;
}
elseif ($num2 > $num1 && $num2 > $num3) {
	echo ' o maior numero é ' .$num2;
}
elseif ($num3 > $num1 && $num3 > $num2) {
	echo ' o maior numero é ' .$num3;
}
else{
	echo ' Algo correu mal ';
}

?>