<?php include("submit.php")?>
<html>
    <head>
        <meta charset="utf8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Logowanie</h2>
        </div>
        <form action="login.php" method="get">
            <p style="color: red"><?php echo $msg ?><p>

            <!-- Login -->
            <div class="input-group">
                <label for="user">Login</label>
                <input type="text" id="user" name="user" minlength="5" required><br>
            </div>
            <div class="input-group">
                <label for="pass">Hasło</label>
                <input type="password" id="pass" name="pass" minlength="5" required><br><br>
            </div>

            <input type="submit" class="btn" value="Zaloguj się">
            <a href="register.php">
                <input type="button" class="btn" value="Utwórz nowe konto"/>
            </a>
        </form>
    </body>
</html>