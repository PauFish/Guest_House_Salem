<?php
if(isset($_POST['avail'])){
  
$_SESSION['from'] = $_POST['from'];
$_SESSION['to']  = $_POST['to'];

  redirect(WEB_ROOT. "index.php?page=5");
}

?>

 
 <!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/jpg" href="../images/fh.png"/>
<title>SalemFish Hotel - Ras Al Hadd - Oman</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="SalemFish hotel in ras al hadd. cheap tours: turtles rooms dolphin fishing in Oman guesthouse booking airbnb">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/animate.css">
<link href="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/custom-navbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap.css">

 <link href="<?php echo WEB_ROOT; ?>styles/ekko-lightbox.css" rel="stylesheet">

 <link href="<?php echo WEB_ROOT; ?>styles/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo WEB_ROOT; ?>styles/datepicker.css" rel="stylesheet" media="screen">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DWSHDSE4GB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DWSHDSE4GB');
</script>
<!-- Lazy load-->
<script>
  if ("loading" in HTMLImageElement.prototype) {
    console.log("El navegador soporta `lazy-loading`...");
  } else {
    console.log("`lazy-loading` no soportado...");
  }
</script>
<?php
if (isset($_SESSION['dragonhouse_cart'])){
  if (count($_SESSION['dragonhouse_cart'])>0) {
    $cart =  count($_SESSION['dragonhouse_cart'])  ;
  } 
 
} 
if (isset($_SESSION['activity'])){
  if (is_array($_SESSION['activity']) && is_object($_SESSION['activity']) &&count($_SESSION['activity'])>0) {
    $activity = count($_SESSION['activity'])  ;
  } 
 
} 
 ?>
</head>
<body>
 <?php include $small_nav; ?>  
 <br/>
<div class="super_container">
  <header class="header">
    <div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
      
     
      <!-- Main Nav -->
      <nav class="main_nav">
        <ul class="d-flex flex-row align-items-center justify-content-start">
           <li><a href="<?php echo WEB_ROOT;?>index.php">Home</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">Rooms</a></li> 
          <li><a href="<?php echo WEB_ROOT;?>index.php#target_tours">Tours</a></li> 
          <li><a href="<?php echo WEB_ROOT;?>index.php#target_about">About us</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php#target_contact">Contact</a></li>
          <li><a href="https://www.youtube.com/channel/UCKliXy7uttJTizU8jwXuayw" target="_blank" alt="youtube" rel="noopener noreferrer"><img id="shop_iconyt" src="..\images\iconyou.webp" /></a></li>
          <li><a href="https://www.instagram.com/salemfish/" target="_blank" alt="instagram" rel="noopener noreferrer"><img id="shop_iconinst" src="..\images\instagram-square-brands.webp" /></a></li>
          <li><a href="https://www.facebook.com/salem.fish" target="_blank" alt="facebook" rel="noopener noreferrer"><img id="shop_iconfb" src="..\images\facebook-square-brands.webp" /></a></li>
        </ul>
      </nav>


    

      <!-- Header Right -->
      <div class="header_right d-flex flex-row align-items-center justify-content-start">
        
        <!-- Header Link 
        <div class="header_link"><a href="/index.php?p=rooms">Book Your Room Now</a></div>-->

        <!-- Hamburger Button -->
        <div class="hamburger"><img id="shop_iconfb" src="..\images\3bars-solid.webp" /></div>  

      </div>

      <!-- Search Panel -->
      <div class="search_panel">
        <div class="search_panel_content d-flex flex-row align-items-center justify-content-start">
          <img src="<?php echo WEB_ROOT;?>images/search.png" alt="">
          <form action="#" class="search_form">
            <input type="text" class="search_input" placeholder="Type your search here" required="required">
          </form>
          <div class="search_close ml-auto d-flex flex-column align-items-center justify-content-center"><div></div></div>
        </div>
      </div>
    </div>
      
  </header>



  <!-- Menu Overlay -->

  <div class="menu_overlay">
    <div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
      
      <!-- Hamburger Button -->
      
      <div class="hamburger"><img id="shop_iconfb" src="..\images\3bars-solid.webp" /></div>  

    </div>
  </div>

  <!-- Menu -->

  <div class="menu">
    <div class="menu_container d-flex flex-column align-items-center justify-content-center">

      <!-- Menu Navigation -->
      <nav class="menu_nav text-center">
        <ul>
        <li><a href="<?php echo WEB_ROOT;?>index.php">Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">Rooms</a></li> 
          <li><a href="<?php echo WEB_ROOT;?>index.php#target_tours">Tours</a></li> 
          <li><a href="<?php echo WEB_ROOT;?>index.php#target_about">About us</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php#target_contact">Contact</a></li>
          <li><a href="https://www.youtube.com/channel/UCKliXy7uttJTizU8jwXuayw" target="_blank" alt="youtube" rel="noopener noreferrer"><img id="shop_iconyt" src="..\images\iconyou.webp" /></a></li>
          <li><a href="https://www.instagram.com/salemfish/" target="_blank" rel="noopener noreferrer"> <div class="hamburger"><img id="shop_iconinst" src="..\images\instagram-square-brands.webp"/> </div>  </a></li>
          <li><a href="https://www.facebook.com/salem.fish" target="_blank" rel="noopener noreferrer"> <div class="hamburger"><img id="shop_iconfb" src="..\images\facebook-square-brands.webp"/> </div>  </a></li>
        </ul>
      </nav>
      <div class="button menu_button"><a href="/index.php?p=rooms">book now</a></div>

     

    </div>
  </div>


  <!-- Home -->

  <div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo WEB_ROOT;?>images/home.webp" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center ">
      <div class="home_title text-center"><img src="..\images\logosalemweb.webp" alt="salemfish ras al hadd oman hotel logo"></div>
    </div>
  </div>

  <!-- Booking -->

  <div class="booking">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="booking_container d-flex flex-row align-items-end justify-content-start"> 
            <form action="<?php echo WEB_ROOT;?>index.php?p=booking" method="POST" class="booking_form" autocomplete="off">
              <div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-center flex-wrap">
                <div class="booking_form_inputs ">
                  <div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_in " placeholder="Check in" name="arrival" required="required" value="<?php echo isset($_POST['arrival']) ? $_POST['arrival'] :date('m/d/Y');?>"></div>
                  <div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_out " placeholder="Check out" name="departure" required="required" value="<?php echo isset($_POST['departure']) ? $_POST['departure'] : date('m/d/Y');?>" ></div>
                  <button class="booking_form_button align-items-center" >book now</button>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="rooms">
  <div class="container">
    <?php 
     check_message();
     require_once $content;  
    ?> 
 
  </div>
</div>

 

 

 
  <footer class="footer">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="..\images/footer.webp"<?php echo WEB_ROOT;?> data-speed="0.8" alt="footer turtle picture"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer_logo text-center">
          </div>
          <div class="footer_content">
            <div class="row">
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
                  <div class="text-center">
                    <div>E-MAIL:</div>
                    <div>info@salemfish.com</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                  <div class="text-center">
                    <div>ADDRESS:</div>
                    <div>راس الحد,Main Road Al Hadd, Oman</div>
                    <div><a href="https://www.google.com/maps/place/Salem+Fish+Guesthouse/@22.5260912,59.789026,233m/data=!3m1!1e3!4m5!3m4!1s0x3e9a017d5b7b9bef:0xcb517b7eff5082b0!8m2!3d22.5259798!4d59.7886888?hl=en-DE" target="_blank">Google Maps Link</a></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                  <div class="text-center">
                    <div>YOU GOT LOST?</div>
                    <div>Do not worry GO to the <a href="https://www.google.com/maps/place/%D9%85%D8%AD%D8%B7%D8%A9+%D9%88%D9%82%D9%88%D8%AF+%D8%A7%D9%84%D9%85%D9%87%D8%A7%E2%80%AD/@22.5133393,59.7936873,235m/data=!3m1!1e3!4m12!1m6!3m5!1s0x3e9a017d5b7b9bef:0xcb517b7eff5082b0!2sSalem+Fish+Guesthouse!8m2!3d22.5259798!4d59.7886888!3m4!1s0x3e9a00f891aab209:0x723604112287e715!8m2!3d22.5140287!4d59.7939874?hl=en-DE" target="_blank">Gas station</a> <br> they will help you contacting me.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_bar text-center">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Harper></a></div>
        </div>
      </div>
    </div>
     </footer>
</div>

<script src="<?php echo WEB_ROOT;?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/easing/easing.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/progressbar/progressbar.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="<?php echo WEB_ROOT; ?>js/ekko-lightbox.js"></script> 
<script src="<?php echo WEB_ROOT;?>js/custom.js"></script>




<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
</body>
</html>
<!-- Modal photo -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action="<?php echo WEB_ROOT; ?>guest/update.php" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "image" name="image" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type=
                    "button">Close</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

         

 

  <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover() 
 





  //Validates Personal Info
        function personalInfo(){
        var a=document.forms["personal"]["name"].value;
        var b=document.forms["personal"]["last"].value;
        var c=document.forms["personal"]["city"].value;
        var d=document.forms["personal"]["address"].value;
        var e=document.forms["personal"]["dbirth"].value;  
        var f=document.forms["personal"]["zip"].value; 
        var g=document.forms["personal"]["phone"].value;
        var h=document.forms["personal"]["username"].value;
        var i=document.forms["personal"]["password"].value;


 
         if (document.personal.condition.checked == false)
        {
        alert ('pls. agree the term and condition of this hotel');
        return false;
        }
        if ((a=="Firstname" || a=="") || (b=="lastname" || b=="") || (c=="City" || c=="") || (d=="address" || d=="") || (e=="dateofbirth" || e=="") || (f=="Zip" || f=="") || (g=="Phone" || g=="")|| (h=="username" || h=="") || (j=="password" || j==""))
          {
          alert("all field are required!");
          return false;
          }

        }
</script>


<script type="text/javascript">
   
 $(document).ready(function(){

      $(".btnLoginModal").click(function(){

        var user_name = document.getElementById("U_USERNAME").value;
        var pass = document.getElementById("U_PASS").value;
      
      

       $.ajax({ 
          type:"POST",
          url: "checktoken.php",             
          dataType: "text",   //expect html to be returned  
          data:{username:user_name,password:pass},               
          success: function(data){ 
              $("#ErrorMessage").hide();
             $("#ErrorMessage").fadeIn("slow");                 
             $("#ErrorMessage").html(data);  
             // alert(data);
          } 

             
        });  
    });

    });


  
</script>
<!--/.container-->
<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script> 
    
    
    <a href="https://wa.me/34648499970?text=Reach%20us%20instantly" class="whatsapp" target="_blank">
  <img src="images\Whatsapp_37229.png" alt="Whatsapp chat" />
</a>



</body>
</html>