<?php

$con = new mysqli("127.0.0.1","root","","obuwie");


$firma=$_GET['Firma'];
$nazwa=$_GET['Nazwa'];
$model = $_GET['Model'];
$rozmiar = $_GET['Rozmiar'];
$cena = $_GET['Cena'];

echo "$firma";
echo($nazwa);
echo($rozmiar);

$q="INSERT INTO `buty` (`ID_Buty`, `Firma`, `Nazwa`, `Model`, `Rozmiar`, `Cena`) VALUES (NULL, '$firma', '$nazwa', '$model', '$rozmiar', '$cena');";

$wynik = $con->query($q);


$n = $_GET['idu'];
$p ="SELECT * FROM buty Where id='".$n."'";

$wynik2 = $con->query($p);

while($row=$wynik2->fetch_array()){

    echo $row["ID_buty"] . ";" . $row["Firma"] . ";" . $row["Nazwa"] . ";" . $row["Model"] . ";" . $row["Model"] . ";" . $row["Rozmiar"] . ";" . $row["Cena"] . "<br/>";
    
}

$row2=$wynik2->fetch_array();
echo("<input name='idu' type='radio' value='".$n."'><br>");


?>