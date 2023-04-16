<?php
    include("header.php");
?>

<div class="overlaygradiant_div">
<div class="about_braudcumb_section">
    <div class="container">
        <h4>Daily Blogs</h4>
        <h2>OUR BLOG SECTION</h2>
    </div>
</div>
</div>
<div class="menu_list_section">
    <div class="container">
        <ul>
            <li>
                Gomati Devi Vidya Mandir School
            </li>
            <li>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </li>
            <li>
                Blog's
            </li>
        </ul>
    </div>
</div>


<div class="blog_page_section">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-12">

                <?php 
                    include("config.php");
                    
                    $limit = 4;

                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else{
                        $page = 1;
                    }

                    $offset = ($page - 1) * $limit;

                    $blog_sql = "SELECT * FROM blog ORDER BY Id DESC LIMIT {$offset}, {$limit}";
                    $blog_result = mysqli_query($conn, $blog_sql);
                    while($blog_row = mysqli_fetch_array($blog_result)){
                ?>
                
                <div class="blog_div_section mt-5">
                    <img src="<?php  echo 'dashboard/' . $blog_row['Blog_Image']; ?>" alt="">
                    <div class="blog_short_info">
                        <h3> <?php echo $blog_row['Blog_Date'] . ' ' . '/' . ' ' . $blog_row['Blog_Publisher']; ?> </h3>
                        <h4 class="date"> <?php echo $blog_row['Blog_Heading']; ?> </h4>
                        <p> <?php echo $blog_row['Blog_Text']; ?> </p>
                        <a href="view-blog.php?id=<?php echo $blog_row['Id'];  ?>">Read More</a>
                    </div>
                </div>
                <?php } ?>

                <?php
                    $sql1 = "SELECT * FROM blog";
                    $result1 = mysqli_query($conn, $sql1);
                    
                    if(mysqli_num_rows($result1)>0){
                        $total_records = mysqli_num_rows($result1);
                        
                        $total_page = ceil($total_records/$limit);
                        echo '<ul class="pagination admin-pagination">';
                        if($page > 1){
                            echo '<li><a href="blogs.php?page='.($page - 1).'">Prew</a></li>';
                        }
                        for($i = 1; $i <= $total_page; $i++){
                            if($i == $page){
                                $active = "active";
                            }else{
                                $active = "";
                            }
                            echo '<li class="'.$active.'"><a href="blogs.php?page='.$i.'">'.$i.'</a></li>';
                        }
                        if($total_page>$page){
                            echo '<li><a href="blogs.php?page='.($page + 1).'">Next</a></li>';
                        }
                        
                        echo '</ul>';
                    }

                ?>

                       
                

            </div>


            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="widgets_section">
                    <div class="widget_div mt-5">
                        <h3>Text Widget</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, eligendi ut? Adipisci accusantium sapiente labore sequi suscipit inventore ullam aliquid?</p>
                    </div>
                        <br>
                        <br>
                        <div class="widget_div">
                        <h3>Daily News</h3>
                        <ul>
                            <?php
                                $new_sql = "SELECT * FROM dailynews ORDER BY Id DESC LIMIT 4";
                                $new_query = mysqli_query($conn, $new_sql);
                                while($new_res = mysqli_fetch_array($new_query)){
                            ?>
                            <li><?php echo $new_res['Topic']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <br>
                        <br>
                    <div class="widget_div">
                        <h3>Latest Images</h3>
                        <div class="row">
                            <?php 
                                $img_sql = "SELECT * FROM gallery ORDER BY Id DESC LIMIT 6";
                                $img_query = $conn->query($img_sql);
                                while($img_res = mysqli_fetch_array($img_query)){
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <img src="<?php echo 'dashboard/' . $img_res['Picture']; ?>" alt="" class="img-thumbnail">
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php
    include("footer.php");
?>