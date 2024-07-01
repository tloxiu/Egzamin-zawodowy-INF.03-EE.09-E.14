<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>
    <header>
        <section class="first_block">
            <h1>Organizer: SIERPIEŃ</h1>
        </section>
        <section class="second_block">
            <form action="organizer.php" method="POST">
                <label for="pole">Zapisz wydarzenie:</label>
                <input type="text" id="pole" name="wpis">
                <button name="submit">OK</button>
            </form>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "kalendarz");

            if (isset($_POST["submit"])){
                $wpis = $_POST["wpis"];
                $sqlfirst = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-08-09'";

                mysqli_query($connection, $sqlfirst);
            }
            ?>
        </section>
        <section class="third_block">
            <img src="logo2.png" alt="Kalendarz sierpnia">
        </section>
    </header>
    <main>
        <?php
        $sqlsecond = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'sierpien'";
        $result = mysqli_query($connection, $sqlsecond);

        while ($row = mysqli_fetch_array($result)) {
            echo "<section class='dzien'><h5>$row[0]</h5><p>$row[1]</p></section>";
        }

        mysqli_close($connection);
        ?>
    </main>
    <footer>
        <p>Stronę wykonała: tloxiu</p>
    </footer>
</body>

</html>