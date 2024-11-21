<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header class="baner">
        <section class="pierwszy-blok-banera">
            <h1>Ważenie pojazdów we Wrocławiu</h1>
        </section>
        <section class="drugi-blok-banera">
            <img src="obraz1.png" alt="waga">
        </section>
    </header>
    <main>
        <section class="blok-lewy">
            <h2>Lokalizacje wag</h2>
            <ol>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'wazenietirow');
                $query = 'SELECT ulica from lokalizacje;';

                $queryresult = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($queryresult)){
                    echo '<li>' . 'ulica ' . $row[0] . '</li>';
                }
                ?>
            </ol>
            <h2>Kontakt</h2>
            <a href="mailto:wazenie@wroclaw.pl">napisz</a>
        </section>
        <section class="blok-srodkowy">
            <h2>Alerty</h2>
            <table>
                <tr><th>rejestracja</th><th>ulica</th><th>waga</th><th>dzień</th><th>czas</th></tr>
                <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'wazenietirow');
                    $query = 'SELECT wagi.rejestracja, wagi.waga, wagi.dzien, wagi.czas, lokalizacje.ulica FROM wagi JOIN lokalizacje ON wagi.lokalizacje_id = lokalizacje.id;';
                
                    $queryresult = mysqli_query($connection, $query);
                                
                    while($row = mysqli_fetch_array($queryresult)){
                        echo '<tr><td>' . $row[0] . '</td>' . '<td>' . $row[4] . '</td><td>' . $row[1] . '</td><td>' . $row[2] . '</td><td>' . $row[3] . '</td></tr>';
                    }
                ?>
            </table>
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'wazenietirow');
            $query = 'INSERT INTO wagi(lokalizacje_id, waga, rejestracja, dzien, czas) VALUES(5, FLOOR(1 + RAND() * 10), "DW12345", CURRENT_DATE, CURRENT_TIME);';

            $queryresult = mysqli_query($connection, $query);
            echo '<meta http-equiv="refresh" content="10">';
            ?>
        </section>
        <section class="blok-prawy">
            <img class="obraz2" src="obraz2.jpg" alt="tir">
        </section>
    </main>
    <footer class="blok-stopki">
        <p>Stronę wykonał: lol</p>
    </footer>
</body>
</html>