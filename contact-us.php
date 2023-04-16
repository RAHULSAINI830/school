<?php

    if(isset($_POST['submit'])){
        include('config.php');

        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        
        $sql = "INSERT INTO messages (msg_name, msg_email, msg_phone, msg_subject, msg_message) VALUES ('$name', '$email', '$phone', '$subject', '$msg')";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo "
                <script>
                    alert('Thanku For Contacting. We Will Contact You As Soon As Posible.');
                    window.location.href='index.php';
                </script>
            ";
        }
        else{
            header('location: contact-us.php');
        }

    }

    include("header.php");

?>

<div class="overlaygradiant_div">
<div class="about_braudcumb_section">
    <div class="container">
        <h4>Get In Touch</h4>
        <h2>Contact Us</h2>
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
                Contact Us
            </li>
        </ul>
    </div>
</div>



<div class="contact_div">
    <div class="container">
        <h5>Contact Us</h5>
        <h2>
            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
            <a href="">9215650004</a>
        </h2>
        
        <div class="form_div">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  mt-4">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                   <div class="col-lg-12 col-md-12-col-sm-12  mt-4">
                   <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control" required></textarea>
                    </div>
                   </div>
                </div>

                <button class="btn btn-block btn-warning" type="submit" name="submit">Send</button>

            </form>
        </div>
    </div>
</div>



<!-- contact code end -->



<?php
 include("footer.php");
?>