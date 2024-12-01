<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header class="baner">
        <h1><i>KupAuto!</i> Internetowy Komis Samochodowy</h1>
    </header>
    <section class="blok-glowny1">
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'kupauto');
        $query1 = 'SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id = 10;';

        $result = mysqli_query($connection, $query1);

        while($row = $result -> fetch_array()){
            echo '<img src="' . $row[5] . '" alt="oferta dnia">';
            echo '<h4>Oferta dnia: Toyota '. $row[0] . '</h4>';
            echo '<p>Rocznik: ' . $row[1] . ' Przebieg: ' . $row[2] . ' Paliwo: ' . $row[3] .'</p>';
            echo '<h4>Cena: ' . $row[4] . '</h4>';
        }
        ?>
    </section>
    <section class="blok-glowny2">
        <h2>Oferty Wyróżnione</h2>
        <?php
        $query2 = 'SELECT marki.nazwa, samochody.model, samochody.rocznik, samochody.cena, samochody.zdjecie FROM samochody JOIN marki ON samochody.marki_id = marki.id WHERE wyrozniony = 1 LIMIT 4;';

        $result = mysqli_query($connection, $query2);

        while($row = $result -> fetch_array()){
            echo '<section>';
            echo '<img src="' . $row[4] .'" alt="' . $row[1] . '">';
            echo '<h4>' . $row[0] . ' ' . $row[1] . '</h4>';
            echo '<p>Rocznik: ' . $row[2] . '</p>';
            echo '<p>Cena: ' . $row[3] . '</p>';
            echo '</section>';
        }
        ?>
    </section>
    <section class="blok-glowny3">
        <h2>Wybierz markę</h2>
        <form action="KupAuto.php" method="POST">
        <select name="lista" id="lista">
            <?php
            $query3 = 'SELECT nazwa FROM marki;';
            $result = mysqli_query($connection, $query3);

            while($row = $result -> fetch_array()){
                echo '<option value="' . $row[0] . '">' . $row[0] . '</option>';
            }
            ?>
        </select> 
        <button type="submit">Wyszukaj</button> <br>
        <?php
            if(isset($_POST['lista'])) {
                $model = $_POST['lista'];
                $query4 = 'SELECT model, cena, zdjecie FROM samochody JOIN marki ON marki_id = marki.id WHERE nazwa = "' . $model . '";';
                $result = mysqli_query($connection, $query4);
                while($row = $result -> fetch_array()) {
                    echo '<section>';
                    echo "<div>";
                    echo "<img src='$row[2]' alt='$row[0]'>";
                    echo "<h4>$model $row[0]</h4>";
                    echo "<h4>Cena: $row[1]</h4>";
                    echo "</div>";
                    echo '</section>';
                }
            }

            mysqli_close($connection);
        ?>
        </form>
    </section>
    <footer class="stopka">
        <p>Stronę wykonał: 2872934734</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>
</html>