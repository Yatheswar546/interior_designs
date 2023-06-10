<?php
    session_start();
    if($_SESSION['id'] == true){
        
    // Database Connection
    require_once('../config.php');

    if(!$db){
        die("Failure".mysqli_connect_erro());
    }
    else{
        // echo "Hurayy";
    }

    $name = "";
    $email = "";
    $phone = "";
    $experience = "";
    $role = "";

    $errorMessage = "";
    $successMessage = "";

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone_no"];
    $experience = $_POST["experience"];
    $role = $_POST["role"];
    $employeeid = md5(substr($name,0,3).substr($role,0,3).random_int(10000,99999));

    do{
        if(empty($name) || empty($email) || empty($phone) || empty($experience) || empty($role)){
            $errorMessage = "All the fields are required";
            break;
        }
        else{
            // Insert new Employee into table
            $sql = mysqli_query($db,"INSERT INTO `employees`(`name`, `email`, `phone`, `experience`, `role`, `employeeid`) VALUES ('$name','$email','$phone','$experience','$role','$employeeid')");

            if(!$sql){
                $errormsg = "Invalid Query".mysqli_connect_error();
                break;
            }
            $name = "";
            $email = "";
            $phone = "";
            $experience = "";
            $role = "";

            $successmsg = "Employee Added Successfully";
            header("Location: index.php");
            exit;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
        <h2>New Employee</h2>
        
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
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone_no" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Experience</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="experience" placeholder= "in months" value="<?php echo $experience; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-6">
                <select name="role" class="text-input" value="<?php echo $role; ?>">
                    <option value="Fresher">Fresher</option>
                    <option value="Developer">Developer</option>
                    <option value="Manager">Manager</option>
                    <option value="HR">HR</option>
                </select>
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