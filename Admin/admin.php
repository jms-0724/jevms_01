<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location: ../index.php");
    }

    if(isset($_SESSION['userid']) && $_SESSION['userlevel'] != "admin"){
        header("location: ../Accountant/accountant.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
        <link rel="stylesheet" href="./../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/img/bwdlogo.ico" type="image/x-icon">
        <link rel="stylesheet" href="./../assets/css/page.css">
        
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <aside class="col-md-3 d-flex flex-column align-items-stretch bg-color vh-100">
                    <nav class="d-flex flex-column">
                    
                        <div class="text-center">
                            <a href="#" class="navbar-logo"><img src="./../assets/img/bwd_logo2.png" alt="" class="img-fluid" width="100" height="100"></a>
                            <span class="text-white"><h3>Journal Entry Voucher Management System</h3></span>
                        </div>
                       
                        <div class="my-3">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item w-100 text-center my-1">
                                    <a class="nav-link activate text-white" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item w-100 text-center my-1">
                                    <a class="nav-link text-white" aria-current="page" href="usermanagement.php">User Management</a>
                                </li>
                                <li class="nav-item w-100 text-center my-1">
                                    <a class="nav-link text-white" aria-current="page" href="#">Page3</a>
                                </li>
                                <li class="nav-item w-100 text-center my-1">
                                    <a class="nav-link text-white" aria-current="page" href="#">Page4</a>
                                </li>
                                <li class="nav-item w-100 text-center my-1">
                                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu1" aria-expanded="false" aria-controls="submenu1">Dropdown</a>
                                    <ul class="collapse list-unstyled" id="submenu1">
                                      <li class="nav-item w-100">
                                        <a class="nav-link  text-white" href="#">Sub-item 1</a>
                                      </li>
                                      <li class="nav-item w-100">
                                        <a class="nav-link  text-white" href="#">Sub-item 2</a>
                                      </li>
                                      <li class="nav-item w-100">
                                        <a class="nav-link text-white" href="#">Sub-item 3</a>
                                      </li>
                                    </ul>
                            </ul>
                        </div>
                        
                        <div class="mt-auto p-2 text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    User Utilities
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Logout">Logout</a></li>
                                    </ul>
                                </div>
                        </div>

                    </nav>
                
            </aside>
            <main class="col-md-9">
                
                
            </main>
        </div>
    </div>

    <script src="./../assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./../assets/js/jquery-3.7.1.min.js"></script>
    <script src="system/confirmlogout.js"></script>
    <?php
        include("./modals/logoutmodal.php");
    ?>
</body>
</html>