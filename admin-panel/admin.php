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
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
    <div class="slider-brand">
        <img src="../images/logo.png" alt="">
        <!-- <h2><span class='bx bxl-venmo'></span><span>Accusoft</span></h2> -->
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="#"><span><i class='bx bxs-dashboard'></i></span>
                <span>Dashboard</span></a>
            </li>
            <li>
                <a href="#"><span><i class='bx bx-user'></i></span>
                <span>Customers</span></a>
            </li>
            <li>
                <a href="./gallery/index.php"><span><i class='bx bx-notepad'></i></span>
                <span>Gallery</span></a>
            </li>
            <li>
                <a href="#"><span><i class='bx bx-receipt'></i></span>
                <span>Orders</span></a>
            </li>
            <li>
                <a href="./employees/index.php"><span><i class='bx bx-smile'></i></span>
                <span>Employees</span></a>
            </li>
            <li>
                <a href="./servicetypes/index.php"><span><i class='bx bx-briefcase'></i></span>
                <span>Services</span></a>
            </li>
            <li>
                <a href="./servicegallery/index.php"><span><i class='bx bx-briefcase'></i></span>
                <span>Services Gallery</span></a>
            </li>
            <li>
                <a href="./feedbacks/index.php"><span><i class='bx bx-message-rounded-dots'></i></span>
                <span>Feedback</span></a>
            </li>
            <li>
                <a href="../index.php"><span><i class='bx bx-arrow-back'></i></span>
                <span>Back to home</span></a>
            </li>
            <li>
                <a href="../logout.php"><span><i class='bx bx-log-out'></i></span>
                <span>Logout</span></a> 
            </li>
        </ul>
    </div>
   </div>
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
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h1>54</h1>
                    <span>Customers</span>
                </div>
                <div>
                    <span><i class='bx bx-user'></i></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>78</h1>
                    <span>Projects</span>
                </div>
                <div>    
                    <span><i class='bx bx-clipboard' ></i></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>124</h1>
                    <span>Orders</span>
                </div>
                <div>
                    <span><i class='bx bx-shopping-bag'></i></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>$6k</h1>
                    <span>Income</span>
                </div>
                <div>    
                    <span><i class='bx bx-wallet'></i></span>
                </div>
            </div>    
        </div>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h2>Recent Projects</h2>
                        <button>See All <span><i class='bx bx-right-arrow-alt'></i></span></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Project Title</td>
                                        <td>Department</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td><span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td><span class="status pink"></span>
                                            in progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td><span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td><span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td><span class="status pink"></span>
                                            in progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td><span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td><span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td><span class="status pink"></span>
                                            in progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td><span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customers">
                <div class="card">
                    <div class="card-header">
                        <h3>New Customers</h3>
                        <button>See All <span><i class='bx bx-right-arrow-alt'></i></span></button>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                           <div class="info">
                            <img src="./images/profile-1.jpeg" width="40px" height="40px" alt="">
                            <div>
                                <h4>Lewis S. Cunningham</h4>
                                <small>CEO Excerpt</small>
                            </div>
                           </div>
                           <div class="contact">
                            <span class="bx bxs-user-circle"></span>
                            <span class="bx bx-comment-detail"></span>
                            <span class="bx bx-phone"></span>
                           </div>
                        </div>

                        <div class="customer">
                            <div class="info">
                             <img src="./images/profile-1.jpeg" width="40px" height="40px" alt="">
                             <div>
                                 <h4>Lewis S. Cunningham</h4>
                                 <small>CEO Excerpt</small>
                             </div>
                            </div>
                            <div class="contact">
                             <span class="bx bxs-user-circle"></span>
                             <span class="bx bx-comment-detail"></span>
                             <span class="bx bx-phone"></span>
                            </div>
                         </div>

                         <div class="customer">
                            <div class="info">
                             <img src="./images/profile-1.jpeg" width="40px" height="40px" alt="">
                             <div>
                                 <h4>Lewis S. Cunningham</h4>
                                 <small>CEO Excerpt</small>
                             </div>
                            </div>
                            <div class="contact">
                             <span class="bx bxs-user-circle"></span>
                             <span class="bx bx-comment-detail"></span>
                             <span class="bx bx-phone"></span>
                            </div>
                         </div>

                         <div class="customer">
                            <div class="info">
                             <img src="./images/profile-1.jpeg" width="40px" height="40px" alt="">
                             <div>
                                 <h4>Lewis S. Cunningham</h4>
                                 <small>CEO Excerpt</small>
                             </div>
                            </div>
                            <div class="contact">
                             <span class="bx bxs-user-circle"></span>
                             <span class="bx bx-comment-detail"></span>
                             <span class="bx bx-phone"></span>
                            </div>
                         </div>

                         <div class="customer">
                            <div class="info">
                             <img src="./images/profile-1.jpeg" width="40px" height="40px" alt="">
                             <div>
                                 <h4>Lewis S. Cunningham</h4>
                                 <small>CEO Excerpt</small>
                             </div>
                            </div>
                            <div class="contact">
                             <span class="bx bxs-user-circle"></span>
                             <span class="bx bx-comment-detail"></span>
                             <span class="bx bx-phone"></span>
                            </div>
                         </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
   </div>
</body>
</html>

<?php
    }
    else{
        header("Location: ../index.php");
    }
?>