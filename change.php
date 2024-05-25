<?php
$db = mysqli_connect("localhost", "root", "", "customer");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    $user_query = "select username from accounts where username='$username' ";
    $result = mysqli_query($db, $user_query);
    $a = mysqli_fetch_row($result);
    if (empty($a)) {
        echo "<script>alert('Incorrect username'); window.location= 'account.php';</script>";
    } else {
        $delete_query = "update  accounts set password='$pass' where username='$username'";
        mysqli_query($db, $delete_query);
        echo "<script>alert('Password has been updated successfully!'); window.location= 'account.php';</script>";
    }
}
mysqli_close($db);
