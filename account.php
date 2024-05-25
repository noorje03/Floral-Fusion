<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FloralFusion</title>
    <style>
        input[type=text],
        select,
        input[type=password] {

            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #720455;
            width: 100%;

            color: white;
            padding: 14px 20px 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #36054b;

        }
    </style>
    <!--***********************************************************************js*********************************************-->
    <script>
        function openForm1() {
            document.getElementById("sign-up").style.display = "block";
        }

        function closeForm1() {
            document.getElementById("sign-up").style.display = "none";
        }

        function openForm2() {
            document.getElementById("sign-in").style.display = "block";
        }

        function closeForm2() {
            document.getElementById("sign-in").style.display = "none";
        }

        function openForm3() {
            document.getElementById("delete").style.display = "block";
        }

        function closeForm3() {
            document.getElementById("delete").style.display = "none";
        }

        function openForm5() {
            document.getElementById("changepass").style.display = "block";
        }

        function closeForm5() {
            document.getElementById("changepass").style.display = "none";
        }
    </script>
</head>
<!--***********************************************************************home**********************************************-->

<body onLoad="closeForm1(),closeForm2(),closeForm3(),closeForm5()">
    <section>
        <nav>
            <div class="logo">
                <h1><span>Floral</span>Fusion</h1>
            </div>
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#LoginSignup" onclick="alert('sign up first')">Products</a></li>
                <li><a href="#LoginSignup" onclick="alert('sign up first')">About</a></li>
                <li><a href="#LoginSignup" onclick="alert('sign up first')">Review</a></li>
                <li><a href="#LoginSignup" onclick="alert('sign up first')">Services</a></li>
            </ul>
            <div class="account_button">
                <a href="#LoginSignup"> <button>Account</button></a>
            </div>

        </nav>


        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>FloralFusion <br><span>Collection</span></h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="main_image">
                    <img src="./images/bg2.png">
                </div>
                <div class="social_icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
            <div class="button">
                <a href="#LoginSignup" onclick="alert('sign up first')">SHOP NOW</a>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </section>
    <section id="LoginSignup">
        <div class="login_signup_container">
            <div class="login_signup_content">
                <h2>Sign In or Create an Account</h2>
                <p>Join our community for exclusive benefits and offers!</p>
                <div class="buttons">
                    <a onclick="openForm2(),closeForm1(),closeForm3(),closeForm5()" class="btn login_btn">Sign In</a>
                    <a onclick="openForm1(),closeForm2(),closeForm3(),closeForm5()" class="btn signup_btn">Sign Up</a>
                </div>

                <!--***********************************************************************sign up form**********************************************-->
                <form action="signUp.php" id="sign-up" class="form" method="post">
                    <div class="Sign-Up">
                        <div><input type="text" id="name" placeholder="Full name" autocomplete="off" name="name" required />
                        </div>
                        <div><input type="text" id="address" placeholder="address" autocomplete="off" name="address" required />
                        </div>
                        <div><input type="text" id="login" placeholder="username" autocomplete="off" name="username" required />
                        </div>
                        <div><input type="password" id="pass" placeholder="Password" name="pass" required /></div>
                        <div><input type="password" id="pass2" placeholder="Retype Password" name="pass2" required /></div>
                        <div><input type="text" id="card" placeholder="Credit card Number" autocomplete="off" name="card" required /></div>
                        <div><input type="submit" id="submit" value="Sign Up" onclick="openForm1(),closeForm2() ,closeForm3(),closeForm5()" /></div>
                    </div>
                </form>



                <!--***********************************************************************sign in form**********************************************-->


                <form action="signIn.PHP" id="sign-in" class="form" method="post">
                    <div class="Login">
                        <div>
                            <input type="text" id="name" placeholder="username" autocomplete="on" name="username" required />
                        </div>
                        <div><input type="password" id="pass" placeholder="Password" name="pass" required /></div>
                        <div><input type="submit" id="submit" value="Log In" /></div>
                    </div>
                    <div class="delete">
                        Delete your account? <a onclick="closeForm2(),closeForm1(),closeForm5(),openForm3()" style="color:#36054b">Delete account</a>
                    </div>
                    <div class="change">
                        change your password? <a onclick="closeForm2(),closeForm1(),closeForm3(),openForm5()" style="color:#36054b">Change password</a>
                    </div>

                </form>
                <!--***********************************************************************delete account form**********************************************-->


                <form action="delete.php" id="delete" class="form" method="post">
                    <div class="Login">
                        <div class="log">Delete Account</div>
                        <div>
                            <input type="text" id="name" placeholder="username" autocomplete="on" name="username" required />
                        </div>
                        <div><input type="password" id="pass" placeholder="Password" name="pass" required /></div>
                        <div><input type="submit" id="submit" value="Delete Account" /></div>
                    </div>
                </form>

                <!--***********************************************************************change pass**********************************************-->


                <form action="change.php" id="changepass" class="form" method="post">
                    <div class="Login">
                        <div class="log">Change Password </div>
                        <div>
                            <input type="text" id="name" placeholder="username" autocomplete="on" name="username" required />
                        </div>
                        <div><input type="password" id="pass" placeholder="Password" name="pass" required /></div>
                        <div><input type="submit" id="submit" value="Change Password" /></div>
                    </div>
                </form>



            </div>
        </div>

    </section>


</body>

</html>