<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC: Adressen</title>
</head>
<body>
    
    <h1>Model-View-Controller: Adressen</h1>

<hr>

    <h2>Model direkt ansprechen:</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nachname</th>
            <th>Vorname</th>
            <th>Geb.</th>
            <th>Anschrift</th>
            <th>PLZ Ort</th>
            <th>Telefon</th>
            <th>E-Mail</th>
        </tr>
    <?php

        require_once("adressenmodel.php");

        $adressen = Adressenmodel::zeige_adressen();

        foreach ($adressen as $adresse) {
            echo "<tr>";
                echo "<td>" . $adresse['id'] . "</td>";
                echo "<td>" . $adresse['nachname'] . "</td>";
                echo "<td>" . $adresse['vorname'] . "</td>";
                echo "<td>" . $adresse['geburtstag'] . "</td>";
                echo "<td>" . $adresse['anschrift'] . "</td>";
                echo "<td>" . $adresse['plz_ort'] . "</td>";
                echo "<td>" . $adresse['telefon'] . "</td>";
                echo "<td>" . $adresse['email'] . "</td>";
            echo "</tr>";
        }

    ?>
    </table>

<br><br>
<hr>

    <h2>Daten über Controller holen:</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nachname</th>
            <th>Vorname</th>
            <th>Geb.</th>
            <th>Anschrift</th>
            <th>PLZ Ort</th>
            <th>Telefon</th>
            <th>E-Mail</th>
        </tr>

        <?php 
        
            require_once("adressencontroller.php");

            $adressen2 = Adressencontroller::adressen_ausgeben();

            foreach ($adressen2 as $adresse) {
                echo "<tr>";
                    echo "<td>" . $adresse['id'] . "</td>";
                    echo "<td>" . $adresse['nachname'] . "</td>";
                    echo "<td>" . $adresse['vorname'] . "</td>";
                    echo "<td>" . $adresse['geburtstag'] . "</td>";
                    echo "<td>" . $adresse['anschrift'] . "</td>";
                    echo "<td>" . $adresse['plz_ort'] . "</td>";
                    echo "<td>" . $adresse['telefon'] . "</td>";
                    echo "<td>" . $adresse['email'] . "</td>";
                echo "</tr>";
            }
        
        ?>
    </table>

<br><br>
<hr>

<h2>Code vom View</h2>

<pre>
    <?php 
        $code = file_get_contents("code.txt");
        echo htmlentities($code);
    ?>
</pre>

<h2>Code vom Model</h2>

<pre>
    <?php 
        $model = file_get_contents("adressenmodel.php");
        echo htmlentities($model);
    ?>
</pre>

<h2>Code vom Controller</h2>

<pre>
    <?php 
        $controller = file_get_contents("adressencontroller.php");
        echo htmlentities($controller);
    ?>
</pre>


<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }

    table, tr, th, td{
        border: solid 1px lightgrey;
        border-collapse: collapse;
        padding: 5px 10px;
    }

    tr:hover{
        background-color:#f0f0f0;
    }
</style>

</body>
</html>
