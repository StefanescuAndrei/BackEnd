<?php
declare(strict_types=1);

function showMessage()//Doar afiseaza
{
    echo 'message';
}

function retunMessage()//Returneaza ceva ce este scris
{
    return 'message returned';
}

showMessage();
echo'<br/>';

echo retunMessage();

function showNAme($name= 'Ionut')
{
    echo 'My name is: ' . $name; //Punct(.) functia de lipire

}
 
echo'<br/>';
showNAme('Andrei');
echo'<br/>';
showNAme('Stefanescu');
echo'<br/>';
showNAme();

function addNumbres(int $a, int $b) : int
{
    echo $a+$b;
}
echo'<br/>';
addNumbres(68,1);
echo'<br/>';

addNumbres(1,'5');