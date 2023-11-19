<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginuser";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, password, role FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["role"] = $row["role"];

        if ($_SESSION["role"] == "admin") {
            header("Location: admin.php");
        } else {
            header("Location: user.php");
        }
    } else {
        echo "Invalid username or password";
    }
}

?>