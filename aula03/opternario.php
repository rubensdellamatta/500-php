<?php 
// Operador Ternário
echo "<pre>";
$a = 1;
$b = 0;
if ($a > $b) {
	echo "A é maior que B";
} else {
	echo "A não é maior que B";
}
echo "<hr>";
echo ($a > $b) ? "A é maior que B" : "A não é maior que B";