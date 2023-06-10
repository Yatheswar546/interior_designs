<?php

session_start();
@include 'config.php';

if($db){
    // echo "Success";
}
else{
    echo "Failure".mysqli_connect_error();
}
 
// session_start();

// if(!isset($_SESSION['user_name'])){
//   header('location:login.php');
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U4_9ARCHITECTS</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="logo"><img src="./images/logo.png" alt="Loading"></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class='bx bx-menu'></i>
        </label>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if(isset($_SESSION['id'])): ?>
                <li><a href="./admin-panel/admin.php">Admin</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <!-- banner -->
    <div class="home" id="home">
        <div class="hero">
            <div class="col">
                <h1 class="text1 animate__animated animate__fadeInDown animate__faster">Interior Design</h1>
                <h3 class="text2 animate__animated animate__fadeInDown animate__fast">Architechture services</h3>
                <a href="#" class="animate__animated animate__fadeInDown">Book for design</a>
            </div>
        </div>
    <div class="counting animate__animated animate__ZoomIn">
        <div class="box">
            <h1 class="count" data-count="1200">1200</h1>
            <h3>Working hours</h3>
        </div>
        <div class="box">
            <h1 class="count" data-count="15">15</h1>
            <h3>Awards</h3>
        </div>
        <div class="box">
            <h1 class="count" data-count="1000">1000</h1>
            <h3>Clients</h3>
        </div>
        <div class="box">
            <h1 class="count" data-count="840">840</h1>
            <h3>Projects</h3>
        </div>
    </div>
    </div>
    <!-- about -->
    <div class="about" id="about">
        <div class="container1">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>U4_9Architect's Interior Design</h3>
                    <p>U4_9Architect's is an interior design organization, we are an accumulation of specialists and draftsmen with 
                        mutual reasoning of underscoring the basic and the sensitive.<br>
                        Our interior modeler Maria Doss has 26 years of involvement in Brazil and 8 years in the U.S. showcase. Her 
                        motivation has dependably been nature itself.Each work is an expert satisfaction, autonomous from the style, size
                        or place. Every client has their taste and want and we meet them with affection and strategy.
                     </p>
                     <div class="button">
                        <a href="">Read More</a>
                     </div>
                </div>
            </div>
            <div class="image-section animate__animated animate__fadeInLeft">
                <img src="./images/about1.jpeg" alt="">
            </div>
        </div>
    </div>
    <!-- /about -->

<!--@@@@ projects @@@@-->

<section class="projects" id="gallery"> 
    <div class="title">
        <h3>Trending Projects</h3>
        <a href="#">See all ></a>
    </div>
    <div class="project">
        <button class="pre-btn"><img src="./images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="./images/arrow.png" alt=""></button>
        <div class="project-container">

            <!-- fetch data from gallery table -->
            <?php
                $gallery = mysqli_query($db,"SELECT * FROM `gallery`");

                if(!$gallery){
                    die("Connection Failed!!!".mysqli_connect_error());
                }
                else{
                    // read data as rows from data
                    while($row = mysqli_fetch_assoc($gallery)){
                        echo"
                            <div class='project-card'>
                                <div class='project-image'>
                                    <img src='./admin-panel/gallery/db_images/$row[image]' class='project-thumb' alt=''>
                                    <button class='card-btn'>add to wishlist</button>
                                </div>
                                <div class='project-info'>
                                    <h2 class='project-brand'>$row[name]</h2>
                                    <p class='project-short-description'>$row[discription]</p>
                                    <span class'dimention'>$row[size]</span>
                                </div>
                            </div>
                            ";
                    }
                }
            ?>
            <!-- <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend1.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend2.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend3.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend4.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                <img src="./images/trend5.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend6.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend7.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend8.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend9.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./images/trend10.jpg" class="project-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="project-info">
                    <h2 class="project-brand">brand</h2>
                    <p class="project-short-description">a short line about the cloth..</p>
                    <span class="dimention">23*6</span>
                </div>
            </div> -->
        </div>
    </div>
</section>
    
    


    <!--@@@@ projects @@@@-->

    <!--@@@@  services  @@@@-->
    <section class="services" id="services">
        <div class="service-container">
            <div class="title-s">
                <h3>End-to-End Services</h3> 
            </div> 
            <div class="service">
                <?php

                    // fetch data from typesofservice table
                    $sql = mysqli_query($db,"SELECT * FROM `typesofservice`");
                    while($row = mysqli_fetch_assoc($sql)){
                        echo"
                        <div class='service-image'>
                            <a href='./service.php?id=$row[id]'>
                                <img src='./admin-panel/servicetypes/db_images/$row[image]'>
                                <h3><br>$row[name]</h3>
                            </a> 
                        </div>
                        ";
                    }
                ?>
                <!-- <div class="service-image">
                    <a href="./service.html <?php // echo $category; ?>">
                    <img src="./images/services/kitchen (1).png" alt="">
                    <h3><br>Modular kitchen</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/cabinet.png" alt="">
                    <h3><br>Foyer Designs</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/shelving.png" alt="">
                    <h3><br>Crpokery Units</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/chair.png" alt="">
                    <h3><br>Space Saving Furniture</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/tv.png" alt="">
                    <h3><br>Tv Units</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/desk.png" alt="">
                    <h3><br>Study Tables</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/ceiling-lamp.png" alt="">
                    <h3><br>False Ceiling</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/light.png" alt="">
                    <h3><br>Lights</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/wallpaper.png" alt="">
                    <h3><br>Wallpaper</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/paint-roller.png" alt="">
                    <h3><br>Wallpaint</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/bathroom.png" alt="">
                    <h3><br>Bathroom</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/pooja.png" alt="">
                    <h3><br>Pooja Unit</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/wardrobe.png" alt="">
                    <h3><br>Storage and Waredrobe</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/chair.png" alt="">
                    <h3><br>Movable Furniture</h3>
                    </a>
                </div>
                <div class="service-image">
                    <a href="#">
                    <img src="./images/services/baby-crib.png" alt="">
                    <h3><br>kids Bedroom</h3>
                    </a>
                </div> -->
            </div>
            <div class="col1">
                <a href="#">Book for design</a>
            </div>
        </div>
    </section>
    <!--@@@@  /services  @@@@-->

    <!--@@@@  Experties  @@@@-->
    <section class="experties">
        <div class="exp_container">
        <div class="title-e">
            <h3>Stay safe. Design virtually.</h3>
        </div>
        <div class="expert-container">
            <div class="expert">
                <img src="./images/expert/monitoring (1).png" alt="">
                <h3><br>Contactless Experience</h3>
                <p><br>No stepping out. Design your home interiors from
                    the safety and <br>comfort of your home.
                </p>
            </div>
            <div class="expert">
                <img src="./images/expert/monitoring.png" alt="">
                <h3><br>Online Expertise</h3>
                <p><br>Connect with our experienced <br>Designers virtually and explore<br> Designs
                    online.
                </p>
            </div>
            <div class="expert">
                <img src="./images/expert/office.png" alt="">
                <h3><br>Live 3D Designes</h3>
                <p><br>Explore life-like 3D designs online <br>that are made for your floor plan.
                </p>
            </div>
            <div class="expert">
                <img src="./images/expert/finance.png" alt="">
                <h3><br>Instant Pricing</h3>
                <p><br>Enjoy complete price transparency <br>and stay within budget.
                </p>
            </div>
        </div>
        </div>
    </section>
    <!--@@@@  /Experties  @@@@-->


    <!--@@@@  testimonial  @@@@-->
    <section class="testimonial">
        <div class="swiper-container" >
            <div class="title">
                <h1>Testimonials</h1>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img src="./images/quote.png" class="quote">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum at laboriosam omnis molestiae cupiditate nulla dolore unde? In, architecto placeat at illum officiis minima?</p>
                            <div class="details">
                                <div class="imgBx">
                                    <img src="./images/user1.jpg" alt="">
                                </div>
                                <h3>Someone Famous<br><span>Creative Designer</span></h3>
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img src="./images/quote.png" class="quote">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum at laboriosam omnis molestiae cupiditate nulla dolore unde? In, architecto placeat at illum officiis minima?
                            </p>
                            <div class="details">
                                <div class="imgBx">
                                    <img src="./images/user2.jpg" alt="">
                                </div>
                                <h3>Someone Famous<br><span>Creative Designer</span></h3>
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img src="./images/quote.png" class="quote">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum at laboriosam omnis molestiae cupiditate nulla dolore unde? In, architecto placeat at illum officiis minima?
                            </p>
                            <div class="details">
                                <div class="imgBx">
                                    <img src="./images/user3.jpg" alt="">
                                </div>
                                <h3>Someone Famous<br><span>Creative Designer</span></h3>
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img src="./images/quote.png" class="quote">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum at laboriosam omnis molestiae cupiditate nulla dolore unde? In, architecto placeat at illum officiis minima?
                            </p>
                            <div class="details">
                                <div class="imgBx">
                                    <img src="./images/user4.jpg" alt="">
                                </div>
                                <h3>Someone Famous<br><span>Creative Designer</span></h3>
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img src="./images/quote.png" class="quote">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum at laboriosam omnis molestiae cupiditate nulla dolore unde? In, architecto placeat at illum officiis minima?
                            </p>
                            <div class="details">
                                <div class="imgBx">
                                    <img src="./images/user4.jpg" alt="">
                                </div>
                                <h3>Someone Famous<br><span>Creative Designer</span></h3>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    

    <script src="./js/script.js"></script>
    <!--Js testimonial-->
    <!-- <script>
        var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    loop: true,

    // }); 
    </script> -->

    <!--/js testimonial-->
    <!--@@@@ /testimonial @@@@-->

    <!--@@@@ Contact us @@@@-->

    <div class="container" id="contact">
        <span class="big-circle"></span>
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Ad similique, mollitia repellat veritatis recusandae perferendis.
                </p>

                <div class="info">
                    <div class="information">
                        <box-icon name='map' color='#489be5' ></box-icon>
                        <p>Visakhapatnam, 530014</p>
                    </div>
                    <div class="information">
                        <box-icon name='envelope' color='#489be5' ></box-icon>
                        <p>u4_9architect@gmail.com</p>
                    </div>
                    <div class="information">
                        <box-icon name='phone' color='#489be5' ></box-icon>
                        <p>9546217468</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us:</p>
                    <div class="social-icons">
                        <a href="#">
                            <box-icon name='facebook' type='logo' animation='tada'></box-icon>
                        </a>
                        <a href="#">
                            <box-icon name='linkedin' type='logo'animation='tada'></box-icon>
                        </a>
                        <a href="#">
                            <box-icon name='instagram' type='logo'animation='tada'></box-icon>
                        </a>
                        <a href="">
                            <box-icon name='twitter' type='logo'animation='tada'></box-icon>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form action="./admin-panel/feedbacks/form.php" method="post">
                    <h3 class="title">Contact Us</h3> 
                    <div class="input-container ">
                        <input type="text" name="name" id="name" class="input" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" id="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" id="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" id="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" name="submit" value="send" class="btn" />
                </form>
            </div>   
        </div>
    </div>
    <script src="./js/script.js" ></script>
    <!--@@@@ /Contact us @@@@-->

    <!--@@@@ Footer @@@@-->
    <section class="footer">
        <div class="box-container">
            <div class="box-left">
                <div class="box1">
                    <h3>About Us</h3>
                    <p>U4_9Architect's is an interior design organization, we are an accumulation of specialists and draftsmen with 
                        mutual reasoning of underscoring the basic and the sensitive.<br>
                        Every client has their taste and want and we meet them with affection and strategy.
                    </p>
                    <div class="button">
                        <a href="">Read More</a>
                     </div>
                </div>
            </div>

            <div class="box-right">
                <div class="box">
                    <h3>U4_9Architects</h3>
                    <a href="#">Team</a>
                    <a href="#">Join Us</a>
                    <a href="#">The Design Journal</a>
                    <a href="#">Get Estimate</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Book Virtual Meeting</a>
                    <a href="#">FAQ</a>
                    <?php if(!isset($_SESSION['id'])): ?>
                        <a href="./login.php">Admin Login</a>
                    <?php endif; ?>
                </div>
    
                <div class="box">
                    <h3>Customer Support</h3>
                    <a href="">Raise issue</a>
                    <a href="">My issue</a>
                    <a href="">Contact Us</a>
                    <a href="">FAQs</a>
                </div>
    
                <div class="box">
                    <h3>The Design Journal</h3>
                    <a href="">Buying Guides</a>
                    <a href="">Style Your Home</a>
                    <a href="">Interior 101</a>
                    <a href="">Interiors By U4_9</a>
                </div>
            </div>
        </div>
        <h1 class="credit">copyright &copy; - created by <span>Pravishree Team B2
        </span> - all rights reserved!</h1>
    </section>
    <!--@@@@ /Footer @@@@-->


</body>
</html>

<!-- <?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: goharshitha.madarapu@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?> -->
