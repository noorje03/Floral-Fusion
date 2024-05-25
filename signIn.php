<?php
$db = mysqli_connect('localhost', "root", "", "customer");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    $user_query = "select username,password from accounts where username='$username'and password='$pass'";
    $result = mysqli_query($db, $user_query);
    $a = mysqli_fetch_row($result);
    if (empty($a))
        echo "<script>alert('invalid username or password!'); window.location= 'account.php';</script>";
    else {
        echo "<script>alert('logged in successfully'); </script>";
        session_start();
        $_SESSION['username1'] = "$username";
        header("location:home.php");
    }
}
mysqli_close($db);
