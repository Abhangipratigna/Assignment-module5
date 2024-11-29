<?php 
    if(isset($_POST["login"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        if($email=='pratigna@gmail.com' && $password=='2310')
        {
          echo "<h3 style='text-align:center; color:green'>courant password and email</h3>";
          header('location:dashboard.php');
        }
        else 
        {

            echo "<h3 style='text-align:center; color:red'>Your email & Password </h3>";
            // header('location:login.php');
            header('refresh:40,login.php');
        }
    }


    ?>
<center>
    <h3>Login Form</h3>

    <form method="post">
        <input type="text" name="email" placeholder="Email *" required />
        <br><br>
        <input type="password" name="password" placeholder="Password *" required />
        <br><br>
        <input type="submit" name="login" value="Login" />

    </form>
</center>
</body>

</html>