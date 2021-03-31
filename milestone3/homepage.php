<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PixelBase</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/views/milestone3/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/views/milestone3/css/easy-autocomplete.min.css">
    <script src="<?php echo base_url();?>/application/views/milestone3/js/jquery-3.3.1.min.js"></script>


    <script src="<?php echo base_url();?>/application/views/milestone3/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>/application/views/milestone3/js/waterfall.js"></script>
    <!--    <script src="js/infinite-scroll.pkgd.min.js"></script>-->


    <script src="<?php echo base_url();?>/application/views/milestone3/js/jquery.easy-autocomplete.min.js"></script>
    <script src="<?php echo base_url();?>/application/views/milestone3/js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/application/views/milestone3/images/logo.png">
</head>
<body>


<div class="background">
    <div class="nav">
        <ul>
            <img id="logo" src="<?php echo base_url();?>/application/views/milestone3/images/logo.png">
            <img id="wordLogo" src="<?php echo base_url();?>/application/views/milestone3/images/wordLogo2.png">
        </ul>
        <ul>
            <div class="buttons">
                <a href="#"><button class="buttonUpload">Upload Photos</button></a>
                <!--some of code about popup form below is from w3school-->
                <?php if (isset($_SESSION["email"])):?>

                    <div class="dropDown">
                        <a class="usernameBtn">
                            <?php if (isset($_SESSION["email"])){
                                echo $_SESSION['username'];
                            }?>
                        </a>
                        <div class="dropDownContent">
                            <a href="<?php echo base_url();?>/application/views/milestone3/profile.php">Profile</a>
                            <a href="project_index.php?logout">Log out</a>
                        </div>

                    </div>
                    <!-- <a style="width:auto;" class="buttonLogin" href="project_index.php?logout">Log out</a>-->
                <?php else: ?>
                    <a onclick="document.getElementById('login').style.display='block'" style="width:auto;" class="buttonLogin" >Login</a>
                <?php endif; ?>
                <div id="login" class="modal" >


                    <form class="modal-content" action="project_index.php" method="POST">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <p>Login to PixelBase</p>
                        </div>
                        <div class="container_1">

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Email" name="email"
                                   value="<?php if (isset($_COOKIE["email"])): echo $_COOKIE["email"]; endif ?>" required>


                            <label for="password"><b>Password</b></label>
                            <input type="password" placeholder="Password" name="password" required>


                            <label for="remember"> Remember my email </label>
                            <input type="checkbox" checked="checked" name="remember" <?php if (isset($_COOKIE["email"])): echo "checked"; endif ?> >

                            <button type="submit" class="loginFormButton">Login</button>
                        </div>
                    </form>


                </div>

                <a onclick="document.getElementById('signUp').style.display='block'" style="width:auto;" class="buttonRegister">Register</a>

                <div id="signUp" class="modal">
                    <form class="modal-content" name="form_2" onsubmit="return checkPass()" method="POST" action="project_index.php">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('signUp').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <p>Sign up to PixelBase</p>
                        </div>
                        <div class="container">
                            <label for="username"><b>Username</b></label>
                            <input type="text" placeholder="Username" name="username" required>
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Email" name="email" required>
                            <label for="password"><b>Password</b></label>
                            <input type="password" placeholder="9-21 characters of alphanumeric password" name="password_1">
                            <label for="password"><b>Confirm Password</b></label>
                            <input type="password" placeholder="Password" name="password_2" required>
                            <button type="submit" class="loginFormButton" name="reg_user">Register</button>
                        </div>
                    </form>
                </div>
            </div>

        </ul>
    </div>

    <div id="search">

        <h1>PixelBase</h1>
        <!--<p>Beautiful and free photos</p>-->


        <div id="searchBar">
            <input type="text" id="searchItem" placeholder="Search photos">
            <a href="#"><img id="searchIcon" src="<?php echo base_url();?>/application/views/milestone3/images/searchIcon.png"></a>
        </div>
    </div>
</div>
<main>
    <?php if (isset($_SESSION["email"])): ?>

        <div id="waterfall">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test01.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test11.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test13.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test04.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test05.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test06.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test07.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test08.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test09.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test02.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test03.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test10.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test12.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test14.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test15.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test16.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test17.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test18.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test19.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/test20.jpeg" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/1.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/2.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/3.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/4.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/5.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/6.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/7.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/8.png" class="waterfall-box">
            <img src="<?php echo base_url();?>/application/views/milestone3/images/9.png" class="waterfall-box">


        </div>
    <?php else: ?>
        <p id="reminder">Please login first!</p>


    <?php endif ?>
</main>


</body>
</html>