<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $user = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
      $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
      $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
       $formErrors = array();
       if(strlen($user) < 3) {
         $formErrors[] = 'Username Must Be Larger Than <strong>3</strong> Charcters';
       }
       if(strlen($phone) <= 10) {
         $formErrors[] = 'Your Number Must Be Large Than <strong>10</strong> Number';
       }
       if(strlen($msg) < 10) {
         $formErrors[] = 'Your Message Must Be Large Than <strong>10</strong> Charcters';
       }
       $myEmail = 'support@freegamelist.com';
       $headers = 'From: ' . $mail .'\r\n';
       $subject = 'Contact Form';
       if (empty($formErrors)) {
         mail($myEmail, $subject, $msg, $headers);
         $user = '';
         $mail = '';
         $phone = '';
         $msg = '';
         $success = '<div class="alert alert-success text-center">We will reply within 24 hours!</div>';
       }
    }
?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/fgllogo-1-200x200.png" type="image/x-icon">
  <meta name="description" content="domains disc">
  <title>Domains</title>
  <link rel="stylesheet" href="assets/mobirise/css/mycss.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,900;1,700&display=swap" >
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
  <section class="menu menu2 cid-sdGVG7lVtD" once="menu" id="menu2-7o">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/fgllogo-1-200x200.png" alt="Free Game List - Play Learn Create and Make Friends" style="height: 8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary text-primary display-4" href="index.html">Free Game List</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mobi-mbri mobi-mbri-rocket mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 188, 74);"></span>Play Games</a><div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4" href="index.html"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Free Game List</a><a class="text-black text-primary dropdown-item display-4" href="hostinggames.html"><span class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn"></span>Hosting Your Game</a><div class="dropdown"><a class="text-black text-primary dropdown-item dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Play Free Games</a><div class="dropdown-menu dropdown-submenu"><a class="text-black text-primary dropdown-item display-4" href="savingtazland.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Saving Tazland</a><a class="text-black text-primary dropdown-item display-4" href="blocky.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Blocky</a><a class="text-black text-primary dropdown-item display-4" href="boxshooter.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Box Shooter</a><a class="text-black text-primary dropdown-item display-4" href="penguinmoonwalkin.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Penguin Moonwalkin</a><a class="text-black text-primary dropdown-item display-4" href="breakblock.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Brick Break Alpha</a><a class="text-black text-primary dropdown-item display-4" href="blappyfird.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Blappy Fird</a><a class="text-black text-primary dropdown-item display-4" href="zombieforest.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Zombie Forest</a><a class="text-black text-primary dropdown-item display-4" href="blackjack.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Unity Blackjack</a><a class="text-black text-primary dropdown-item display-4" href="houserescue.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>House Rescue</a><a class="text-black text-primary dropdown-item display-4" href="simplefps.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Simple FPS</a><a class="text-black text-primary dropdown-item display-4" href="pokemonunity.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Pokemon Unity</a><a class="text-black text-primary dropdown-item display-4" href="nightmares.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Nightmares</a><a class="text-black text-primary dropdown-item display-4" href="luckyducky.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Lucky Ducky</a><a class="text-black text-primary dropdown-item display-4" href="quadbattle.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Quad Battle</a><a class="text-black text-primary dropdown-item display-4" href="brickbreaker.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Brick-Breaker</a><a class="text-black text-primary dropdown-item display-4" href="infinitysquarespace.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Infinity Square Space</a><a class="text-black text-primary dropdown-item display-4" href="buildingblocks.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Building Blocks</a><a class="text-black text-primary dropdown-item display-4" href="headofstate.html"><span class="mobi-mbri mobi-mbri-play mbr-iconfont mbr-iconfont-btn"></span>Head of State</a></div></div></div></li><li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mobi-mbri mobi-mbri-delivery mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 188, 74);"></span>Our Services</a><div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4" href="starthere.html" aria-expanded="false"><span class="mobi-mbri mobi-mbri-cursor-click mbr-iconfont mbr-iconfont-btn"></span>Start Here, Or..</a><a class="text-black text-primary dropdown-item display-4" href="allproducts.html" aria-expanded="false"><span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Shop Our Products</a><a class="text-black text-primary dropdown-item display-4" href="domains.html" aria-expanded="false"><span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>Need a Domain?</a><div class="dropdown"><a class="text-black text-primary dropdown-item dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Need a Website?</a><div class="dropdown-menu dropdown-submenu"><a class="text-black text-primary dropdown-item display-4" href="websites.html#image1-7r" aria-expanded="false"><span class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn"></span>Website Hosting</a><a class="text-black text-primary dropdown-item display-4" href="websites.html#image2-7t" aria-expanded="false"><span class="mobi-mbri mobi-mbri-change-style mbr-iconfont mbr-iconfont-btn"></span>Web Development</a></div></div><div class="dropdown"><a class="text-black text-primary dropdown-item dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Need a PC?</a><div class="dropdown-menu dropdown-submenu"><a class="text-black text-primary dropdown-item display-4" href="pc.html#image1-6v" aria-expanded="false"><span class="mobi-mbri mobi-mbri-desktop mbr-iconfont mbr-iconfont-btn"></span>PCs for Business</a><a class="text-black text-primary dropdown-item display-4" href="pc.html#pricing2-6r" aria-expanded="false"><span class="mobi-mbri mobi-mbri-sale mbr-iconfont mbr-iconfont-btn"></span>Budget PCs</a><a class="text-black text-primary dropdown-item display-4" href="pc.html#pricing2-6r" aria-expanded="false"><span class="mobi-mbri mobi-mbri-laptop mbr-iconfont mbr-iconfont-btn"></span>High-Performance</a><a class="text-black text-primary dropdown-item display-4" href="allproducts.html" aria-expanded="false"><span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Shop All Products</a></div></div><a class="text-black text-primary dropdown-item display-4" href="resources.html" aria-expanded="false"><span class="mobi-mbri mobi-mbri-download-2 mbr-iconfont mbr-iconfont-btn"></span>Our Free Resources</a><a class="text-black text-primary dropdown-item display-4" href="contact.php" aria-expanded="false"><span class="mobi-mbri mobi-mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Contact Us Today!</a></div></li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="allproducts.html">Shop Our Products</a></div>
            </div>
        </div>
    </nav>
</section>

<section class="content5 cid-sdHR6E8Eis" id="content5-8x">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Get Your Domain Today!</strong></h3>
                <div class="container">
        
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
            <div class="container">
    <h2 class="text-center"> Contact Me </h2>

     <?php if (! empty($formErrors)) {?>
       <!-- Start Div Errors -->
       <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
       <!--code to print error if it found-->
         <?php
           foreach ($formErrors as $errors) {
             echo $errors . '<br>';
           }
           ?>
           </div>
        <!-- End Div Errors -->
         <?php } ?>
         <?php if (isset($success)){ echo $success;} ?>

    <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group">
          <i class="fas fa-user fas-fw font-aw"></i>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Type Your Name" name="name" value="<?php if(isset($user)){echo $user;}?>">
          <span class="asterisx">*</span>
          <div class="alert alert-danger private-alert">
            Username Must Be Larger Than <strong>3</strong> Charcters
          </div>
          </div>
            <!--<?php
                // Valdite Username
                if (isset($userErrors)){
                  echo $userErrors;
                }
            ?>-->

        <div class="form-group">
          <i class="fas fa-envelope fas-fw font-aw"></i>
          <input type="email" class=" email form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Your E-mail" name="email" value="<?php if(isset($mail)){echo $mail;}?>">
          <span class="asterisx">*</span>
          <div class="alert alert-danger private-alert">
            E-Mail Can not Be <strong>Empty</strong>
          </div>
        </div>

        <div class="form-group">
          <i class="fas fa-phone-alt fas-fw font-aw"></i>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Type Your phone" name="phone" value="<?php if(isset($phone)){echo $phone;}?>">
          <div class="alert alert-danger private-alert">
            This Feild Must Be Larger Than <strong>10</strong> Numbers
          </div>
        </div>
          <!--<?php
              // Valdite PhoneNumber
              if (isset($phoneErrors)){
                echo $phoneErrors;
              }
          ?>-->
        <div class="form-group">
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type Your Message" name="message"> <?php if(isset($msg)){ echo $msg; }?></textarea>
         <div class="alert alert-danger private-alert">
           Username Must Be Larger Than <strong>10</strong> Charcters
         </div>
      </div>
        <!--<?php
            // Valdite Message
            if (isset($msgErrors)){
              echo $msgErrors;
            }
        ?>-->
        <i class="fas fa-paper-plane fas-fw send-icon"></i>
        <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
      </form>
  </div>
                <p class="mbr-text mbr-fonts-style display-7">It is confusing trying to navigate all registrars to get the best deal or even to get a domain close to what you had in mind sometimes.  If you have a name in mind and need some help getting your website online, we can help!<br></p>
            </div>
        </div>
    </div>
</section>

<section class="content11 cid-sdHRSdvmm4" id="content11-8y">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="">Submit***putbuttonabove</a>
                    <a class="btn btn-primary-outline display-4" href="">Contact Us!</a></div>
            </div>
        </div>
    </div>
</section>

<section class="content15 cid-sdJDdUyEu9" id="content15-98">

    

    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mbr-white mb-3 display-5">
                            <strong>Play Free Games In Your Browser!</strong><br><strong><br></strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7"><a href="penguinmoonwalkin.html" class="text-primary">Penguin Moonwalkin</a><br><a href="houserescue.html" class="text-primary">House Rescue</a><br><a href="blackjack.html" class="text-primary">Unity Blackjack</a><br><a href="breakblock.html" class="text-primary">Break Block Alpha</a><br><a href="blappyfird.html" class="text-primary">Blappy Fird</a><br><a href="zombieforest.html" class="text-primary">Zombie Forest</a><br><a href="blocky.html" class="text-primary">Blocky</a><br><a href="savingtazland.html" class="text-primary">Saving Tazland</a><br><a href="luckyducky.html" class="text-primary">Lucky Ducky</a><br><a href="nightmares.html" class="text-primary">Nightmares</a><br><a href="pokemonunity.html" class="text-primary">Pokemon Unity</a><br><a href="buildingblocks.html" class="text-primary">Building Blocks</a><br><a href="infinitysquarespace.html" class="text-primary">Infinity Square Space</a><br><a href="headofstate.html" class="text-primary">Head of State</a><br><a href="brickbreaker.html" class="text-primary">Brick-Breaker</a><br><a href="quadbattle.html" class="text-primary">Quad Battle</a><br><a href="boxshooter.html" class="text-primary">Box Shooter</a><br><a href="simplefps.html" class="text-primary">Simple FPS</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer4 cid-sdGVG98kA1" once="footers" id="footer4-7p">

    
    
    <div class="container">
        <div class="row mbr-white">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-8 col-12">
                    <a href="index.html">
                        <img src="assets/images/fgllogo-1-200x200.png" alt="FreeGameList.com - Play Free Games In Your Browser">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>About Us</strong></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">
                    Free Game List is a free collection of playable games in the browser, no downloads required!&nbsp; <em>Other paid services available,</em> <a href="contact.php" class="text-primary">contact us today</a>!</p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7"><strong><a href="mailto:support@freegamelist.com" class="text-primary">Support@FreeGameList.com</a></strong></h5>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Free Game List</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><a href="index.html" class="text-primary">Play Free Games</a></li>
                    <li class="mbr-text item-wrap"><a href="hostinggames.html" class="text-primary">Hosting Your Game</a></li>
                    <li class="mbr-text item-wrap"><a href="resources.html" class="text-primary">Our Free Resources</a></li><li class="mbr-text item-wrap"><a href="contact.php" class="text-primary">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>More with Us</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><a href="pc.html" class="text-primary">Need a PC?</a></li><li class="mbr-text item-wrap"><a href="websites.html" class="text-primary">Need a Website?</a><br><a href="allproducts.html" class="text-primary">Shop Our Products</a></li><li class="mbr-text item-wrap"><br></li>
                </ul>
            </div>
            <div class="col-12 mt-4">
                <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">
                    © Copyright 2021 - Design by FreeGameList.com</p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://freegamelist.com/allproducts.html" style="color:#aaa;">Need A Website? Development | Hosting | PCs - More Information?</a></p></section>
<script src="assets/web/assets/jquery/jquery.min.js"></script>  
<script src="assets/popper/popper.min.js"></script>  
<script src="assets/tether/tether.min.js"></script>  
<script src="assets/bootstrap/js/bootstrap.min.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/dropdown/js/nav-dropdown.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>  
<script src="assets/theme/js/script.js"></script>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/mobirise/js/plugin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>