<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
    <h1>BIURO PODRÓŻY</h1>
    </header>
    <main>
        <section class="left">
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600 zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200 zł</td>
                </tr>
            </table>
        </section>
        <section class="middle">
            <h2>W tym roku jedziemy do...</h2>
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'podroze');
            $sqlfirst = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";
            $resultfirst = mysqli_query($connection, $sqlfirst);
            while ($row = mysqli_fetch_array($resultfirst)) {
                echo "<img src='$row[0]' alt='$row[1]' title='$row[1]'>";
            }
            ?>
        </section>
        <section class="right">
            <h2>Kontakt</h2>
            <a href="biuro@wycieczki.pl">Napisz do nas</a>
            <p>telefon 444555666</p>
        </section>
    </main>
    <section class="data">
            <h3>W porzednich latach byliśmy...</h3>
            <?php
            $sqlsecond = "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = 0;";
            $resultsecond = mysqli_query($connection, $sqlsecond);
            while ($row = mysqli_fetch_array($resultsecond)){
                echo "<li>Dnia $row[1] pojechaliśmy do $row[0]</li>";
            }

            mysqli_close($connection);
            ?>
    </section>
    <footer>
        <p>Stronę wykonała: tloxiu</p>
    </footer>
</body>
</html>