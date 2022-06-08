<?php include("../config/constants.php");?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login
    </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h1 class="login-tittle">Agent login</h1>
        <p class="details">Hello, Enter your details to get sign in to your account</p>
        <form action="" class="login" method="POST">
            <?php
             if(isset($_SESSION['user-login-error'])){ //checking session set or not
                echo $_SESSION['user-login-error']; //displaying session message
                unset($_SESSION['user-login-error']); //closing the session
            }
        ?>
            <?php        
                        if(isset($_SESSION['signup-success'])){ //checking session set or not
                            echo $_SESSION['signup-success']; //displaying session message
                            unset($_SESSION['signup-success']); //closing the session
                        }
                    ?><?php        
                        if(isset($_SESSION['login-message'])){ //checking session set or not
                            echo $_SESSION['login-message']; //displaying session message
                            unset($_SESSION['login-message']); //closing the session
                        }
                    ?>
            <label for="Email" class="em">Email address</label>
            <input type="email" class="email" name="email" placeholder="Enter your email ">
            <label for="password" class="pass">Enter your password</label>
            <input type="password" class="password" name="password" placeholder=" Enter your password ">



            <a href="" class="trouble">Having trouble?</a>

            <input type="submit" class="btn" value="Submit" name="submit">

            <p class="donn ">Dont have an account?
                <a href="signin.php" class="signup-redirect ">Request now</a>
            </p>
        </form>

    </div>
    
</body>

</html>
<?php

if(isset($_POST['submit'])){
    
     $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM tbl_user WHERE Email='$email' AND password='$password'";

    $res=mysqli_query($conn,$sql);

    $count=mysqli_num_rows($res);

    if($count==1){
        $_SESSION['login-success']="<div style='text-align:center; color:green; font-size:1.5rem;' class='success'>Logged In Successfully</div>";
        header("location:".HOMEURL);
        $_SESSION['email']=$email;
       
        

    }
    else{
        $_SESSION['user-login-error']="<div class='pwd-error'>Email or Password Did Not Match</div>";
        header("location:".HOMEURL.'anish/login.php');
    }
}

?>