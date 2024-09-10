<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <section class="blokbanera1"> <img height="140" src="logo1.png" alt="lipiec"></section>
        <section class="blokbanera2">
            <h1>TERMINARZ</h1>
            <P>najbliższe zadania:</P>
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'terminarz');
            $query = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07' AND wpis != '';";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "$row[0]; ";
            }
            ?>
        </section>
    </header>

    <main>
        <?php
            $query = "SELECT dataZadania, wpis FROM zadania WHERE MONTH(dataZadania) = 7;";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<section class='kalendarz'>
                    <h6>$row[0]</h6>
                    <p>$row[1]</p>
                    </section>";
            }
            mysqli_close($connection);
        ?>
    </main>

    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: tloxiu</p>
    </footer>
</body>
</html>