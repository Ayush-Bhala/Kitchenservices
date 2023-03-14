<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
include 'includes/header.php';
?>

</head>

<body>

  <!--==========================
  Header
  ============================-->

  <header id="header">
    <div class="container-fluid">

    <div id="logo" class="head-btn">
          <a href="tel:18001200489"><button class="enquirynow"><i class="fa fa-phone" aria-hidden="true"></i>18001200489</button></a>
          <a href="https://api.whatsapp.com/send?phone=+917303525546"><button class="enquirynow" title="Whatsapp Now"><i class="fa fa-whatsapp"></i>7303 52 5546</button></a>
        <h1><a href="#intro" class="scrollto"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="#call">Call Us</a></li>
          <li class="menu-has-children"><a href="#our-services">Services</a>
            <ul>
              <li><a href="Hob-Service.php" title="Hob Service &amp; Repair">Hob Service &amp; Repair</a></li>
              <li><a href="chimney-service.php" title="Chimney Service &amp; Repair">Chimney Service &amp; Repair</a></li>
              <li><a href="gasstove-service.php" title="Gas Stove Service &amp; Repair">Gas Stove Service &amp; Repair</a></li>
              <li><a href="Microwave-service.php" title="Microwave Service &amp; Repair">Microwave/Oven Service &amp; Repair</a></li>
              </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
          <li class="hide"><a href="tel:18001200489"><button class="enquirynow"><i class="fa fa-phone" aria-hidden="true"></i>18001200489</button></a></li>
          <li class="hide"><a href="https://api.whatsapp.com/send?phone=+917303525546"><button class="enquirynow" title="Whatsapp Now"><i class="fa fa-whatsapp"></i>7303 52 5546</button></a></li>
          <li class="hide"><a><button class="enquirynow" onclick="return enquirynow();">Enquiry Now</button></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <?php 
  include 'includes/banner.php';
  ?><!-- #intro -->
  
  <main id="main">


    <section id="call" class="top_pad">
      <div class="container">

        <header class="section-header">
            <h3 class="hobs">
                <span class="banner_text">For Microwave / Oven Service & Repair  <br>Call<a href="tel:18001200489"> <i class="fa fa-phone" style="padding-right:5px;"></i>18001200489</a> </span>
                </h3>
        </header><hr>
      </div>
    </section>

    <section id="about" class="top_pad">
      <div class="container">

        <header class="section-header">
          <h3>Microwave / Oven Service & Repair </h3>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2 hobsservice">
              <p>Microwaves and ovens is a baking and cooking buddy in a modern kitchen. It is highly a time saving machine. What we generally forget is that often break down as it is regularly dealing with electricity which fluctuates. We specialize and deal in microwaves and OTG repairs, component parts, cleaning and electricity stabilizing. We provide a demo service for your new OTG/ Microwave, if required. Kitchenservice4u charges minimal for microwave of any brand. We have trained service staff which gives you an opportunity of saving your precious time and getting service and repairs requested at your doorstep. We specialize in microwave services and repairs and are associated with dealers of parts of microwave/OTG. We use latest service tools and techniques so that our customers trust us even more with passing time. We Give Service And Repair All Brands Like Kaff, Faber, GLEN, Elica etc. We provide 24*7 service and repairs for your equipment's breakout in the midst of the night. Call us and book a service/ repairs request with us!
              </p>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/kitchen/microwave.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>
    
    <?php 
    include 'includes/service.php';
    ?>

    <?php 
    include 'includes/contact.php';
    ?>

  </main>
  <div id="boxes">
    <div id="dialog" class="window">
      <p onclick="return closed();"><i class="fa fa-times" style="color: #FFF;float: right;margin-right: -6px;" aria-hidden="true"></i></p>
        <div id="popupfoot">   
        <h2 class="offer">SERVICES & REPAIRS AT YOUR DOORSTEP</h2>
        <h5 class="enquiry1"><a class="enquiry1" href="tel:18001200489" title="Call Now">CALL NOW @ 18001200489</a></h5>     
        <div class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <!-- <div id="errormessage"></div> -->
        <form  onsubmit="return false;" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="number" id="number" placeholder="Your Phone Number" required  />
            </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>
          </div>
          <div class="text-center"><button type="submit" onclick="return closed();" title="Send Message">Send Message</button></div>
        </form>
      </div>
     </div>
    <div class="phonepopup">
      <h2>To Know Best Offer</h2>
      <p>For Chimney <span> : <a class="enquiry1" href="tel:18001200489" title="Call Now">18001200489</a></span></p>
      <p>For Hob <span> : <a class="enquiry1" href="tel:18001200489" title="Call Now">18001200489</a></span></p>
      <p>For Stove <span> : <a class="enquiry1" href="tel:18001200489" title="Call Now">18001200489</a></span></p>
    </div>
    </div>

    <div id="mask"></div>

  </div>
  <!--==========================
    Footer
  ============================-->
  <?php 
  include 'includes/footer.php';
  ?>
<script>
    // popup
  $(document).ready(function() {	
var id = '#dialog';
$('#mask').hide();
$('.window').hide();
//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
    
});

$(window).on( "load", function() {
    var top_space = 40;
    $('html, body').animate({
        scrollTop: $("#about").offset().top-top_space
    }, 2000);
});
    </script>
</body>
</html>
