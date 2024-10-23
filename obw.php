<!DOCTYPE html>
<html lang="en">
<head>
<title>Sklep Obuwniczy - Konrad Jarkowicz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  position:absolute;
  bottom:0px;
  width:100%;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<header>
  <h2>Sklep Obuwniczy</h2>
</header>

<?php
$firma=$_GET['Firma'];
$nazwa=$_GET['Nazwa'];
$model = $_GET['Model'];
$rozmiar = $_GET['Rozmiar'];
$cena = $_GET['Cena'];

echo "$firma";
echo($nazwa);
echo($rozmiar);

$con = new mysqli("127.0.0.1","root","","obuwie");

$q="INSERT INTO `buty` (`ID_Buty`, `Firma`, `Nazwa`, `Model`, `Rozmiar`, `Cena`) VALUES (NULL, '$firma', '$nazwa', '$model', '$rozmiar', '$cena');";

$wynik = $con->query($q);

?>
<section>
  <article>
    <h1>Obuwie</h1>
        <form action="obw.php" method="get">

            <label>Firma:</label><br>
            <input  type="text" name="Firma"><br>
            <label>Nazwa:</label><br>
            <input  name="Nazwa" type="text"><br>
            <label>Model:</label><br>
            <input  name="Model" type="text"><br>
            <label>Rozmiar:</label><br>
            <input  name="Rozmiar" type="text"><br>
            <label>Cena:</label><br>
            <input  name="Cena" type="text"><br><br>

            <input type="submit">
        </form>
  </article>
</section>




<footer>
  <p>Konrad Jarkowicz 13</p>
</footer>

</body>
</html>

