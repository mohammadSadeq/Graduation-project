<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Login </title>



    <link rel="stylesheet" href="css/login.css">


</head>

<br> <br> <br> <br>

<body>
<div class="container">
    <section id="content">
        <form action="login_action">
            <h1>Login Form</h1>
            <div>
                <input type="text" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" id="password" />
            </div>

            <div>
                <input type="submit" name="login" value="Log in" />
            </div>
            <br>
                <p >
                    Not a member yet ? <a href="signup_page">Sign Up</a>
                </p>

        </form><!-- form -->

    </section><!-- content -->
</div><!-- container -->
</body>



<script  src="js/login.js"></script>




</body>

</html>
