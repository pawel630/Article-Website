<?php
    // Check if user is logged in
    if(!isset($_COOKIE["loggedIn"])) {
        header("location: /login.php");
    }

    // Log out
    if (isset($_GET["logout"])) {
        setcookie("loggedIn", "", time() - 3600);
        header("location: login.php");
    }
?>
<html>
    <head>
        <meta charset="utf8">
        <title>Strona Główna</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Dane konta</h2>
        </div>
        <div class="data-container">
            <div class="data-group">
            <?php
                // Create database connection
                $conn = mysqli_connect("localhost", "root", "", "konta");

                $username = $_COOKIE["loggedIn"];

                // Get user data
                $sql = "SELECT * FROM konta WHERE user='$username'";
                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);
                
                echo "<label>Nazwa</label> <p>{$row["user"]}</p> <label>Hasło</label> <p>{$row["pass"]}</p> <label>Imię</label> <p>{$row["fname"]}</p> <label>Nazwisko</label> <p>{$row["lname"]}</p> <label>Wiek</label> <p>{$row["wiek"]}</p> <label>Płeć</label> <p>{$row["plec"]}</p> <br>";
            ?>
            </div>
            <a href="index.php?logout='1'">
                <input type="button" class="btn" value="Wyloguj się"/>
            </a>
        </div>
        <div class="header2">
            <h2>Artykuły</h2>
        </div>
        <div class="article-container">
            <div class="data-group">
            <?php
                // Get user articles
                $sql = "SELECT * FROM artykuly WHERE user='$username'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $articleCount = 0;

                    // Loop through all articles
                    while($row = mysqli_fetch_assoc($result)) {
                        $articleCount += 1;
                        echo "<h3>Artykuł Nr. {$articleCount}</h3> <br> <label>Tytuł</label> <p>{$row["tytul"]}</p> <label>Autor</label> <p>{$row["autor"]}</p> <label>Data</label> <p>{$row["data"]}</p> <label>Treść</label> <p class='article-content'>{$row["tresc"]}</p> <br>";
                    }
                } else {
                    echo "Brak artykułów<br><br>";
                }
            ?>
            </div>
            <a href="add.php">
                <input type="button" class="btn" value="Dodaj artykuły"/>
            </a>
        </div>
    </body>
</html>