<?php

    session_start();

    require('./config.php');

    // Check Connection
    if(!$db){
        die("Connection Failed!!!".mysqli_connect_error());
    }
    else{
        // echo "Connected Succesfully";
    }

    $id = $_GET['id'];

    $sql = mysqli_query($db,"SELECT `name` FROM `typesofservice` WHERE id='$id'");
    $row1 = mysqli_fetch_assoc($sql);
    $category = $row1['name'];

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
            <li><a href="./index.php#home">Home</a></li>
            <li><a href="./index.php#about">About</a></li>
            <li><a href="./index.php#gallery">Gallery</a></li>
            <li><a href="./index.php#services">Services</a></li>
            <li><a href="./index.php#contact">Contact</a></li>
            <?php if(isset($_SESSION['id'])): ?>
                <li><a href="./admin-panel/admin.php">Admin</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <!-- @@@@ /navbar @@@@ -->

    <!-- banner -->

    <div class="home1" id="home">
        <div class="home_s">
            <?php
                echo "<h1>$category</h1>";  
            ?>
        </div>
    </div>
    <!--@@@@ /banner @@@@-->

    <!--@@@@ data @@@@-->
    <section class="main_container">
    <div class="container2">
        <?php
            $images = mysqli_query($db,"SELECT * FROM `services` WHERE type='$category'");
            // $count = mysqli_num_rows($images);
            // echo $count;
            while($row2 = mysqli_fetch_assoc($images)){
                echo "
                <div class='wrapper'>
                    <img src='./admin-panel/servicegallery/db_images/$row2[image]'>
                    <div class='content'>
                        <span>$row2[name]</span>
                        <p>Premium Furniture & Styling</p>
                    </div>
                    <div class='row'>
                        <div class='price'>$row2[price]</div>
                        <div class='buttons'>
                            <button>Buy Now</button>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
        <!-- <div class="wrapper">
            <img src="./images/trend5.jpg" alt="">
            <div class="content">
                <span>Apple Airpods</span>
                <p>Premium airpods</p>
            </div>
            <div class="row">
                <div class="price">$50</div>
                <div class="buttons">
                    <button>Buy Now</button>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <img src="./images/trend3.jpg" alt="">
            <div class="content">
                <span>Apple Watch</span>
                <p>Premium watch</p>
            </div>
            <div class="row">
                <div class="price">$89</div>
                <div class="buttons">
                    <button>Buy Now</button>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <img src="./images/trend1.jpg" alt="">
            <div class="content">
                <span>Headphone</span>
                <p>Premium headphone</p>
            </div>
            <div class="row">
                <div class="price">$130</div>
                <div class="buttons">
                    <button>Buy Now</button>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div> -->
    </div>
    </section>


    <!--@@@@ /data @@@@-->


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