<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PixelBase</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/milestone3/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/milestone3/css/easy-autocomplete.min.css">
    <script src="<?php echo base_url();?>application/views/milestone3/js/jquery-3.3.1.min.js"></script>


    <script src="<?php echo base_url();?>application/views/milestone3/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>application/views/milestone3/js/waterfall.js"></script>
<!--    <script src="js/infinite-scroll.pkgd.min.js"></script>-->


    <script src="<?php echo base_url();?>application/views/milestone3/js/jquery.easy-autocomplete.min.js"></script>
    <script src="<?php echo base_url();?>application/views/milestone3/js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>application/views/milestone3/images/logo.png">
</head>
<body>


    <div class="background">
    <div class="nav">
        <ul>
            <img id="logo" src="<?php echo base_url();?>application/views/milestone3/images/logo.png">
            <a href="<?php echo base_url();?>"><img id="wordLogo" src="<?php echo base_url();?>application/views/milestone3/images/wordLogo2.png"></a>
        </ul>
        <ul>
            <div class="buttons">

                <a href="<?php echo base_url();?>Welcome" <button class="buttonUpload">Upload Photos</button></a>
                <!--some of code about popup form below is from w3school-->
                <?php if (isset($_SESSION['email'])):?>
<!--                --><?php //if ($this->session->has_userdata('email')):?>



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
<!--                        <a href="project_index.php?logout">Log out</a>-->
                        <a href="<?php echo base_url();?>Home/logout">Log out</a>
                    </div>

                </div>
               <!-- <a style="width:auto;" class="buttonLogin" href="project_index.php?logout">Log out</a>-->
             <?php else:?>
                <a href="<?php echo base_url();?>Home/login">Login</a>
                <?php endif; ?>

<!--                <a href="--><?php //echo base_url();?><!--Home/login">Login</a>-->
                <a href="<?php echo base_url();?>Home/registration">Register</a>


            </div>

        </ul>
    </div>

    <div id="search">

        <h1>PixelBase</h1>
        <!--<p>Beautiful and free photos</p>-->


        <div id="searchBar">
            <form action="<?php echo base_url();?>Home/search_c" method="post">
            <input type="text" id="searchItem" name="search_word" placeholder="Search photos">
<!--                <a href="--><?php //echo base_url();?><!--Home/search_c"><img id="searchIcon" src="--><?php //echo base_url();?><!--application/views/milestone3/images/searchIcon.png"></a>-->
                <input type="submit" name="submit" value="search">
           <!-- <a href="#"><img id="searchIcon" src="<?php echo base_url();?>application/views/milestone3/images/searchIcon.png"></a>-->
            </form>
        </div>
    </div>
</div>
    <main>
        <?php if (isset($_SESSION["email"])): ?>
<!--            --><?php
//            include('helper.php');
//            $photoGallery = new PhotoGallery();
//            $page = isset($_GET['page']) ? $_GET['page']:1;
//            ?>
<!--            <div class="photo-gallery">-->
<!--                <div id="galleryContainer">-->
<!--                    <div class="grid-sizer"></div>-->
<!--                    --><?php //echo $photoGallery->list1($page); ?>
<!--                    <div class="grid-item--width2"></div>-->
<!--                </div> /galleryContainer -->
<!--                <div class="page-load-status">-->
<!--                    <p class="infinite-scroll-request">gif need to add</p>-->
<!--                    <p class="infinite-scroll-last">End of content</p>-->
<!--                    <p class="infinite-scroll-error">No more images to load</p>-->
<!--                </div>-->
<!--                <div class="pagination">-->
<!--                    --><?php //echo $photoGallery->next($page); ?>
<!--                </div>-->
<!--            </div>-->
   <!-- <div class="grid">
    <div class="gridSizer"></div>
    <div class="gridItem"><img src="images/test01.jpeg"></div>
    <div class="gridItem"><img src="images/test11.jpeg"></div>
    <div class="gridItem"><img src="images/test13.jpeg"></div>
    <div class="gridItem"><img src="images/test04.jpeg"></div>
    <div class="gridItem"><img src="images/test05.jpeg"></div>
    <div class="gridItem"><img src="images/test06.jpeg"></div>
    <div class="gridItem"><img src="images/test07.jpeg"></div>
    <div class="gridItem"><img src="images/test08.jpeg"></div>
    <div class="gridItem"><img src="images/test03.jpeg"></div>
    <div class="gridItem"><img src="images/test10.jpeg"></div>
    <div class="gridItem"><img src="images/test02.jpeg"></div>
    <div class="gridItem"><img src="images/test09.jpeg"></div>
</div>-->

            <div id="waterfall">
                <?php
                $sql="SELECT image_url FROM image_upload";
                $query = $this->db->query($sql);
                //print_r($query);
                $result = $query->result_array();
               // print_r($result);
                foreach ($result as $k)
                {?>

                    <img src="<?php echo base_url().$k['image_url'];?>" alt="" class="waterfall-box">


                <?php }

                ?>





                <img src="<?php echo base_url();?>application/views/milestone3/images/test01.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test11.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test13.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test04.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test05.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test06.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test07.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test08.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test09.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test02.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test03.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test10.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test12.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test14.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test15.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test16.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test17.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test18.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test19.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/test20.jpeg" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/1.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/2.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/3.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/4.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/5.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/6.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/7.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/8.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/9.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/10.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/11.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/12.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/13.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/14.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/15.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/16.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/17.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/18.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/19.png" class="waterfall-box">
                <img src="<?php echo base_url();?>application/views/milestone3/images/20.png" class="waterfall-box">

            </div>
        <?php else: ?>
        <p id="reminder">Please login first!</p>

          <!--  <button type="button" onclick="loadDoc()">Click me!</button>
            <p id="demo"></p>-->


        <?php endif ?>
</main>


</body>
</html>