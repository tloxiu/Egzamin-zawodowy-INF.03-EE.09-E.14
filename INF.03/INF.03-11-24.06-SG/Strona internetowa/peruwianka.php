<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header class="blok-banera">
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <section class="blok-menu">
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </section>
    <section class="blok-prawy">
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
            $connection = mysqli_connect('localhost','root','', 'hodowla');
            $firstquery = 'SELECT rasa FROM rasy;';
            $firstresult = mysqli_query($connection, $firstquery);
            while ($row = $firstresult -> fetch_array()) {
                echo '<li>' . $row[0] . '</li>';
            }
            ?>
        </ol>
    </section>
    <main class="blok-glowny">
        <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">
        <?php
        $secondquery = 'SELECT DISTINCT swinki.data_ur, swinki.miot, rasy.rasa FROM swinki JOIN rasy ON swinki.rasy_id = rasy.id WHERE rasy.id = 1;';
        $secondresult = mysqli_query($connection, $secondquery);

        while ($row = $secondresult -> fetch_array()){
            echo '<h2>Rasa: ' . $row[2] . '</h2>';
            echo '<p>Data urodzenia:  ' . $row[0] . '</p>';
            echo '<p>Oznaczenie miotu: ' . $row[1] . '</p>';
        }

        ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
        <?php
        $thirdquery = 'SELECT imie, cena, opis FROM swinki WHERE rasy_id = 1;';
        $thirdresult = mysqli_query($connection, $thirdquery);
        while ($row = $thirdresult -> fetch_array()) {
            echo '<h3>' . $row[0] . ' - ' . $row[1] . 'zł</h3>';
            echo '<p>'. $row[2] . '</p>';
        }

        mysqli_close($connection);
        ?>
    </main>
    <footer class="blok-stopki">
        <p>Stronę wykonał: ololololol</p>
    </footer>
</body>
</html>