
<?php 
    session_start();
    if (!isset($_SESSION['Username'])) {
        header ('location: ../Log-In.php'); 
        exit;
    }
    include('../config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- bootstrap added -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- style sheet add -->
    <link href="css/indexstyle.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- font-awasome version 5 -->
    <script src="https://kit.fontawesome.com/3defd9afa9.js" crossorigin="anonymous"></script>

    <!-- fonts added -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    

</head>
<body>

<div class="header">
    <ul class="list-inline d-flex">
        
        <li class="list-inline-item">Gomati Devi Vidya Mandir School</li>
        
        <li class="dropdown myaccountmargin list-inline-item">
            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">My Account</a>
            <ul class="dropdown-menu profile_menu">
                <li><a href="User.php"><i class="far fa-user"></i> Profile</a></li>
                <li><a href="Log-Out"><i class="fas fa-power-off"></i> Log Out</a></li>
            </ul>
        </li>

        <li class="list-inline-item sitevisit">
            <a href="../index.php" target="_blank"> Visit Website </a>
        </li>

        <li class="list-inline-item menuicon">
            <a  onclick="openNav()"><i class="fas fa-th-list"></i></a>
        </li>

    </ul>




<!-- side menu mobile section start -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close Menu &times;</a>

    <ul class="list-group mt-5">

            <li class="list-group-item">
                <a href="index.php"><i class="fas fa-chart-line"></i> Dashboard</a>
            </li>
			
			<li class="list-group-item">
				<a href="User.php" id="linkitem"><i class="far fa-user"></i> User</a>
			</li>

            <li class="list-group-item d-flex">
            <a href="Inquery.php"><i class="fas fa-sms"></i> Inquery</a>
			</li>

        
        <li class="list-group-item d-flex" id="package" data-bs-toggle="collapse" href="#newscoll" role="button" aria-expanded="false" aria-controls="collapseExample">
            <a href=""><i class="far fa-newspaper"></i> News</a><span class='badpill'>+</span><span class="badpilloff">-</span>
        </li>
<!-- dropdown  -->
            <div class="collapse" id="newscoll">
                <ul class="list-group">
                <li class="list-group-item">
                        <a href="Add-News.php">Add News</a>
                    </li>
                    <li class="list-group-item">
                        <a href="View-News.php">View News</a>
                    </li>
                </ul>
            </div>
<!-- dropdown end -->


        <li class="list-group-item d-flex" id="package" data-bs-toggle="collapse" href="#gallcoll" role="button" aria-expanded="false" aria-controls="collapseExample">
            <a href=""><i class="far fa-images"></i> Gallery</a><span class='badpill'>+</span><span class="badpilloff">-</span>
        </li>
<!-- dropdown  -->
            <div class="collapse" id="gallcoll">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Gallery.php">Add Gallery</a>
                    </li>
                    <li class="list-group-item">
                        <a href="Images-Section.php">View Gallery</a>
                    </li>
                </ul>
            </div>
<!-- dropdown end -->


        <li class="list-group-item d-flex" id="package" data-bs-toggle="collapse" href="#blogcoll" role="button" aria-expanded="false" aria-controls="collapseExample">
            <a href=""><i class="fas fa-blog"></i> Blogs</a><span class='badpill'>+</span><span class="badpilloff">-</span>
        </li>
<!-- dropdown  -->
            <div class="collapse" id="blogcoll">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Add-Blog.php">Add Blog</a>
                    </li>
                    <li class="list-group-item">
                        <a href="View-Blogs.php">View Blogs</a>
                    </li>
                </ul>
            </div>
<!-- dropdown end -->

<li class="list-group-item d-flex" id="package" data-bs-toggle="collapse" href="#filecoll" role="button" aria-expanded="false" aria-controls="collapseExample">
            <a href=""><i class="fas fa-blog"></i> Download Files</a><span class='badpill'>+</span><span class="badpilloff">-</span>
        </li>
<!-- dropdown  -->
            <div class="collapse" id="filecoll">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Add-File.php">Add File</a>
                    </li>
                    <li class="list-group-item">
                        <a href="View-Files.php">View Files</a>
                    </li>
                </ul>
            </div>
<!-- dropdown end -->


<li class="list-group-item d-flex" id="package" data-bs-toggle="collapse" href="#teachcoll" role="button" aria-expanded="false" aria-controls="collapseExample">
            <a href=""><i class="fas fa-blog"></i> Teacher</a><span class='badpill'>+</span><span class="badpilloff">-</span>
        </li>
<!-- dropdown  -->
            <div class="collapse" id="teachcoll">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Add-Teacher.php">Add Teacher</a>
                    </li>
                    <li class="list-group-item">
                        <a href="View-Teachers.php">View Teachers</a>
                    </li>
                </ul>
            </div>
<!-- dropdown end -->
       

            
            <li class="list-group-item">
                <a href="Log-Out.php"><i class="fas fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </div>
<!-- side menu mobile section end -->

</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>





