<?php
$db = mysqli_connect("localhost", "root", "", "customer");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    $user_query = "select username from accounts where username='$username'";
    $result = mysqli_query($db, $user_query);
    $a = mysqli_fetch_row($result);
    if (empty($a)) {
        if (preg_match('/\b^[A-Za-z][A-Za-z0-9_$]{4}\b/', $username))
            if (strcmp($pass, $pass2) == 0) {
                if (preg_match('/[A-Za-z ]+/', $name)) {
                    if (preg_match('/[0-9]+/', $card)) {
                        $query = "insert into accounts(name,address,username,password,card)values('$name','$address','$username','$pass','$card')";
                        mysqli_query($db, $query);
                        echo "<script>alert('Signed Up successfully! \n now you need to log-in '); window.location= 'account.php'; </script>";
                        header('Location:http://localhost/website/project1/account.php#LoginSignup');
                    } else echo "<script>alert('invalid card!'); window.location= 'account.php';</script>";
                } else echo "<script>alert('invalid username!'); window.location= 'account.php';</script>";
            } else echo "<script>alert('password not match!'); window.location= 'account.php';</script>";
        else echo "<script>alert('invalid username!'); window.location= 'account.php';</script>";
    } else echo "<script> alert('Username has been used!'); window.location= 'account.php';</script>";
}
mysqli_close($db);
exit;
