<?php include("config/constants.php")?>
<?php include("login-check-user.php");?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <i class="fa-solid fa-leaf leaf"></i><span class="logo-2nd-part">Now</span>
        </div>
        <nav class="navigation">
            <ul class="nav-links">
                <li class="m-1em nav-list"><a href="index.php" class="nav-link">Home</a></li>
                <li class="m-1em nav-list"><a href="" class="nav-link">About</a></li>
                <li class="m-1em nav-list"><a href="products.html" class="nav-link">Our Products</a></li>
                <li class="m-1em nav-list"><a href="" class="nav-link">Contact</a></li>

                <li class="m-1em nav-list"><a href="" class="nav-link">Ask a question</a></li>
            </ul>
        </nav>
        <form action="" class="search-form">
            <input type="search" name="q" id="" class="search" placeholder="Search Here" required>
            <input type="submit" value="Search" class="search-btn">
        </form>
        <div class="search-bag-account">

            <a href="" class="nav-link"><i class="fa-solid fa-bag-shopping bag nav-icon m-1em"></i><span class="cart-items-no">0</a>
            <a href="" class="nav-link acc-icon"><i class="fa-solid fa-user user nav-icon m-1em log-sign">&nbsp;<i class="fa-solid fa-caret-down crt"></i></i></a>
            <div class="register">
                <a href="" class="login">Log In</a>
                <a href="" class="signup">Sign Up</a>
                <a href="" class="logout">Log Out</a>
            </div>
        </div>
    </header>
    <section class="bannerimg">
        <div class="banner">

        </div>
    </section>
    <h2 class="product-title">ALL PRODUCTS</h2>
    <hr>
    <div class="all-products">
        
        <?php
            $sql2="SELECT * FROM tbl_product";
            $res2=mysqli_query($conn,$sql2);
            $count2=mysqli_num_rows($res2);
            if($count2>0){
                while($rows2=mysqli_fetch_assoc($res2)){
                    $product_id=$rows2['product_id'];
                    $title=$rows2['title'];
                    
                    $price=$rows2['price'];
                    $image_name=$rows2['image_name'];
                    
                    ?>
            <div class="product">
            <?php
                                    if($image_name!=""){
                                        ?>

                                        <img src="<?php echo HOMEURL;?>images/products/<?php echo $image_name;?>" alt="" class="plant-image">
                                        <?php
                                    }
                                    else{
                                        echo "<div class='error'>Product image not added</div>";
                                    }
                                ?>
                
                <h1 class="plant-name"><?php echo $title;?></h1>
                <h2 class="plant-price">₹&nbsp;<?php echo $price;?></h2>
                <a href="<?php echo HOMEURL;?>order.php?product_id=<?php echo $product_id;?>" class="buy-plant">Buy Now</a>
                <a href="" class="add-to-cart">Add to Cart</a>
            </div>
            
        
        <?php
                }
            }
            else{
                echo "<div class='error'>Products not added</div>";
            }
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/86098cddac.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>