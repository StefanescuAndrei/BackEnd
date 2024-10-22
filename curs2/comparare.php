<?php

$a = 5;
$b = '5';
var_dump($a == $b);
echo'<br>';

var_dump( $a === $b);
echo'<br>';

var_dump($a != $b);// Sau se mai poate scrie ($a <> $b)
echo'<br>';

var_dump($a !== $b);
echo'<br>';

$b = 8;
var_dump($a > $b);
echo'<br>';

var_dump($a < $b);
echo'<br>';

$b = 5;
var_dump($a >= $b);
echo'<br>';

var_dump($a <= $b);
echo'<br>';

var_dump( $a <=> $b);
echo'<br>';

$m = true;
$p = !$m; // (!) Inseamna negatie
var_dump($p); echo'<br>';
echo'<hr/>';

var_dump(false && false); echo'<br>';
var_dump(false && true); echo'<br>';
var_dump(true && true); echo'<br>';
var_dump(true && false); echo'<br>';

echo'<hr/>';

var_dump(false || false); echo'<br>';
var_dump(false || true); echo'<br>';
var_dump(true || true); echo'<br>';
var_dump(true || false); echo'<br>';

var_dump(5 < 3 xor 5 > 2);
echo'<br>';

$q = 1;// 1 = True
$w = 0;// 0 = False
var_dump($q || $w);
echo'<br>';

echo'<hr/>';
$t = (4 > 3) ? 'true' : 'false';
var_dump($t);
echo'<hr/>';

$g = null;
$j = 3;

$x = $g ?? 10;
$y = $j ?? 10;
var_dump($x, $y);

//proof git branches