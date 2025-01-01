<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section class="pierwszy-blok-banera">
            <img src="zad5.png" alt="logo lotnisko">
        </section>
        <section class="drugi-blok-banera">
            <h1>Przyloty</h1>
        </section>
        <section class="trzeci-blok-banera">
            <h3>przydatne linki</h3>
            <a href="kwerendy.txt" target="_blank">Pobierz…</a>
        </section>
    </header>

    <main class="blok-glowny">
        <table>
            <tr><th>czas</th><th>KIERUNEK</th><th>NUMER REJSU</th><th>STATUS</th></tr>

            <?php
            $connection = mysqli_connect('localhost','root','','egzamin');
            $query = 'SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;';
            $result = mysqli_query($connection, $query);

            while ($row = $result -> fetch_array()){
                echo '<tr><td>' . $row[0] . '</td><td>' . $row[1] . '</td><td>' . $row[2]. '</td><td>' . $row[3] . '</td></tr>';
            }
            ?>

        </table>
    </main>

    <footer>
        <section class="pierwszy-blok-stopki">
            <?php
            if(isset($_COOKIE['visited'])){
                echo '<p><i>Witaj ponownie na stronie lotniska!</i></p>';
            } else{
                echo '<p><b>Dzień dobry! Strona lotniska używa ciasteczek.</b></p>';
                setcookie('visited', 'true', time() + 7200);
            }
            ?>

        </section>
        <section class="drugi-blok-stopki">
            <p>Autor: sjkhaskldfhaslkdjf lol</p>
        </section>
    </footer>
    
</body>
</html>