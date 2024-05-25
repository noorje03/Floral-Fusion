<?php
$db = mysqli_connect("localhost", "root", "", "customer");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  extract($_POST);
  $user_query = "select username,password from accounts where username='$username' and password='$pass'";
  $result = mysqli_query($db, $user_query);
  $a = mysqli_fetch_row($result);
  if (empty($a)) {
    echo "<script>alert('Incorrect username or password!'); window.location= 'account.php';</script>";
  } else {
    $delete_query = "delete from accounts where username='$username'";
    mysqli_query($db, $delete_query);
    echo "<script>alert('Account has been deleted successfully!'); window.location= 'account.php';</script>";
  }
}
mysqli_close($db);
