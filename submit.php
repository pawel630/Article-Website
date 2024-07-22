<?php
    $msg = "";

    // Create database connection
    $conn = mysqli_connect("localhost", "root", "", "konta");

    // Login
    if (isset($_GET["pass"])) {
        // Data
        $username = $_GET["user"];
        $password = md5($_GET["pass"]);

        // Find user
        $sql = "SELECT * FROM konta WHERE user='$username' AND pass='$password'";
        $result = mysqli_query($conn, $sql);

        // Check if user was found
        if (mysqli_num_rows($result) == 1) {
            //Successful login
            setcookie("loggedIn", $_GET["user"], time() + (86400 * 30), "/");
            header("location: /index.php");
        } else {
            $msg = "Nazwa użytkownika lub hasło się nie zgadza";
        }
    }
    // Register
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["pass"])) {
            // Data
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $wiek = $_POST['wiek'];
            $plec = $_POST['plec'];

            $sql = "INSERT INTO konta VALUES ('', '$user', '$pass', '$fname', '$lname', '$wiek', '$plec')";
            
            $msg = "Konto utworzono pomyślnie";
        // Upload article
        } else {
            // Data
            $user = $_COOKIE["loggedIn"];
            $tytul = $_POST['tytul'];
            $autor = $_POST['autor'];
            $data = $_POST['data'];
            $tresc = $_POST['tresc'];

            $sql = "INSERT INTO artykuly VALUES ('', '$user', '$tytul', '$autor', '$data', '$tresc')";

            $msg = "Artykuł dodano pomyślnie";
        }

        // Send query
        mysqli_query($conn, $sql);
    }
?>