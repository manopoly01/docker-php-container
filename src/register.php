<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Benutzername: " . $username . "<br>";
    echo "E-Mail: " . $email . "<br>";
    echo "Passwort: " . $password . "<br>";
}
?>
