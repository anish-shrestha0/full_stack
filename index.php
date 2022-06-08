<?php include('config/constants.php');?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaf Now - Plants,seeds and more</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
<?php        
                        if(isset($_SESSION['login-success'])){ //checking session set or not
                            echo $_SESSION['login-success']; //displaying session message
                            unset($_SESSION['login-success']); //closing the session
                        }
                    ?>    <?php        
                        if(isset($_SESSION['order-success'])){ 
                            echo $_SESSION['order-success']; 
                            unset($_SESSION['order-success']); 
                        }
                    ?> 
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
        <form action="<?php echo HOMEURL;?>search.php" method="POST" class="search-form">
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
    <main class="content">
        <section class="display">
            <div class="title">
                <h1 class="main-title"><span class="plant-heading">Plants</span> make life better</h1>
                <p class="main-info">Plants reduce stress and improve your mood, so they are ideal for use at home and at the workplace</p>
                <div class="buttons">
                    <a href="Intern_Project/donor.php" class="btn1">Donate Now</a>
                    <a href="" class="btn2">Care Tips&nbsp;<i class="fa-solid fa-leaf"></i></a>
                </div>
            </div>
            <div class="main-image">
                <img src="images/plant.png" alt="" class="plant">
            </div>
            <div class="small-image">
                <div class="small-img-individual">
                    <img src="images/plant.png" alt="" class="small-plant">
                </div>
                <div class="small-img-individual">
                    <img src="images/plant.png" alt="" class="small-plant">
                </div>
                <div class="small-img-individual">
                    <img src="images/plant.png" alt="" class="small-plant">
                </div>
            </div>
        </section>
        <section class="carousel-section">
            <h2 class="review-title">What Our <span class="review-title-green">Customers Are Saying</span></h2>
            <div class="carousel" data-carousel>
                <button class="carousel-btn prev" data-carousel-button="prev">&#8656;</button>
                <button class="carousel-btn next" data-carousel-button="next">&#8658</button>
                <div data-slides>
                    <div class="review" data-active>
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="review-person">
                        <p class="name-address">Ms.Nirja,Butwal</p>
                        <p class="review-para">It is an amazing platform for getting all the plants and seeds. Their contribution towards the environment is respectable</p>
                    </div>
                    <div class="review">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="review-person">
                        <p class="name-address">Ms.Nirja,Kathmandu</p>
                        <p class="review-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eveniet sapiente quae vitae excepturi ratione quaerat ipsam eaque nihil libero, in quo pariatur vel nam illum asperiores, enim non error.</p>
                    </div>
                    <div class="review">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="review-person">
                        <p class="name-address">Ms.Nirja,Butwal</p>
                        <p class="review-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse similique assumenda reprehenderit quos at, voluptatem dolor laboriosam consequuntur vero asperiores cupiditate, totam dolore! Fugit ea iure corrupti animi tempora neque
                            quod iste at sit incidunt perspiciatis, enim dicta vero aperiam debitis illum ab similique doloribus officia beatae eos assumenda? Magni!</p>
                    </div>
                </div>

            </div>
        </section>
        <section id="services">
            <h2 class="review-title">Our <span class="review-title-green">Services</span></h2>
            <div class="service">
                <div class="service1">
                    <i class="fa-solid fa-plant-wilt service-img service-img1"></i>
                    <h3 class="service-name">High Quality Plants and Seeds</h3>
                    <p class="service-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi cupiditate laudantium rem sapiente beatae repudiandae facilis. Necessitatibus aliquam illo harum?</p>
                </div>

                <div class="service2">
                    <i class="fa-solid fa-people-group service-img service-img2"></i>
                    <h3 class="service-name">Plantation Training</h3>
                    <p class="service-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi cupiditate laudantium rem sapiente beatae repudiandae facilis. Necessitatibus aliquam illo harum?</p>
                </div>
                <div class="service3">
                    <i class="fa-solid fa-users-gear service-img service-img3"></i>
                    <h3 class="service-name">24/7 Customer Support</h3>
                    <p class="service-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi cupiditate laudantium rem sapiente beatae repudiandae facilis. Necessitatibus aliquam illo harum?</p>
                </div>
            </div>
        </section>

    </main>
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-inner-1">
                <div class="motto ">
                    <h2 class="quote">The best time to plant a tree is just now</h2>
                </div>
                <div class="footer-phone">
                    <p class="call">CALL US</p>
                    <h2 class="phone-number">9876543210</h2>
                </div>
                <div class="footer-email">
                    <p class="mailus">EMAIL US</p>
                    <h2 class="mailaddress">leafnow@gmail.com</h2>
                </div>
            </div>
            <div class="footer-inner-2">
                <table class="footer-links">
                    <thead>
                        <tr>
                            <th>Navigation</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="" class="footer-link">Home</a></td>
                            <td><a href="" class="footer-link">Privacy Policy</a></td>
                        </tr>
                        <tr>
                            <td><a href="" class="footer-link">Contact</a></td>
                            <td><a href="" class="footer-link">Terms and Conditions</a></td>
                        </tr>
                        <tr>
                            <td><a href="" class="footer-link">Donate</a></td>
                            <td><a href="" class="footer-link">FAQ</a></td>
                        </tr>
                        <tr>
                            <td><a href="" class="footer-link">Careers</a></td>
                        </tr>
                        <tr>
                            <td><a href="" class="footer-link">About Us</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="copyright-card">
            <h2 class="payment-tilte">Payment Methods</h2>
            <img src="https://raw.githubusercontent.com/surajaryal723/flipkart-homepage-clone/main/images/payments.png" alt="" class="payments">
            <p class="copyright">All Rights Reserved. &copy;Copyright LeafNow 2022</p>
        </div>


    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/86098cddac.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>