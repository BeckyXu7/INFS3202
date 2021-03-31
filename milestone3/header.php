<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/milestone3/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/milestone3/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>application/views/milestone3/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>application/views/milestone3/js/script.js"></script>
</head>
<body>
<div class="nav">
    <ul>
        <img id="logo" src="<?php echo base_url();?>application/views/milestone3/images/logo.png">
        <a href="<?php echo base_url();?>"><img id="wordLogo" src="<?php echo base_url();?>application/views/milestone3/images/wordLogo2.png"></a>
    </ul>
    <ul>
        <div class="buttons">
            <a href="#"><button class="buttonUpload">Upload Photos</button></a>
            <!--some of code about popup form below is from w3school-->
            <!--                --><?php //if (isset($_SESSION["email"])):?>
            <?php if (isset($_SESSION['email'])):?>
            <div class="dropDown">
                <a class="usernameBtn">
                    <?php if (isset($_SESSION['email'])){
                        // echo $this->session->userdata('email');
//                            <?php if (isset($_SESSION['email'])){
                        echo $this->session->userdata('email');
                    }?>

                </a>
                <div class="dropDownContent">

                    <a href="<?php echo base_url();?>Home/profile">Profile</a>
                    <a href="?php echo base_url();?>Home/logout">Log out</a>
                </div>

            </div>
            <!-- <a style="width:auto;" class="buttonLogin" href="project_index.php?logout">Log out</a>-->
            <?php else: ?>
            <a href="<?php echo base_url();?>Home/login">Login</a>
            <?php endif; ?>


            <a href="<?php echo base_url();?>Home/registration">Register</a>



        </div>

    </ul>
</div>


