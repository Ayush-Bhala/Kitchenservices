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
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
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

    <section id="about" class="top_pad">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-circle" style="font-size:12px"></i></div>
              <p class="description">Kitchenservice4u is a service oriented online platform which helps the households meet their services and repairs needs of essential equipment like hobs, chimneys, gas stoves, microwaves and many more.</p>
            </div>
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="icon"><i class="fa fa-circle" style="font-size:12px"></i></div>
                <p class="description">We offer professional and specialized servicing and repairs backed with a core team of professionals with experience in electronics industry. </p>
              </div>

              <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                <div class="icon"><i class="fa fa-circle" style="font-size:12px"></i></div>
                <p class="description">We have tie ups with various leading electronics manufacturers, dealers and retailers.</p>
              </div>

              <div class="icon-box wow fadeInUp" data-wow-delay="0.8s">
                <div class="icon"><i class="fa fa-circle" style="font-size:12px"></i></div>
                <p class="description">Are you struggling with your malfunctioning kitchen appliance? We offer best deals on one time repairs and EMC. Call us now!</p>
              </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/kitchen/21.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>

    <?php 
    include 'includes/service.php';
    ?>

    <section id="Why-Adept" class="top_pad">
      <div class="container">

        <header class="section-header why-ad">
          <h3>Why Adept Service Center</h3>
        </header>

        <div class="row about-container ">
          <div class="col-lg-4 content order-lg-1 order-1 wow fadeInUp box1">
            <div class="icon-box wow fadeInUp back back1" data-wow-delay="0.2s">
              <h2>24*7 Support</h2>
              <p>We have an 24 hour on-all assistance and repairs at doorstep. Drop us a mail or simply call us for placing a same day's service and repairs request.</p>
            </div>
          </div>
          <div class="col-lg-4 background order-lg-2 order-2 wow fadeInUp box1">
            <div class="icon-box wow fadeInUp back" data-wow-delay="0.2s">
              <h2>Quick Service</h2>
              <p>We take customer's on high priority and arrange a technician visit at their doorstep within 24 hours of placing a request. Call us for booking a visit at <strong class="phone-why"><a href="tel:18001200489">18001200489</a></strong>.</p>
            </div>
          </div>
          <div class="col-lg-4 background order-lg-3 order-3 wow fadeInUp box1">
            <div class="icon-box wow fadeInUp back" data-wow-delay="0.2s">
              <h2>Transparent Dealing</h2>
              <p>We make it a point to brief the customer about the approximate charges for their service and repairs request. The customer is informed well in advance of any deviation in calculated charge.</p>
            </div>
          </div>
        </div>
        <div class="row about-container">
          <div class="col-lg-4 order-lg-1 wow order-1 wow fadeInUp box1">
            <div class="icon-box wow fadeInUp back back1" data-wow-delay="0.2s">
              <h2>Minimal Charges</h2>
              <p>We charge minimal visit charges. Repairs and maintenance of kitchen equipment are subject to timely acquisition of spare parts and components for the kitchen equipment.</p>
            </div>
          </div>
          <div class="col-lg-4 background order-lg-2 order-2 wow fadeInUp box1">
            <div class="icon-box wow fadeInUp back" data-wow-delay="0.2s">
              <h2>Trained technicians</h2>
              <p>We are a team of more than 28 trained technicians who keep abreast with the latest technologies and repair techniques for microwaves, hobs, gas stoves and chimneys.</p>
            </div>
          </div>
          <div class="col-lg-4 background order-lg-3 order-3 wow fadeInUp box1">
            <div class="icon-box wow fadeInUp back" data-wow-delay="0.2s">
              <h2>Ensure Quality</h2>
              <p>Kitchenservice4u ensures that it delivers quality service, component parts, cleaning agents, payment terms and much more which helps us build a strong clientele.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12</span>
            <p>YEARS OF SERVICE RECORD</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20011</span>
            <p>HAPPY CLIENTS</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">28</span>
            <p>TEAM MEMBERS</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">201</span>
            <p>ACTIVE PROJECTS</p>
  				</div>

  			</div>


      </div>
    </section><!-- #facts -->

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
 $('#mask').hide();
$('.window').hide();    
$(window).on( "load", function() {
setTimeout(() => {
 $('#mask').show();
$('.window').show();
}, 4000);
});
});

    </script>
</body>
</html>
