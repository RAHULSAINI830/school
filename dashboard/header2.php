<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- include meta tag file -->
  
    
    <link rel="icon" href="images/favi.png" type="image/gif" sizes="16x16"> 



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- css files include
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/responsive.css"> -->

    <!-- font-asasome link -->
    <script src="https://use.fontawesome.com/0bddc62ee4.js"></script>


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <style>
        
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 2;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 14px;
    color: #fff !important;
    display: block;
    transition: 0.3s;
  }
  
  .sidenav a:hover {
    color: #069292 !important;
  }
  .sidenav li a{
      color:#fff !important;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 14px;
    margin-left: 50px;
  }

.badpill, .badpilloff{
    color:#fff;
}

    </style>


</head>
<body>
    
<!-- header code -->


<div class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="images/webcosterwhite.png" alt="Webcoster" class="headerlogo">
            </a>
            
            <button class="navbar-toggler" type="button"  onclick="openNav()">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-th-list" aria-hidden="true" class="listbtn"></i>
                </span>
            </button>
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.webcoster.com">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item service_view">
                        <a class="nav-link " href="Services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Portfolio.php">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Demo-Website.php" >DEMO WEBSITES</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#" >Blogs</a>
                    </li>   -->
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php" >FAQ</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="ContactUs.php">Contact Us</a>
                    </li>
                    
                </ul>
            </div>  


             
        </nav>
    </div>
</div>


<!-- side menu mobile section start -->
<div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close Menu &times;</a>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="">Home</a>
                        </li>
                        
                        <li class="dropdown list_mem">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">About</a>
                            <ul class="dropdown-menu mem_menu">
                                <li><a href="About-Us.php">About Society</a></li>
                                <li><a href="About-Library.php">About Library</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item list_mem">
                            <a class="nav-link" href="News.php">News</a>
                        </li>
                        
                        <li class="dropdown list_mem">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Our Team
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Our-Members.php">Our Member</a></li>
                                <li><a href="Volentier.php">Our Volentier</a></li>
                            </ul>
                        </li>


                        <li class="list-group-item">
                            <a class="nav-link" href="Events.php">Events</a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="Gallery.php">Gallery</a>
                        </li>
                        <li class="list-group-item">
                            <a href="Contact-Us.php">Contact Us</a>
                        </li>
                        <li class="dropdown list_mem">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Join Us
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Join-Now.php">Registration</a></li>
                                <li><a href="Library-Registration.php">Library Registration</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- side menu mobile section end -->



<!-- header code end -->


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>