<?php
    session_start();
    if($_SESSION['id'] == true){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
    <div class="container">
        <h2>List of Services</h2>
        <a class="btn btn-primary button" href="./create.php" role="button">New Service</a>
        <br> 
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Services</th>
                    <th>Image</th>
                    <th>Dimensions</th>
                    <td>Description</td>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Database Connection
                    require_once('../config.php');

                    if(!$db){
                        die("Failure".mysqli_connect_erro());
                    }
                    else{
                        // echo "Hurayy";
                    }

                    // read data from services table
                    $sql = "SELECT * FROM `services`";
                    $result = $db->query($sql);

                    if(!$result){
                        die("Connection Failed...".$db->error());
                    }
                    // read data as rows
                    while($row = $result->fetch_assoc()){
                        $data = $row['description'];
                        $substring = substr($data,0,100);
                        $description = $substring."...";
                        echo"
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[type]</td>
                                <td><img src='./db_images/$row[image]' height=100px width=100px></td>
                                <td>$row[dimensions]</td>
                                <td>$description</td>
                                <td>$row[createdat]</td>
                                <td>
                                    <a class='btn btn-primary btn-sm space' href='./edit.php?id=$row[id]'>Edit</a><br>
                                    <a class='btn btn-danger btn-sm' href='./delete.php?id=$row[id]'>Delete</a>
                                </td>
                            </tr>
                        ";
                    }

                ?>
                <!-- <tr>
                    <td>1</td>
                    <td>Flooring</td>
                    <td>Modular Kitchen</td>
                    <td>Image</td>
                    <td>23*20*12</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea maiores, error commodi natus earum quod a sit voluptatibus quos ullam sequi aliq</td>
                    <td>25-09-1892</td>
                    <td>
                        <a class='btn btn-primary btn-sm space' href='./edit.php?id=$row[id]'>Edit</a><br>
                        <a class='btn btn-danger btn-sm' href='./delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Flooring</td>
                    <td>Modular Kitchen</td>
                    <td>Image</td>
                    <td>23*20*12</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea maiores, error commodi natus earum quod a sit voluptatibus quos ullam sequi aliq</td>
                    <td>25-09-1892</td>
                    <td>
                        <a class='btn btn-primary btn-sm space' href='./edit.php?id=$row[id]'>Edit</a><br>
                        <a class='btn btn-danger btn-sm' href='./delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Flooring</td>
                    <td>Modular Kitchen</td>
                    <td>Image</td>
                    <td>23*20*12</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea maiores, error commodi natus earum quod a sit voluptatibus quos ullam sequi aliq</td>
                    <td>25-09-1892</td>
                    <td>
                        <a class='btn btn-primary btn-sm space' href='./edit.php?id=$row[id]'>Edit</a><br>
                        <a class='btn btn-danger btn-sm' href='./delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr> -->
            </tbody>
        </table>    
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