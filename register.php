<?php include("submit.php")?>
<html>
    <head>
        <meta charset="utf8">
        <title>Rejestracja</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Rejestracja</h2>
        </div>
        <form action="register.php" method="post">
            <p style="color: green"><?php echo $msg ?><p>

            <!-- Info -->
            <div class="input-group">
                <label for="fname">Imię</label>
                <input type="text" id="fname" name="fname" minlength="3" required><br>
            </div>
            <div class="input-group">
                <label for="lname">Nazwisko</label>
                <input type="text" id="lname" name="lname" minlength="3" required><br>
            </div>
            <div class="input-group">
                <label>Wiek</label>
                <select id="wiek" name="wiek">
                    <option>0 - 12</option>
                    <option>12 - 17</option>
                    <option>18+</option>
                </select>
            </div>
            <div class="radio-group">
                <label>Płeć</label><br>
                <input type="radio" id="mezczyzna" name="plec" value="Mężczyzna">
                <label for="mezczyzna">Mężczyzna</label><br>
                <input type="radio" id="kobieta" name="plec" value="Kobieta">
                <label for="kobieta">Kobieta</label>
            </div>

            <!-- Login -->
            <div class="input-group">
                <label for="user">Login</label>
                <input type="text" id="user" name="user" minlength="5" required><br>
            </div>
            <div class="input-group">
                <label for="pass">Hasło</label>
                <input type="password" id="pass" name="pass" minlength="5" required><br><br>
            </div>

            <input type="submit" class="btn" value="Zarejestruj się">
            <a href="/">
                <input type="button" class="btn" value="Powrót"/>
            </a>
        </form> 
    </body>
</html>