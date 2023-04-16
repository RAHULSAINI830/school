<?php
    include("header.php");
    include('config.php');
?>

<!-- slider -->
<?php
    include("slider.php");
?>

<!-- slider end -->

<!-- welcome msg section start here -->

<div class="welcome_section">
    <h3>Welcome to <br>Gomati Devi Vidya Mandir School </h3>
    <div class="col-lg-8 col-md-10 col-sm-12">
        <p>We believe that a happy child is a successful one. We are committed to providing a positive, safe and stimulating environment with cultural enrollment for children to learn, where all are valued. We intend that all children should enjoy their learning, achieve their potential and become independent life-long learners.</p>
    </div>
    <a href="about-us.php">Read More</a>
</div>

<!-- welcome msg section end here -->



<!-- extrastuff section start here -->

<div class="extra_stuff">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="inner_stuff inner_stuff1">
                    <h3>Enrolled Student</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nesciunt reprehenderit ex, laborum saepe dignissimos!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="inner_stuff inner_stuff2 margin_sec">
                    <h3>Our Partner</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nesciunt reprehenderit ex, laborum saepe dignissimos!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="inner_stuff inner_stuff3 ">
                    <h3>Job Placement</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi modi a repellendus quibusdam obcaecati quaerat?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="inner_stuff inner_stuff4">
                    <h3>24*7 Support</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nesciunt reprehenderit ex, laborum saepe dignissimos!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- extrastuff section end here -->




<!-- why choose us code start here -->

<div class="why_choose_home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="inner_why_img">
                    <img src="images/why_img.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="inner_why_text">
                    <!-- <h3>Why Choose Us</h3> -->
                    <div class="inner_section">
                        <!-- <i class="fa fa-users" aria-hidden="true"></i> -->
                        <h3>Top Class Staff</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nulla voluptate error natus ipsa quidem quibusdam inventore? Omnis, neque aliquam.</p>
                    </div>
                    <div class="inner_section">
                        <!-- <i class="fa fa-credit-card" aria-hidden="true"></i> -->
                        <h3>Easy Payment</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nulla voluptate error natus ipsa quidem quibusdam inventore? Omnis, neque aliquam.</p>
                    </div>
                    <div class="inner_section">
                        <!-- <i class="fa fa-level-up" aria-hidden="true"></i> -->
                        <h3>facilities</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nulla voluptate error natus ipsa quidem quibusdam inventore? Omnis, neque aliquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- why choose us code end here -->






<!-- blog section start -->

<div class="blog_section_home">
    <div class="container">
        <div class="blog_header">
            <h3>Blog Section</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="blog_Section_in">
            <div class="row">
                <?php
                    $blog_sql = "SELECT * FROM blog ORDER BY Id DESC LIMIT 3";
                    $blog_result = mysqli_query($conn, $blog_sql);
                    while($blog_row = mysqli_fetch_array($blog_result)){
                ?>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="in_blog_div">
                        <img src="<?php  echo 'dashboard/' . $blog_row['Blog_Image']; ?>" alt="">
                        <div class="blog_text">
                            <p class="date"> <?php echo $blog_row['Blog_Date']; ?> </p>
                            <h4><?php echo $blog_row['Blog_Heading']; ?></h4>
                            <p class="blog_short_discription"> <?php echo $blog_row['Blog_Text']; ?></p>
                            <a href="view-blog.php?id=<?php echo $blog_row['Id'];  ?>">READ MORE</a>
                        </div>
                    </div>
                </div>

                <?php } ?>


            </div>
        </div>
        <div class="d-flex justify-content-center"><a href="blogs.php" class="viewmoreblogbtn">VIEW MORE BLOGS</a></div>
    </div>
</div>

<!-- blog section end -->

<?php
    include("footer.php");
?>