<?php
    session_start();

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash($password, CRYPT_BLOWFISH);

        $dbc = new mysqli('localhost', 'root', '', 'pcstudio');

        if ($dbc->connect_error) {
            die('Error connecting to MySQL server: ' . $dbc->connect_error);
        }

        $sql = "SELECT korisnik FROM users WHERE korisnik = ?";

        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }
        if(mysqli_stmt_num_rows($stmt) > 0){
            echo "Korisničko ime se već koristi!";
        }
        else{
            $query="INSERT INTO users (korisnik, lozinka) values (?, ?)"; 

            $stmt = mysqli_stmt_init($dbc);
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 'ss', $username, $hash);
                mysqli_stmt_execute($stmt);
                echo "Registracija je uspješna!";

                $_SESSION['username'] = $username;
            }
        }
        mysqli_close($dbc);
    }
?>
