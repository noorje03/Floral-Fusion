<?php

$db = mysqli_connect("localhost", "root", "", "customer");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    $result = mysqli_query($db, "select username from accounts where username='$name'");
    $a = mysqli_fetch_row($result);
    if (!empty($a)) {
        $valid = mysqli_query($db, "select card_balance from accounts where username='$name' and card_balance -'$forcard'>=0");
        $b = mysqli_fetch_row($valid);
        if (!empty($b)) {
            mysqli_query($db, "update accounts set PhoneNumber='$phone',PaymentMethod='$payment',card_balance=card_balance-'$forcard' where username='$name'");
            echo "<script>
            window.location.href='http://localhost/website/project1/home.php';
            alert('thank you for your trust... your payment is valid');
            </script>";
        } else {
            echo "<script>
            window.location.href='http://localhost/website/project1/index2.php';
            alert('you dont have enough money');
            </script>";
        }
    } else {
        echo "<script>
            window.location.href='http://localhost/website/project1/index2.php';
            alert('user name is not valid');
            </script>";
    }
}
mysqli_close($db);
