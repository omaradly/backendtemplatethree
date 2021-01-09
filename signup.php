<?php  session_start(); 
       if(isset($_SESSION['user_name'])){
           header('location: home.php');
       }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="features">
        <meta name="keywords" content="html,css">
        <meta name="viewport" content="width=device-width,initial-Scale=1.0">
        <title>Leverage</title>
        <!--    bootstrap    -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon"  href="images/Facebook_icon_2013.svg.png">
        <!--   end import     -->
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="bootstrap-navbar-multi-level-dropdowns/css/bootnavbar.css">

    </head>
    <body>
    <h1 class="container text-center mt-5 ">____________________________ Sign up _____________________________</h1>
    <form class="form container mt-5 pt-5" action="signupcheck.php" method="POST">
        <?php
            if(isset($_SESSION['user_name_error'])){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['user_name_error']; 
                        unset($_SESSION['user_name_error']);
                    ?>
                </div>
            <?php } ?>
            <?php
            if(isset($_SESSION['password_error'])){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['password_error']; 
                        unset($_SESSION['password_error']);
                    ?>
                </div>
            <?php } ?>
        <div class="form-group">
            <label for="exampleInputEmail1 " class="firstcole">Email address</label>
            <input type="text " class="form-control firstbackgroundcolor" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group ">
            <label for="exampleInputPassword1  " class="firstcole">Password</label>
            <input type="password " class="form-control firstbackgroundcolor" id="exampleInputPassword1" name="password">
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
        <a href="signin.php" class=" btn btn-primary   d-inline-block">Sign in</a>
    </form>
        <!-- ================================ end smallFooter =========================== -->
        <!--  ===============================  bootstrap  =======================  -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> 
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!--   end import     -->
        <!-- Compressed JavaScript -->
        <script src="bootstrap-navbar-multi-level-dropdowns/js/bootnavbar.js"></script>
        <script type="text/javascript" src="js/loading-bar.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>