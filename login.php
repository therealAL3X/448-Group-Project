<?php
/*
Modified by Alex Khadra
IS 448
*/

session_start();
$host = 'studentdb-maria.gl.umbc.edu';
$username = 'akhadra1';
$password = 'akhadra1';
$database = 'akhadra1';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT first_name, username, password FROM credentials WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] === $password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['firstname'] = $row['first_name']; 
            $_SESSION['username'] = $row['username'];
            header("Location: sp_main.php");
            exit;
        } else {
            echo "<script>alert('Invalid Password.'); window.location.href='login.html';</script>";
            exit;
        }
    } else {
        echo "<script>alert('No user found with that email address.'); window.location.href='login.html';</script>";
        exit;
    }
}
mysqli_close($conn);
?>
