<?php include("../config/constants.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Forem</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../styles.css">
    
</head>
<body>
    
    
    <header class="navbar">
        <div class="logo">
            <i class="fa-solid fa-leaf leaf"></i><span class="logo-2nd-part">Now</span>
        </div>
        <nav class="navigation">
            <ul class="nav-links">
                <li class="m-1em nav-list"><a href="anish/about.php" class="nav-link">About</a></li>
                <li class="m-1em nav-list"><a href="products.php" class="nav-link">Our Products</a></li>
                <li class="m-1em nav-list"><a href="Intern_Project/contact.php" class="nav-link">Contact</a></li>

                <li class="m-1em nav-list"><a href="project-A/discussion.php" class="nav-link">Ask a question</a></li>
            </ul>
        </nav>
        <form action="" class="search-form" method="POST">
            <input type="search" name="q" id="" class="search" placeholder="Search Here" required>
            <input type="submit" value="Search" class="search-btn">
        </form>
        <div class="search-bag-account">

            <a href="" class="nav-link"><i class="fa-solid fa-bag-shopping bag nav-icon m-1em"></i></a>
            <a href="" class="nav-link acc-icon"><i class="fa-solid fa-user user nav-icon m-1em log-sign">&nbsp;<i class="fa-solid fa-caret-down crt"></i></i></a>
            <div class="register">
                <a href="anish/login.php" class="login">Log In</a>
                <a href="anish/signin.php" class="signup">Sign Up</a>
                <a href="" class="logout">Log Out</a>
            </div>
        </div>
    </header>
    
    
        <form action="" class="query" method="POST">
            <input type="text" name="question" id="" class="comment" placeholder="Ask your question here" required>
            <input type="text" name="description" id="" class="comment description" placeholder="Add Description(Optional)">
            <button class="question-submit-button" name="question-submit-btn">Submit</button>
        
        </form>
    

    
    
    <section class="Recent-Question" id="recent">
        
        <div class="Recent-Q">
            
            <div class="question">
                <?php
                $sql2="SELECT * FROM tbl_question ORDER BY question_id DESC";
                $res2=mysqli_query($conn,$sql2);
                $count2=mysqli_num_rows($res2);if($count2>0){
                    while($rows2=mysqli_fetch_assoc($res2)){
                        $question=$rows2['question'];
                        $date=$rows2['date'];
                        $description=$rows2['description'];
                    ?>
                
                
                <p class="date"><?php echo $date;?></p>
                <h1 class="question"><?php echo $question;?></h1>
                <p class="question-description"><?php echo $description;?>
                </p>
               
                <p class="answer-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo fugit sunt laborum. Repellat illum accusantium nemo excepturi officiis quia commodi.</p>
                <div class="answer">
                  <form action="" class="answer-form" method="POST">
                      <input type="text" name="answer" id=""class="answer-field" placeholder="Enter your answer here">
                      <input type="submit" value="Answer" class="answer-btn" name="answer-submit-btn">
                  </form>
                </div>
                
            </div>
            <?php
                }
            }
            else{
                echo "<div class='error'>No Question Found</div>";
            }
        ?>

        </div>

    </section>
   
    <script src="discussion.js"></script>
    <script src="../app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/86098cddac.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST['question-submit-btn'])){
     $question=$_POST['question'];
     $description=$_POST['description'];
     $date=date("Y-m-d h:i:sa");

     $sql="INSERT INTO tbl_question SET 
        question='$question',
        description='$description',
        date='$date'
     ";
     $res=mysqli_query($conn,$sql);
     if($res==true){
        header("location:".HOMEURL."project-A/discussion.php");
     }
     else{
        echo "error";
     }
     
}
?>
