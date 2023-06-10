<?php

    session_start();
    if($_SESSION['id'] == true){ 
    
    require_once('../config.php');

    if(!$db){
        die("Failure".mysqli_connect_erro());
    }
    else{
        // echo "Hurayy";
    }

$name = "";
$service = "";
$dimensions = "";
$description = "";
$price = "";

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST["name"];
    $service = $_POST["service"];
    $dimensions = $_POST["dimensions"];
    $description = addslashes($_POST["description"]);
    $price = $_POST['price'];
    $target = "./db_images/";
    $filename = $_FILES['image']['name'];
    $filetype = strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));
    $target_file = $target.basename(md5("userid".$filename).".".$filetype);
    $file = md5("userid".$filename).".".$filetype;

    $errorMessage = "";
    $successMessage = "";

    do{
        if(empty($name) || empty($service) || empty($dimensions) || empty($description) || empty($price) || empty($file)){
            $errorMessage = "All the fields are required";
            break;
        }
        // add new client
        if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
                $sql = "INSERT INTO `services`(`name`, `type`, `dimensions`, `image`, `description`, `price`) VALUES ('$name','$service','$dimensions','$file','$description','$price')";
                $result = $db->query($sql);
                if($sql){
                    $successMessage = "You have successfully inserted the data";
                    header("Location: index.php");
                    exit;
                }
                else{
                    $errorMessage = "Something Went Wrong";
                }
            }else{
                $errorMessage = "Image not Moved";
            }
        }else{
            $errorMessage = "Image not accepted";
        }
    }while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        main{
            margin-top: 76px;
            padding: 2rem 1.5rem;
            /* background: #f1f5f9; */
            min-height: calc(100vh - 90px);
            margin-left:22.9%;
        }
        a{
            text-decoration:none;
        }
        .space{
            margin-right:10px;
        }
    </style>
</head>
<body>
    <!-- Side Bar -->
<input type="checkbox" id="nav-toggle">
   <div class="sidebar">
    <div class="slider-brand">
    <img src="../images/logo.png" alt="">
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="../admin.php"><span><i class='bx bxs-dashboard'></i></span>
                <span>Dashboard</span></a>
            </li>
            <li>
                <a href="#"><span><i class='bx bx-user'></i></span>
                <span>Customers</span></a>
            </li>
            <li>
                <a href="../gallery/index.php"><span><i class='bx bx-notepad'></i></span>
                <span>Gallery</span></a>
            </li>
            <li>
                <a href="#"><span><i class='bx bx-receipt'></i></span>
                <span>Orders</span></a>
            </li>
            <li>
                <a href="../employees/index.php"><span><i class='bx bx-smile'></i></span>
                <span>Employees</span></a>
            </li>
            <li>
                <a href="../servicetypes/index.php"><span><i class='bx bx-briefcase'></i></span>
                <span>Services</span></a>
            </li>
            <li>
                <a href="../servicegallery/index.php"><span><i class='bx bx-briefcase'></i></span>
                <span>Services Gallery</span></a>
            </li>
            <li>
                <a href="../feedbacks/index.php"><span><i class='bx bx-message-rounded-dots'></i></span>
                <span>Feedback</span></a>
            </li>
            <li>
                <a href="../../index.php"><span><i class='bx bx-arrow-back'></i></span>
                <span>Back to home</span></a>
            </li>
            <li>
                <a href="../../logout.php"><span><i class='bx bx-log-out'></i></span>
                <span>Logout</span></a>
            </li>
        </ul>
    </div>
   </div>

   <!-- Main Content -->
   <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span><i class='bx bx-menu' ></i></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span><i class='bx bx-search'></i></span>
                <input type="search" placeholder="Search here">
            </div>

            <div class="user-wrapper">
                <img src="./images/profile-3.jpeg" width="40px" height="40px">
                <div>
                    <h4>John Doe</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
    </div>

    <!-- form content -->
    <main>
    <div class="container my-5">
        <h2>New Service</h2>
        <?php
        if(!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Type of Service</label>
                <div class="col-sm-6">
                    <select name="service" class="form-control" value="<?php echo $service; ?>">
                        <option value="Modular Kitchen">Modular Kitchen</option>
                        <option value="Foyer Designs">Foyer Designs</option>
                        <option value="Crpokery Units">Crpokery Units</option>
                        <option value="Space Saving Furniture">Space Saving Furniture</option>
                        <option value="Tv Units">Tv Units</option>
                        <option value="Study Tables">Study Tables</option>
                        <option value="False Ceiling">False Ceiling</option>
                        <option value="Lights">Lights</option>
                        <option value="Wallpaper">Wallpaper</option>
                        <option value="Wallpaint">Wallpaint</option>
                        <option value="Bathroom">Bathroom</option>
                        <option value="Pooja Unit">Pooja Unit</option>
                        <option value="Storage and Waredrobe">Storage and Waredrobe</option>
                        <option value="Movable Furniture">Movable Furniture</option>
                        <option value="kids Bedroom">kids Bedroom</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Dimensions</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dimensions" value="<?php echo $dimensions; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="image" value="<?php echo $file; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="<?php echo $price; ?>">
                </div>
            </div>
            <?php
            if(!empty($successMessage)){
                echo "
                <div class='row mb-3>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="./index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    </main>

</body>
</html>

<?php
    }
    else{
        header("Location: ../../index.php");
    }
?>