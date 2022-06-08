<?php include("../config/constants.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container1">
        <div class="container2">
            <div class="container4">
                <h1 class="lef">LEAF NOW</h1>
                <hr class="line">

                <h1 class="esse">Join Today</h1>
                <p class="lekh">10 Millions+ people have joined our community. We invite you to join the tribe.</p>
                <p class="foot">Already have an account?</p>
                <a href="login.php" class="loog">Log in</a>
            </div>
        </div>
        <div class="container3">
            <h1 class="topic">Sign up</h1>
            <form action="" class="signupform" method="POST">
            <?php
                if(isset($_SESSION['emailphone-taken'])){ //checking session set or not
                    echo $_SESSION['emailphone-taken']; //displaying session message
                    unset($_SESSION['emailphone-taken']);
                }
                
            ?>  <?php
                if(isset($_SESSION['add'])){ //checking session set or not
                    echo $_SESSION['add']; //displaying session message
                    unset($_SESSION['add']);
                }
                
            ?>
                <label for="First name" class="f1n">Your first name</label>
                <input type="text" class="fn" name="fname" placeholder="First name">
                <label for="Last name" class="l1n">Your last name</label>
                <input type="text" class="ln" name="lname" placeholder="Last name">
                <label for="email " class="email-label "> Email Address </label>
                <input type="email " class="email1" name="email" placeholder="Email address">
                <label for="password " class="password-label ">
                    Set password
                    </label>
                <input type="password" class="password1" name="password" id="" placeholder="Enter password">
                <label for="password confirmation" class="pwc">Re-enter your password</label>
                <input type="password" class="password1" name="password " placeholder="Re-enter your password">
                <p class="validate-pw"></p>
                <input type="checkbox" class="checkbox" name="checked">
                <label for="checkbox " class="chb">Show password</label>

                <input type="submit" class="btn1" value="Sign up &rarr;" name="submit">

            </form>
        </div>
    </div>
    <script src="showpass.js"></script>
</body>

</html>
<?php

if(isset($_POST['submit'])){

    // Get the data from the form
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    

    // sql query to enter the data frm form to the database

    $sql2="SELECT * FROM tbl_user WHERE Email='$email'";
    $res2=mysqli_query($conn,$sql2);

    $count=mysqli_num_rows($res2);
    if($count==0){
        
        //  sql query to insert form data to the table 
        $sql="INSERT INTO tbl_user SET
        first_name='$fname',
        last_name='$lname',
        Email='$email',
        Password='$password'
        ";
 

        // executing the query
        $res=mysqli_query($conn,$sql);

        if($res==TRUE){
            // creating a vaeriable to display message
            $_SESSION['signup-success']="<div  class='success'>You have been registered successfully.Please log in to proceed</div>";
            

            // redirecting
            header("location:".HOMEURL.'anish/login.php');
        }
        else{
            // creating a vaeriable to display message
            $_SESSION['add']="<div class='error'>Signup Failed</div>";
            

            // redirecting
            header("location:".HOMEURL.'anish/signin.php');
        }

    }
    else{
        $_SESSION['emailphone-taken']="<div class='pwd-error'>Email or Phone number already registered</div>";
        header("location:".HOMEURL.'anish/signin.php');
    }
}    






?>
