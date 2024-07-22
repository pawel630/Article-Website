<?php include("submit.php")?>
<html>
    <head>
        <meta charset="utf8">
        <title>Dodaj artykuły</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header2">
            <h2>Dodaj artykuły</h2>
        </div>
        <form action="add.php" method="post">
            <div class="article-container">
                <p style="color: green"><?php echo $msg ?><p>

                <!-- Add articles -->
                <div class="input-group">
                    <label for="tytul">Tytuł</label>
                    <input type="text" id="tytul" name="tytul" minlength="5" required>
                </div>
                <div class="input-group">
                    <label for="autor">Autor</label>
                    <input type="text" id="autor" name="autor" minlength="5" required>
                </div>
                <div class="input-group">
                    <label for="data">Data</label>
                    <input type="text" id="data" name="data" placeholder="0000-00-00" minlength="10" required>
                </div>
                <div class="input-group">
                    <label for="tresc">Treść</label>
                    <textarea id="tresc" name="tresc" rows="10" cols="80" placeholder="Limit 500 słów" minlength="1" required></textarea><br><br>
                </div>

                <input type="submit" class="btn" value="Dodaj">
                <a href="index.php">
                    <input type="button" class="btn" value="Powrót"/>
                </a>
            </div>
        </form>
    </body>
</html>