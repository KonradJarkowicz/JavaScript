<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<section>
  <article>
    <h1>Obuwie</h1>
        <form action="update.php" method="get">

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

        INPUT
        <form action=update.php method="get">
            <?php
                $con = new mysqli("127.0.0.1","root","","obuwie");
                    $wynik2 = Null;

                    $b="SELECT * FROM 'buty'";
                    $wynik2 = $con->query($b);

                echo("<input name='idu' type='radio' value='".$b."'><br>");

            ?>




        </form>
  </article>
</section>

</body>
</html>