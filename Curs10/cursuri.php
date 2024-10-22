<?php

require_once 'Curs.php';
require_once 'JavaCurs.php';

echo Curs::$curs;
echo '<hr>';
$curs1 = new Curs();
echo $curs1->getName();

echo '<hr>';

echo Curs::getCurs();

echo '<hr>';

echo Curs::getCurs();
$curs2 = new JavaCurs();
echo '<hr>';
echo $curs2->getCursName();

echo '<hr>';

