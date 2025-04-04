<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC | Design Pattern</title>
    <link href="../../assets/ap2.css" rel="stylesheet">
</head>
<body>
    <h1>MVC: Model-View-Controller</h1>
<img src="mvc.png">
<p>Ein MVC macht vor allem bei größeren Projekten Sinn. Bei (kleineren) Seiten die nur eine handvoll statischer Informationan zeigen, wäre das Overkill.</p>
<hr>

    <h1>Model-View-Controller für eine Adressen-Datenbank</h1>

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
<div.code>
<h2>Code vom View</h2>

<div class="code">
<pre>
    <?php 
        $code = file_get_contents("code.txt");
        echo htmlentities($code);
    ?>
</pre>
</div>

<h2>Code vom Model</h2>

<div class="code">
<pre>
    <?php 
        $model = file_get_contents("adressenmodel.php");
        echo htmlentities($model);
    ?>
</pre>
</div>

<h2>Code vom Controller</h2>

<div class="code">
<pre>
    <?php 
        $controller = file_get_contents("adressencontroller.php");
        echo htmlentities($controller);
    ?>
</pre>
</div>

<style>
    table{
        width: 1000px !important;
    }    
</style>

</body>
</html>
