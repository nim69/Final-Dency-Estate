<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#282828"/>
<title>Dency Estate</title>
<meta name="author" content="DencyEstate">
<meta name="description" content="DencyEstate">
<meta name="keywords" content="realestate, flat, apartment, benefits, facility, consultation, home, house, studio, pool, animation, transportation">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Dency Estate">
<meta property="og:image" content="images/logo-dark.png">
<meta property="og:site_name" content="dencyestate">
<meta property="og:title" content="dencyestate">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.dency.estate">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@dencyestate">
<meta name="twitter:creator" content="@dencyestate">
<meta name="twitter:title" content="dencyestate">
<meta name="twitter:description" content="Dency Estate">
<meta name="twitter:image" content="http://www.dency.estate/images/logo-dark.png">

<!-- FAVICON FILES -->
<link href="images/logo-dark.png" rel="apple-touch-icon" sizes="144x144">
<link href="images/logo-dark.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/logo-dark.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/logo-dark.png" rel="apple-touch-icon">
<link href="images/logo-dark.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/odometer.min.css">
<link rel="stylesheet" href="css/swiper.min.css">


<!--<link rel="stylesheet" href="css/bootstrap.min.css">
 Latest compiled and minified JavaScript -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="css/style.css">

<!--Bootstrap 3 to 5 correctness-->
<style>
a{
text-decoration: auto;
}
.small, small {
    font-size: 80%;
}
.navbar .container .upper-side{
  padding: 10px 0!important;
}
.navbar .container .upper-side .logo img{
  height: 63px!important;
}
.navbar .container .menu ul li a{
  padding: 15px 0!important;
}

.slider .slider-container .inner-elements .container .social-media{
  left:initial!important;
  right: 15px!important;
      top: calc(44% + 50px)!important;
}
.contact{
  padding:0!important;
}







.slider .slider-container .swiper-slide:after
{
    background: -moz-linear-gradient( 161deg, #26282b 0%, #26282b 49%, #9f8054 100% );
    background: -webkit-linear-gradient( 161deg, #26282b 0%, #26282b 49%, #000000 100% );
    background: linear-gradient( 161deg, #000000 0%, #1a0710 49%, #000000 100% )!important;
	}








</style>




<meta name="google-site-verification" content="5W7aJS1rXYUDsAVvIguSvrN6587cjzcDXDTUaW69aZw"/>




</head>


  

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8D76T9S1HG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8D76T9S1HG');
</script>



  
  <?php
 
$servername = "localhost";
$username = "u813153865_riviera";
$password = "Riviera7";
$dbname = "u813153865_riviera";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 /*
$sqlquery = "INSERT INTO table VALUES
    ('John', 'Doe', 'john@example.com')"
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/



?>





<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $data = $_REQUEST['val1'];
 
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
?>
 



<body>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure><img src="images/preloader.gif" alt="Image"></figure>
    <p>
          <span
            class="text-rotater"
            data-text="DencyEstate | Loading | Loading"
            >Loading</span></p>
  </div>
  <!-- end inner --> 
</div>
<!-- end prelaoder -->
<div class="transition-overlay">
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<div class="side-navigation">
  <div class="menu">
    <ul>
      <li><a href="index.php">START</a></li>
      <li><a href="#">HOMPARK</a>
        <ul>
          <li><a href="zaga-construction.html">Zaga Construction</a></li>
          <li><a href="about-homepark.html">About Homepark</a></li>
          <li><a href="homepark-blocks.html">Homepark Blocks</a></li>
        </ul>
      </li>
      <li><a href="#">PAGES</a>
        <ul>
          <li><a href="sales-offices.html">Sales Offices</a></li>
          <li><a href="press-relases.html">Press Relases</a></li>
          <li><a href="photo-gallery.html">Photo Gallery</a></li>
          <li><a href="intro-video.html">Intro Video</a></li>
          <li><a href="certificates.html">Certificates</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="sales.html">Sales Team</a></li>
          <li><a href="404.html">404 Error</a></li>
        </ul>
      </li>
      <li><a href="#">APARTMENTS</a>
        <ul>
          <li><a href="apartment-one-room.html">1 Room 47m²</a></li>
          <li><a href="apartment-two-rooms.html">2 Rooms 65m²</a></li>
          <li><a href="apartment-three-rooms.html">3 Rooms 90m²</a></li>
        </ul>
      </li>
      <li><a href="facilities.html">FACILITIES</a></li>
      <li><a href="news.html">NEWS</a></li>
      <li><a href="contact.html">CONTACT</a></li>
    </ul>
  </div>
  <!-- end menu -->
  <div class="side-content">
    <figure> <img src="images/logo-light.png" alt="Image"> </figure>
     <!-- <p>By aiming to take the life quality to an upper level with the whole realized Projects, Homepark continues to be the address of luxury.</p>-->
    <ul class="gallery">
      <li><a href="images/gallery-thumb01.webp" data-fancybox><img src="images/gallery-thumb01.webp" alt="Image"></a></li>
      <li><a href="images/gallery-thumb02.webp" data-fancybox><img src="images/gallery-thumb02.webp" alt="Image"></a></li>
      <li><a href="images/gallery-thumb03.webp" data-fancybox><img src="images/gallery-thumb03.webp" alt="Image"></a></li>
    </ul>
    <address>
    Azizi Riviera Reve Riviera Community
Phase 4 - Nad Al Sheba 1 - Dubai - United Arab Emirates
    </address>
    <h6>+971507150017</h6>
    <p><a href="#">info@dency.estate</a></p>
    <ul class="social-media">
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
      <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
    <small>© 2023 Dency Estate | All Rights Reserved</small> </div>
  <!-- end side-content --> 
</div>
<!-- end side-navigation -->
<nav class="navbar">
  <div class="container">
    <div class="upper-side">
      <div class="logo"> <a href="index.php"><img src="images/logo-light.png" alt="Image"></a> </div>
      <!-- end logo -->
      <div class="phone-email"> <img src="images/icon-phone.png" alt="Image">
        <h4>+971507150017</h4>
        <small><a href="#">info@dency.estate </a></small> </div>
      <!-- end phone -->
      <div class="language d-none"> <a href="#">EN</a> <a href="#">UA</a> </div>
      <!-- end language -->
      <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
      <!-- end hamburger --> 
    </div>
    <!-- end upper-side -->
    <div class="menu d-none">
      <ul>
        <li><a href="index.php">START</a></li>
        <li><a href="#">HOMPARK</a>
          <ul>
            <li><a href="zaga-construction.html">Zaga Construction</a></li>
            <li><a href="about-homepark.html">About Homepark</a></li>
            <li><a href="homepark-blocks.html">Homepark Blocks</a></li>
          </ul>
        </li>
        <li><a href="#">PAGES</a>
          <ul>
            <li><a href="sales-offices.html">Sales Offices</a></li>
            <li><a href="press-relases.html">Press Relases</a></li>
            <li><a href="photo-gallery.html">Photo Gallery</a></li>
            <li><a href="intro-video.html">Intro Video</a></li>
            <li><a href="certificates.html">Certificates</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="sales.html">Sales Team</a></li>
            <li><a href="404.html">404 Error</a></li>
          </ul>
        </li>
        <li><a href="#">APARTMENTS</a>
          <ul>
            <li><a href="apartment-one-room.html">1 Room 47m²</a></li>
            <li><a href="apartment-two-rooms.html">2 Rooms 65m²</a></li>
            <li><a href="apartment-three-rooms.html">3 Rooms 90m²</a></li>
          </ul>
        </li>
        <li><a href="facilities.html">FACILITIES</a></li>
        <li><a href="news.html">NEWS</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
    </div>
    <!-- end menu --> 
  </div>
  <!-- end container --> 
</nav>
<!-- end navbar -->







  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!--
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>-->
 
      <div class="modal-body py-0 my-0">
  

      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
        <div class="col-lg-12 py-2 "id="myModal">
        	<div class="contact-form">	
			  
        
              <form method="post" class="default-form" id="footer-form" onsubmit="footerForm(); return false;" > 

			  <div class="form-group">
				 <span>Name</span>
				<input type="text" name="name" id="ffn" autocomplete="off" required>
			  </div>
			  <!-- end form-group -->
			  <div class="form-group"> 
				<span>E-Mail</span>
				<input type="text" name="email" id="ft" autocomplete="off" required>
			  </div>
			  <!-- end form-group -->
		  
			  <!-- end form-group -->
			  <div class="form-group"> 
				<span>Phone</span>
				<input type="text" name="phone" id="ft2" autocomplete="off" required>
			  </div>
			  <!-- end form-group -->
			  <div class="form-group"> 
				<span>Message</span>
				<textarea name="message" id="fm"  autocomplete="off" required></textarea>
			  </div>
			  <!-- end form-group -->
			  <div class="form-group text-center">
			       <p id="fstatus"></p>
				<button  type="submit" id="fmybtn" name="submit-form">
					Submit
			 </button>
			  </div>
			  <!-- end form-group -->
        </form>








        <!-- end form  
         <div class="form-group">
          <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
    
        <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>

        </div>
        <!-- end contact-form -->
		
		
		
        </div>
        </div>
      </div>
 
      <!--
      <div class="modal-footer">
      </div>-->

    </div>
  </div>
</div>
 









<header class="slider">
  <div class="slider-container">
    <div class="swiper-wrapper">
	
	
      <div class="swiper-slide" data-background="images/7594.webp" data-stellar-background-ratio="1.15">
        <div class="container text-center text-md-start">
          <h1>NEW LAUNCH</br>RIVIERA RÊVE</h1>
          <!--<h2>Get a taste of luxury now.</h2>-->
          <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">ENQUIRE NOW <i class="fas fa-caret-right"></i></a>
          <figure class="d-none"><img src="images/services-icon01.png" alt="Image"></figure>
        </div>
        <!-- end container --> 
      </div>
      <!-- end swiper-slide 
      <div class="swiper-slide" data-background="images/slide02.webp" data-stellar-background-ratio="1.15">
        <div class="container">
          <h1><span>Oxøme</span> Premium Flats</h1>
          <h2>Provide a decent level of comfort </h2>
          <a href="#">GET A CONSULTATION <i class="fas fa-caret-right"></i></a>
          <figure><img src="images/services-icon08.png" alt="Image"></figure>
        </div>  
      </div>
      <!-- end swiper-slide 
      <div class="swiper-slide" data-background="images/slide03.webp" data-stellar-background-ratio="1.15">
        <div class="container">
          <h1><span>Hømepark</span> Elite Residences</h1>
          <h2>We build your dream house</h2>
          <a href="#">GET A CONSULTATION <i class="fas fa-caret-right"></i></a>
          <figure><img src="images/services-icon07.png" alt="Image"></figure>
        </div> 
      </div>
      <!-- end swiper-slide --> 
    </div>
    <!-- Add Pagination -->
    <div class="inner-elements ">
      <div class="container ">
        <div class="pagination d-none"></div>
        <!-- end pagination -->
        <div class="button-prev d-none">PREV</div>
        <!-- end button-prev -->
        <div class="button-next d-none">NEXT</div>
        <!-- end button-next -->
        <div class="social-media">
          <h6>SOCIAL MEDIA</h6>
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-google"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
        <!-- end social-media --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end inner-elements --> 
  </div>
  <!-- end slider-container --> 
</header>
<!-- end slider -->















<style>
#RBFNT {
    background-image: url(images/reve-logo.png);
    background-position: center center;
    background-repeat: no-repeat;
    height: 90px;
    margin: 30px 0px;
    background-size: 36%;
}
</style>






<section class="az-section">

    <div class="container">
        <div class="row rowgaps ">
            
            <div class="col s12">
                <div class="center-align" id="RBFNT"></div>
            </div>
        
            
          <!--  <div class="col s12">
                
                LAUNCHING SOON</h2
                <p><p>Beachfront homes are at their finest with Azizi’s new residential development, Riviera Rêve. Located in the heart of Dubai, offering beautiful sandy beaches exclusively for its residents, in addition to its prime location only 10 minutes away from Downtown Dubai. </p></p>
            </div> -->
            
        </div>
        
    </div>

</section>





















<section class="intro bg-light">
  <div class="container">
    <div class="row align-items-center my-5">








      <div class="col-lg-12 d-none">
        <figure>
          <div class="pattern-bg" data-stellar-ratio="1.07"></div>
          <!-- end pattern-bg -->
          <div class="holder" data-stellar-ratio="1.10"> <img src="images/side-image01.webp" alt="Image"></div>
          <!-- end holder --> 
        </figure>
      </div>
















<style>

  img {
    max-width: 100%; }
  
  .preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
    @media screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px; } }
  
  .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }
  
  .preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
      width: 18%;
      margin-right: 2.5%; }
      .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
      .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
      .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }
  
  .tab-content {
    overflow: hidden; }
    .tab-content img {
      width: 100%;
      -webkit-animation-name: opacity;
              animation-name: opacity;
      -webkit-animation-duration: .3s;
              animation-duration: .3s; }
  
  .card {
    margin-top: 50px;
    background: #eee;
    padding: 3em;
    line-height: 1.5em; }
  
  @media screen and (min-width: 997px) {
    .wrapper {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex; } }
  
  .details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
  
  .colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }
  
  .product-title, .price, .sizes, .colors {
    text-transform: UPPERCASE;
    font-weight: bold; }
  
  .checked, .price span {
    color: #ff9f1a; }
  
  .product-title, .rating, .product-description, .price, .vote, .sizes {
    margin-bottom: 15px; }
  
  .product-title {
    margin-top: 0; }
  
  .size {
    margin-right: 10px; }
    .size:first-of-type {
      margin-left: 40px; }
  
  .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px; }
    .color:first-of-type {
      margin-left: 20px; }
  
  .add-to-cart, .like {
    background: #ff9f1a;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
    -webkit-transition: background .3s ease;
            transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
      background: #b36800;
      color: #fff; }
  
  .not-available {
    text-align: center;
    line-height: 2em; }
    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff; }
  
  .orange {
    background: #ff9f1a; }
  
  .green {
    background: #85ad00; }
  
  .blue {
    background: #0076ad; }
  
  .tooltip-inner {
    padding: 1.3em; }
  
  @-webkit-keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }
  
  @keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }
</style>






















  <div class="col-lg-6" style="padding: 50px 0 50px 0;">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                <div class="container">
                  <div class="wrapper row">
                    <div class="preview col-md-12" style="">
                      
                      <div class="preview-pic tab-content">
                        <div class="tab-pane active img-thumbnail" id="pic-1"><img src="images/7595.webp"/></div>
                        <div class="tab-pane" id="pic-2"><img src="images/7587.webp" /></div>
                        <div class="tab-pane" id="pic-3"><img src="images/7588.webp" /></div>
                        <div class="tab-pane" id="pic-4"><img src="images/7590.webp" /></div>
                        <div class="tab-pane" id="pic-5"><img src="images/7593.webp" /></div> 
                      </div>
                      <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/7595.webp" /></a></li>
                        <li><a data-target="#pic-2" data-toggle="tab"><img src="images/7587.webp" /></a></li>
                        <li><a data-target="#pic-3" data-toggle="tab"><img src="images/7588.webp" /></a></li>
                        <li><a data-target="#pic-4" data-toggle="tab"><img src="images/7590.webp" /></a></li>
                        <li><a data-target="#pic-5" data-toggle="tab"><img src="images/7593.webp" /></a></li>
                        
                        
                      </ul>
                      
                    </div>
                     
                  </div>
                </div>


                













              </div>
            </div>
          </div>
        





      <!-- end col-6 -->
      <div class="col-lg-6 wow fadeInUp">
        <div class="content-box text-center"> <!--b>01</b-->
          <!--h4><span>Pozniaky</span> Construction LLC</h4--> 
          <div class="section-header text-center"><h2>LIVE IN RIVIERA RÊVE</h2></div>
          <p style="padding-right:0%; text-align: justify;">Riviera Rêve is our newly launched residential development located in the heart of Dubai. It is comprised of studios, 1, 2 and 3 bedroom apartments, bringing you the best of beachside living, leisure and entertainment. Riviera Rêve complements your already distinguished lifestyle with an endless variety of premium retail shops and dining experience on the French-Riviera-inspired boulevard. It will feature luxurious amenities such as Italian marble flooring, premium wood joinery, smart home controls, bespoke lighting, beautiful panoramic glass elevators, automated car wash, exclusive valet parking, half Olympic size infinity pool and so much more.</p>
          <!--<a href="#"> <img src="images/icon-m2.png" alt="Image">See our projects</a> 
		  <a href="#" class="btn btn-primary">ENQUIRE NOW <i class="fas fa-caret-right"></i></a>-->
		  
		  <a href="#enquire-now" data-bs-toggle="modal" data-bs-target="#myModal" target="Riviera-Beachfront" id="allProjects" class="modal-trigger az-btn active aspecial">ENQUIRE NOW</a>
		   
		  </div>
        <!-- end content-box --> 
      </div>
      <!-- edn col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>






<style>

.az-btn.active, .az-btn:hover {
    background: #001834;
    color: #fff;
    border-color: #001834;
}
.az-btn {
    cursor: pointer;
    border: 2px solid #001834;
    width: 265px;
    display: inline-block;
    padding: 2px 25px;
    color: #fff!important;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 10px;
    text-align: center;
    -webkit-transition-duration: .4s;
    transition-duration: .4s;
}

</style>





<section id="get-started" class="get-started section-bg d-none">
      <div class="container-fluid text-center">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-2 text-center">
  </div>




          <div class="col-lg-6 text-center">
<div class="row">
  <div class="col-2"  >
    LAUNCHING TOWER-1
  </div>
  <div class="col-10">
    <div class="row">
      <div class="col-12  ">
        STUDIO</br>36
      </div>
      <div class="col-6  ">
        1 BED ROOM</br>73
      </div>
      <div class="col-6 ">
        4
      </div>
      <div class="col-6  ">
        5
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-4 ">
    6
  </div>
  <div class="col-4  ">
    7
  </div>
  <div class="col-4  ">
    8
  </div>
  </div>






      </div>





          <div class="col-lg-2 text-center">
  </div>
      <!-- edn col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  </div>
  <!-- end container --> 
</section>










<!-- end intro -->
<section class="logos d-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
        <figure> <img src="images/logo01.webp" alt="Image">
          <h6>TABLE</h6>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.05s">
        <figure> <img src="images/logo02.webp" alt="Image">
          <h6>PLANE</h6>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.10s">
        <figure> <img src="images/logo03.webp" alt="Image">
          <h6>CONNECT</h6>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.15s">
        <figure> <img src="images/logo04.webp" alt="Image">
          <h6>GLASSES</h6>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.20s">
        <figure> <img src="images/logo05.webp" alt="Image">
          <h6>PIXEL</h6>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.25s">
        <figure> <img src="images/logo06.webp" alt="Image">
          <h6>ATTACH</h6>
        </figure>
      </div>
      <!-- end col-2 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end logos -->










<style>



.benefits {
    position: relative;
	color: #fff;    
}
.benefits figure img {
	float: initial;
	filter: invert(100%) brightness(100);
}

.benefits figure {
    border: 0px solid rgba(255, 255, 255, 0.1);
	color: #fff;

}







.property-customization {
	color: #000;    
	background: #fff;
}
.property-customization figure figcaption {
    color: #000;
}





.benefits figure::after {
  background: #0006;

}



</style>










<!--section class="benefits"-->
<section class="benefits bg-image py-0" 
     style="background-image: url('images/img5.webp');
	     background-size: cover;
    background-repeat: no-repeat;">

<!--div class="video-bg">
    <img src="images/img5.webp"  class="img-responsive">
	

  </div-->




  <div class="container-fluid " style="background-color: rgb(0 0 0 / 35%);padding: 150px 10px;">
 


<div class="container">

 <div class="row align-items-center">
      <div class="col-12 col-lg-6 wow fadeInUp"> <!--b>02</b>
        <h4><span>Homepark</span> Property</h4--> 
        <div class="section-header text-center mb-3"><h2>LAUCHING TOWER-1</h2></div>
      </div>
      <!-- end col-12 -->
      <div class="offset-md-0 col wow fadeInUp" data-wow-delay="0s">
        <figure class="d-none"> <img src="images/icon-benefits01.png" alt="Image"> <b></b> </figure>
        <h6>STUDIOS</h6>
        <span class="odometer" data-count="36" data-status="yes">0</span> <span class="extra"> </span> </div>
      <!-- end col -->
      <div class="col wow fadeInUp" data-wow-delay="0.05s">
        <figure class="d-none"> <img src="images/icon-benefits02.png" alt="Image"> <b></b> </figure>
        <h6>1 BED</h6>
        <span class="odometer" data-count="73" data-status="yes">0</span> <span class="extra"> </span> </div>
      <!-- end col -->
      <div class="col wow fadeInUp" data-wow-delay="0.10s">
        <figure class="d-none"> <img src="images/icon-benefits03.png" alt="Image"> <b></b> </figure>
        <h6>2 BED</h6>
        <span class="odometer" data-count="35" data-status="yes">0</span> <span class="extra"> </span> </div>
      <!-- end col -->
      <div class="col wow fadeInUp" data-wow-delay="0.15s">
        <figure class="d-none"> <img src="images/icon-benefits04.png" alt="Image"> <b></b> </figure>
        <h6>3 BED</h6>
        <span class="odometer" data-count="12" data-status="yes">0</span> <span class="extra"> </span> </div>
      <!-- end col -->
      <div class="col wow fadeInUp" data-wow-delay="0.20s">
        <figure class="d-none"> <img src="images/icon-benefits05.png" alt="Image"> <b></b> </figure>
        <h6>TOTAL</h6>
        <span class="odometer" data-count="156" data-status="yes">0</span> <span class="extra"> </span> </div>
      <!-- end col --> 
    </div>
	
	
	
	
	
	
    <div class="row">
      <div class="col-md-12 row mt-4 wow fadeInUp mx-auto"> <!--b>02</b>
        <h4><span>Homepark</span> Property</h4-->  
  
      <!-- end col-12 -->
      <div class="offset-lg-6 col wow fadeInUp" data-wow-delay="0s">
        <figure class="d-none"> <img src="images/icon-benefits01.png" alt="Image"> <b></b> </figure>
        <h6>STARTING FROM</h6>
        <span class="odometer-stat" >AED 1.5 MIL</span> <span class="extra"> </span> </div>
      <!-- end col -->
      <div class="col col-lg-2 wow fadeInUp" data-wow-delay="0.05s">
        <figure class="d-none"> <img src="images/icon-benefits02.png" alt="Image"> <b></b> </figure>
        <h6>PAYMENT PLAN</h6>
        <span class="odometer-stat" >50/50</span> <span class="extra"> </span> </div>
      <!-- end col -->
      <div class="col wow fadeInUp" data-wow-delay="0.10s">
        <figure class="d-none"> <img src="images/icon-benefits03.png" alt="Image"> <b></b> </figure>
        <h6>COMPLETION DATE</h6>
        <span class="odometer-stat"  >AUGUST 2024</span> <span class="extra"> </span> 
</div>
      <!-- end col -->
        </div>
      <!-- end col --> 
    </div>
	
	
	
	
  </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 


</section>
<!-- end benefits -->

<style>

.benefits .odometer-stat {
    font-size: 35px;
    line-height: 1;
    font-weight: 800;
}


</style>























<section id="get-started" class="get-started section-bg d-none">
      <div class="container-fluid text-center">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-2 text-center">
  </div>




          <div class="col-lg-6 text-center">
<div class="row">
  <div class="col-2"  >
    LAUNCHING TOWER-1
  </div>
  <div class="col-10">
    <div class="row">
      <div class="col-12  ">
        STUDIO</br>36
      </div>
      <div class="col-6  ">
        1 BED ROOM</br>73
      </div>
      <div class="col-6 ">
        4
      </div>
      <div class="col-6  ">
        5
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-4 ">
    6
  </div>
  <div class="col-4  ">
    7
  </div>
  <div class="col-4  ">
    8
  </div>
  </div>






      </div>





          <div class="col-lg-2 text-center">
  </div>
      <!-- edn col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  </div>
  <!-- end container --> 
</section>
























<section class="property-customization">
  <!-- end video-bg -->
  
  
  
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp"> 
	  <!--b>08</b>
        <h4><span>Homepark</span> Living Spaces</h4--> 
        <div class="section-header text-center"><h2>LOCAL BENEFITS</h2>
        

</div>

      </div>
      <!-- end col-12 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1602666347.png" alt="Image">
			<figcaption>
				<h2 class="mb-0">1 MIN</h2>
				<p class="mb-0">Al Khail Road</p>
			</figcaption>
	
	
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1574794777.png" alt="Image">
          <figcaption>
				<h2 class="mb-0">2 MIN</h2>
				<p class="mb-0">MEYDAN ONE MALL & MEYDAN TOWER</p>
		  </figcaption>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.10s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1574796727.png" alt="Image">
          <figcaption>
				<h2 class="mb-0">3 MIN</h2>
				<p class="mb-0">MEYDAN RACECOURSE</p>
				
		  </figcaption>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.15s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1603371771.png" alt="Image">
          <figcaption>
		  
				<h2 class="mb-0">10 MIN</h2>
				<p class="mb-0">FESTIVAL CITY & IKEA</p>
		  </figcaption>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.20s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1602666315.png" alt="Image">
          <figcaption>
		  
				<h2 class="mb-0">10 MIN</h2>
				<p class="mb-0">Downtown Dubai</p>
		  </figcaption>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.25s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1574799825.png" alt="Image">
          <figcaption>
		  
				<h2 class="mb-0">10 MIN</h2>
				<p class="mb-0">DUBAI CREEK & AL KHAIL ROAD</p>
		  </figcaption>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1574797589.png" alt="Image">
          <figcaption>
				<h2 class="mb-0">15 MIN</h2>
				<p class="mb-0">DUBAI INTERNATIONAL AIRPORT (DXB)</p> 
		  </figcaption>
        </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s">
        <figure data-toggle="tooltip" data-placement="top"  > <img src="images/1575959225.png" alt="Image">
          <figcaption>
				<h2 class="mb-0">16 MIN</h2>
				<p class="mb-0">Kite Beach & Jumeirah</p> 
		  </figcaption>
        </figure>
      </div>
      <!-- end col-2 -->
	  
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
  
  
</section>
<!-- end property-customization -->












  
  


<style>

.property-customization-2 {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    padding: 150px 0;
    background: #26282b;
    color: #fff;
    position: relative;
}

.property-customization-2 figure {
    width: 100%;
    display: flex;
    text-align: left;
    align-items: center;
    border: 0px solid rgba(255, 255, 255, 0.1);
    padding: 15px 10px;
    margin: 15px 0;
}


</style>




<!--section class="benefits"-->
<section class="benefits bg-image py-0 property-customization-2" 
     style="background-image: url('images/7594.webp');
	     background-size: cover;
    background-repeat: no-repeat;">

<!--div class="video-bg">
    <img src="images/img5.webp"  class="img-responsive">
	

  </div-->



<div class="container-fluid " style="background-color: rgb(0 0 0 / 35%);padding: 150px 10px;
background: -moz-linear-gradient(left, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%);
    background: -webkit-linear-gradient(left, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%);
    background: linear-gradient(to left, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%);
	
	">
  





<div class="container"> 

<div class="row">

      <!-- end col-12 -->
      
      <!-- end col-2 -->
      

<div class="offset-md-6 col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				<h2 class="mb-0">72+ &nbsp;</h2>
			</figcaption>

<figcaption>
				<p class="mb-0">LOW TO MID</p>
				<p class="mb-0">RISE BUILDINGS</p>
			</figcaption>
	
	
        </figure>
      </div>



<div class="col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				
			</figcaption>

<figcaption>
				<p class="mb-0">DUBAI'S STUNNING</p>
				<h2 class="mb-0">SKYLINE VIEWS</h2>
			</figcaption>
	
	
        </figure>
      </div>
      <div class="offset-md-6 col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				
			</figcaption>

<figcaption>
				<p class="mb-0">EXCLUSIVE</p>
				<h2 class="mb-0">BEACHFRONT LIVING</h2>
			</figcaption>
	
	
        </figure>
      </div>



<div class="col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				
			</figcaption>

<figcaption>
				<p class="mb-0">VIBRANT</p>
				<h2 class="mb-0">BOULEWARD</h2>
			</figcaption>
	
	
        </figure>
      </div><div class="offset-md-6 col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				
			</figcaption>

<figcaption>
				<p class="mb-0">STATE OF THE ART</p>
				<h2 class="mb-0">AMENITIES</h2>
			</figcaption>
	
	
        </figure>
      </div>



<div class="col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				<h2 class="mb-0 text-center">7  &nbsp;</h2>
		<p class="mb-0 text-center">MIN &nbsp;</p>
</figcaption>

<figcaption>
				<p class="mb-0">AWAY FROM</p>
				<p class="mb-0">DOWNTOWN DUBAI</p>

			</figcaption>
	
	
        </figure>
      </div>


<div class="offset-md-6 col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				<h2 class="mb-0">2.7 &nbsp;</h2>
			</figcaption>

<figcaption>
				<p class="mb-0">KM CRYSTAL</p>
				<p class="mb-0">LAGOON</p>
			</figcaption>
	
	
        </figure>
      </div>



<div class="col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeInUp;">
        <figure data-toggle="tooltip" data-placement="top" title=""  > 
			<figcaption>
				<h2 class="mb-0">1, 2 &amp; 3</h2>
			</figcaption>

<figcaption>
				<p class="mb-0">LUXURIOS STUDIOS</p>
				<p class="mb-0">BEDROOM APARTMENTS</p>
			</figcaption>
	
	
        </figure>
      </div>

<!-- end col-2 -->
      
      <!-- end col-2 -->
      
      <!-- end col-2 -->
      
      <!-- end col-2 -->
      
      <!-- end col-2 -->
      
      <!-- end col-2 -->
      
      <!-- end col-2 -->
	  
    </div>

  </div>











  </div>
  <!-- end container --> 
  
  





</section>
<!-- end benefits -->
















<section class="property-customization py-0">
  <!-- end video-bg -->
  
  


<div class="container py-5 mt-5 d-flex flex-column justify-content-center align-items-center text-center position-relative aos-init aos-animate" data-aos="zoom-out"> <img src="images/7587.webp" class="img-fluid img-thumbnail animated mb-4">
  
  <div class="section-header"><h2>LUXURY BEACH FRONT LIFESTYLE DESTINATION</h2><p>Invest in the most strategically located and architecturally inspired project in Meydan, Mohammed Bin Rashid City. Riviera Rêve’s beachfront properties truly stands out amongst surrounding projects, allowing residents to enjoy direct access to the crystal lagoon, zen gardens, witness iconic sunsets by the pool and gorgeous views of the crystal lagoon and Dubai Skyline.

</p></div>
 
 





</div>








</div>
  <!-- end container --> 
</section>
<!-- end property-customization -->















































<section class="recent-gallery d-none">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 wow fadeInUp"> <b>03</b>
        <h4><span>Property</span> Inner Gallery</h4>
        <h3>Lux Living Spaces in Pozniaky - Kiev</h3>
        <a href="#" class="link">SEE ALL GALLERY <i class="fas fa-caret-right"></i></a> </div>
      <!-- end col-5 -->
      <div class="col-lg-7">
        <div class="row inner">
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0s">
            <figure data-stellar-ratio="1.07"> <a href="images/gallery-thumb01.webp" data-fancybox><img src="images/gallery-thumb01.webp" alt="Image"></a> </figure>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.05s">
            <figure data-stellar-ratio="1.15"> <a href="images/gallery-thumb02.webp" data-fancybox><img src="images/gallery-thumb02.webp" alt="Image"></a> </figure>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.10s">
            <figure data-stellar-ratio="1.04"> <a href="images/gallery-thumb03.webp" data-fancybox><img src="images/gallery-thumb03.webp" alt="Image"></a> </figure>
          </div>
          <!-- end col-4 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end col-7 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end recent-gallery -->




<section class="property-calculator d-none">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <figure>
          <div class="pattern-bg" data-stellar-ratio="1.03"></div>
          <!-- end pattern-bg -->
          <div class="holder" data-stellar-ratio="1.07"> <img src="images/side-image02.webp" alt="Image"></div>
          <!-- end holder --> 
        </figure>
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6 wow fadeInUp">
        <div class="content-box"> <b>04</b>
          <h4><span>Homepark</span> Living Spaces</h4>
          <h3>Decorated Flats in Pozniaky - Kiev</h3>
          <p>The smaller male cones release pollen, 
            which fertilizes the female </p>
          <ul>
            <li><img src="images/bank-logos01.webp" alt="Image"></li>
            <li><img src="images/bank-logos02.webp" alt="Image"></li>
          </ul>
          <a href="#"><img src="images/icon-calculator.png" alt="Image"> Living Space Calculator</a> </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end property-calculator -->



<section class="property-plans d-none">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 wow fadeInUp"> <b>05</b>
        <h4><span>Homepark</span> Living Spaces</h4>
        <h3>Decorated Flats in Pozniaky - Kiev</h3>
        <p>We are waiting for you in our sales office for having all these opportunities with affordable prices and appropriate payment opportunities..</p>
        <table>
          <tbody>
            <tr>
              <td>Total area:</td>
              <td>680 metre square</td>
            </tr>
            <tr>
              <td>Total Floor:</td>
              <td>24 Floor</td>
            </tr>
            <tr>
              <td>Parking Lot:</td>
              <td>5 Large</td>
            </tr>
            <tr>
              <td>Social Area:</td>
              <td>860 m²</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.05s">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#tab-one">1 Room 47m²</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#tab-two" role="tab">2 Rooms 65m²</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#tab-three" role="tab">3 Rooms 90m²</a> </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab-one">
            <figure><img src="images/plan01.webp" alt="Image"></figure>
          </div>
          <!-- end tab-pane -->
          <div class="tab-pane fade" id="tab-two">
            <figure><img src="images/plan02.webp" alt="Image"></figure>
          </div>
          <!-- end tab-pane -->
          <div class="tab-pane fade" id="tab-three">
            <figure><img src="images/plan03.webp" alt="Image"></figure>
          </div>
          <!-- end tab-pane --> 
        </div>
        <!-- end tab-contnet --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- property-plans -->



<section class="get-consultation d-none" data-background="images/section-bg01.webp" data-stellar-background-ratio="0.9">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 fadeInUp wow">
        <div class="content-box"> <b>06</b>
          <h4><span>Homepark</span> Living Spaces</h4>
          <h3>Are you interested to Homepark</h3>
          <p>The sun collectors, shall provide the electricity of the social areas of the site and shall do its part for protecting the environment.</p>
          <a href="#">SCHEDULE A VISIT <i class="fas fa-caret-right"></i></a> </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end get-consultation -->



<section class="recent-posts d-none">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp"> <b>07</b>
        <h4><span>Homepark</span> Living Spaces</h4>
        <small>Smaller male cones </small> </div>
      <!-- end col-12 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0s">
        <div class="post-box">
          <figure> <img src="images/recent-news01.webp" alt="Image"> </figure>
          <span>24, September 2019</span>
          <h6><a href="#">50th Anniversary of the Turner School of Construction Management </a></h6>
          <p>The smaller male cones release pollen, 
            which fertilizes the female </p>
        </div>
        <!-- end post-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
        <div class="post-box">
          <figure> <img src="images/recent-news02.webp" alt="Image"> </figure>
          <span>06, November 2019</span>
          <h6><a href="#">The Center for Construction Research and Training to Receive 2019 Award</a></h6>
          <p>The smaller male cones release pollen, 
            which fertilizes the female </p>
        </div>
        <!-- end post-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
        <div class="post-box">
          <figure> <img src="images/recent-news03.webp" alt="Image"> </figure>
          <span>31, April 2019</span>
          <h6><a href="#">Henry C. Turner Prize for Innovation in Construction Company</a></h6>
          <p>The smaller male cones release pollen, 
            which fertilizes the female </p>
        </div>
        <!-- end post-box --> 
      </div>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end recent-posts -->













<section class="certificates d-none">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-12 wow fadeInUp"> <b>09</b>
        <h4><span>Property</span> Certificates</h4>
        <small>Smaller male cones </small> </div>
      <!-- end col-5 -->
      <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.05s">
        <figure> <a href="images/certificate01.webp" data-fancybox><img src="images/certificate01.webp" alt="Image"></a> </figure>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.10s">
        <figure> <a href="images/certificate02.webp" data-fancybox><img src="images/certificate02.webp" alt="Image"></a> </figure>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.15s">
        <figure> <a href="images/certificate03.webp" data-fancybox><img src="images/certificate03.webp" alt="Image"></a> </figure>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.20s">
        <figure> <a href="images/certificate04.webp" data-fancybox><img src="images/certificate04.webp" alt="Image"></a> </figure>
      </div>
      <!-- end col-3 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end certificates -->










<section class="property-customization py-5">
  <!-- end video-bg -->
  
  


<div class="container-fluid px-0">
 <div class="ratio ratio-16x9">
  <!--Successful
  <iframe 
      id="existing-iframe-example"
	src="https://www.youtube.com/embed/p_Aen2HcjJM?autoplay=1&mute=1&enablejsapi=1"    
  
    frameborder="0"
    style="border: solid 0px #37474F"
	allowfullscreen="1"
	 allow="autoplay"
	></iframe>
	-->
	
	
  <!--Successful
	<video src="videos/riviera-development.mp4" type="video/mp4" loop class="hover-to-play w-100"></video>
	
	<script>
	const clip = document.querySelectorAll(".hover-to-play");
for (let i = 0; i < clip.length; i++) { clip[i].addEventListener("mouseenter", function (e) { clip[i].play();
  }); clip[i].addEventListener("mouseout", function (e) { clip[i].pause(); }); }
	</script>
	-->
	
	
	
	
	
	  <!--Successful-->
	    <video class="img-fluid" autoplay loop muted>
        <source src="videos/riviera-development.mp4" type="video/mp4" />
      </video>
	
	
	
	
	
</div>





 



</div>









  <!-- end container --> 
</section>














<section class="contact py-5">
  <div class="container">
 
 <!-- end row -->
    <div class="row align-items-center pb-5 mt-5">

        <div class="col-lg-12">
        <div class="section-header text-center"><h2>Get Exclusive Access Before it's Sold Out!</h2></div>
        <div class="section-header text-center"><h2>Get in touch with us!</h2></div>
 </div>
        <div class="col-lg-6"style="
    overflow: hidden;
">
        	 <div class="map">
          <div class="pattern-bg" data-stellar-ratio="1.03"></div>
          <!-- end pattern-bg -->
          <div class="holder" data-stellar-ratio="1.07">  



    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14443.391734687184!2d55.312934!3d25.174612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32012a46f532d670!2sAzizi%20Riviera%20Reve!5e0!3m2!1sen!2sus!4v1673853493307!5m2!1sen!2sus"   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
          <!-- end holder --> 
        </div>
        <!-- end map -->
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
        	<div class="contact-form">	
			 <form id="contact"  action="insert.php" name="contact" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name" autocomplete="off" required>
             <span>Your name</span>
          </div>
		  
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="phone" id="phone" autocomplete="off" required>
            <span>Your Phone</span>
          </div>
		  
		  
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="email" id="email" autocomplete="off" required>
            <span>Your Email</span>
          </div>
		  
          <!-- end form-group 
          <div class="form-group"> 
            <input type="text" name="subject" id="subject" autocomplete="off" required>
            <span>Subject</span>
          </div>-->
		  
          <!-- end form-group -->
          <div class="form-group"> 
            <textarea name="message" id="message" autocomplete="off" required></textarea>
            <span>Your message</span>
          </div>
          <!-- end form-group -->
          <div class="form-group text-center text-lg-start">
            <button id="submit" type="submit" name="submit">
				Submit
         </button>
          </div>
          <!-- end form-group -->
        </form>
        <!-- end form --> 
         <div class="form-group">
          <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error --> 
        </div>
        <!-- end form-group -->
        </div>
        <!-- end contact-form -->
        </div>
        <!-- end col-6 -->
   </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end contact -->






<style>


/*--------------------------------------------------------------
# Get Started Section
--------------------------------------------------------------*/
.get-started .content {
  padding: 30px 0;
}

.get-started .content h3 {
  font-size: 36px;
  color: var(--color-secondary);
  font-weight: 600;
  margin-bottom: 25px;
  padding-bottom: 25px;
  position: relative;
}

.get-started .content h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 4px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.get-started .content p {
  font-size: 14px;
}

.get-started .php-email-form {
  background: #fff;
  padding: 30px;
  height: 100%;
}

@media (max-width: 575px) {
  .get-started .php-email-form {
    padding: 20px;
  }
}

.get-started .php-email-form h3 {
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.get-started .php-email-form p {
  font-size: 14px;
  margin-bottom: 20px;
}

.get-started .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.get-started .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.get-started .php-email-form input,
.get-started .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}

.get-started .php-email-form input:focus,
.get-started .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.get-started .php-email-form input {
  padding: 12px 15px;
}

.get-started .php-email-form textarea {
  padding: 12px 15px;
}

.get-started .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.get-started .php-email-form button[type=submit]:hover {
  background: rgba(254, 185, 0, 0.8);
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}


  </style>



<section id="get-started" class="get-started section-bg d-none"><div class="container"><div class="row justify-content-between gy-4"><div class="col-lg-12 aos-init aos-animate" data-aos="fade"><form action="forms/quote.php" method="post" class="php-email-form"><h3>Get a quote</h3><p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p><div class="row gy-3"><div class="col-md-12"> <input type="text" name="name" class="form-control" placeholder="Name" required=""></div><div class="col-md-12 "> <input type="email" class="form-control" name="email" placeholder="Email" required=""></div><div class="col-md-12"> <input type="text" class="form-control" name="phone" placeholder="Phone" required=""></div><div class="col-md-12"><textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea></div><div class="col-md-12 text-center"><div class="loading">Loading</div><div class="error-message"></div><div class="sent-message">Your quote request has been sent successfully. Thank you!</div> <button type="submit">Get a quote</button></div></div></form></div></div></div></section>








<style>
.property-customization figure img {
    height: 70px;
    float: left;
    margin-right: 15px;
    <!--filter: invert(100%) brightness(100);-->
}
.navbar .container .upper-side .phone-email h4{
  font-size: 20px;
}

.intro .content-box{
  padding-left: 0%;
}




.contact .map{
      margin-top: 75px;
}
</style>





















<section class="footer-bar d-none">
  <div class="container">
    <div class="inner wow fadeIn">
      <div class="row">
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
          <figure><img src="images/footer-icon01.png" alt="Image"></figure>
          <h3>Address Infos</h3>
          <p>Kyiv | G. Stalingrada Avenue, 6 <br>
            Vilnius | Antakalnio St. 17</p>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
          <figure><img src="images/footer-icon02.png" alt="Image"></figure>
          <h3>Working Hours</h3>
          <p>Monday to Friday <strong>09:00</strong> to <strong>18:30</strong> <br>
            Saturday we work until <strong>15:30</strong></p>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
          <figure><img src="images/footer-icon03.png" alt="Image"></figure>
          <h3>Sales Office</h3>
          <p>Boryssa Himry 124 B Block Pozniaky<br>
            Kiev Oblast - Ukraine</p>
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end inner --> 
  </div>
  <!-- end container --> 
</section>
<!-- end footer-bar -->












<style>

  :root{--joinchat-ico:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M3.516 3.516c4.686-4.686 12.284-4.686 16.97 0 4.686 4.686 4.686 12.283 0 16.97a12.004 12.004 0 0 1-13.754 2.299l-5.814.735a.392.392 0 0 1-.438-.44l.748-5.788A12.002 12.002 0 0 1 3.517 3.517zm3.61 17.043.3.158a9.846 9.846 0 0 0 11.534-1.758c3.843-3.843 3.843-10.074 0-13.918-3.843-3.843-10.075-3.843-13.918 0a9.846 9.846 0 0 0-1.747 11.554l.16.303-.51 3.942a.196.196 0 0 0 .219.22l3.961-.501zm6.534-7.003-.933 1.164a9.843 9.843 0 0 1-3.497-3.495l1.166-.933a.792.792 0 0 0 .23-.94L9.561 6.96a.793.793 0 0 0-.924-.445 1291.6 1291.6 0 0 0-2.023.524.797.797 0 0 0-.588.88 11.754 11.754 0 0 0 10.005 10.005.797.797 0 0 0 .88-.587l.525-2.023a.793.793 0 0 0-.445-.923L14.6 13.327a.792.792 0 0 0-.94.23z'/%3E%3C/svg%3E");--joinchat-font:-apple-system,blinkmacsystemfont,"Segoe UI",roboto,oxygen-sans,ubuntu,cantarell,"Helvetica Neue",sans-serif}.joinchat{--bottom:20px;--sep:20px;--s:60px;display:none;position:fixed;z-index:9000;right:var(--sep);bottom:var(--bottom);font:normal normal normal 16px/1.625em var(--joinchat-font);letter-spacing:0;animation:joinchat_show .5s cubic-bezier(.18,.89,.32,1.28) 10ms both;transform:scale3d(0,0,0);transform-origin:calc(var(--s)/-2) calc(var(--s)/-4);-webkit-user-select:none;-moz-user-select:none;user-select:none;touch-action:manipulation;-webkit-font-smoothing:antialiased;-webkit-tap-highlight-color:rgb(0 0 0/0)}.joinchat *,.joinchat :after,.joinchat :before{box-sizing:border-box}.joinchat--show{display:block;transform:scaleX(1)}.joinchat--left{right:auto;left:var(--sep)}.joinchat--noanim{animation:none}.joinchat__button{position:absolute;z-index:2;bottom:8px;right:8px;height:var(--s);min-width:var(--s);max-width:95vw;background:#25d366;color:inherit;border-radius:calc(var(--s)/2);box-shadow:1px 6px 24px 0 rgba(7,94,84,.24);cursor:pointer;transition:background-color .2s linear}.joinchat__button:hover{background:#128c7e}.joinchat__button:active{background:#128c7e;transition:none}.joinchat--left .joinchat__button{right:auto;left:8px}.joinchat__button__open{width:var(--s);height:var(--s);border-radius:50%;background:rgb(0 0 0/0) var(--joinchat-ico) 50% no-repeat;background-size:60%;overflow:hidden}.joinchat__button__image{position:absolute;top:1px;right:1px;width:calc(var(--s) - 2px);height:calc(var(--s) - 2px);border-radius:50%;overflow:hidden;opacity:0}.joinchat__button__image img{display:block;width:100%;height:100%;object-fit:cover}.joinchat--show .joinchat__button__image{animation:joinchat_image_loop 20s linear 5s infinite normal both}.joinchat--image .joinchat__button__image{opacity:1;animation:none}.joinchat__tooltip{position:absolute;top:calc(var(--s)/2 - 16px);right:calc(var(--s) + 16px);max-width:calc(100vw - 105px);height:32px;padding:0 14px;border:none;border-radius:16px;background:#fff;color:rgba(0,0,0,.8);line-height:31px;white-space:nowrap;opacity:0;transition:opacity .3s ease-out .4s;filter:drop-shadow(0 1px 4px rgba(0,0,0,.4));pointer-events:none}.joinchat__tooltip:after{content:"";display:block;position:absolute;top:10px;right:-6px;border:8px solid transparent;border-width:6px 0 6px 8px;border-left-color:#fff}.joinchat__tooltip div{overflow:hidden;text-overflow:ellipsis}.joinchat--tooltip .joinchat__tooltip{animation:joinchat_tootlip 20s linear 5s 1 normal both}.joinchat--left .joinchat__tooltip{right:auto;left:calc(var(--s) + 16px)}.joinchat--left .joinchat__tooltip:after{left:-6px;right:auto;border-color:transparent;border-width:6px 8px 6px 0;border-right-color:#fff}.joinchat__qr{position:absolute;bottom:calc(var(--s) + 16px);right:0;display:none;flex-direction:column-reverse;width:228px;min-height:200px;padding:14px 14px 10px;border:none;border-radius:16px;background:#fff;color:rgba(0,0,0,.8);text-align:center;white-space:nowrap;filter:drop-shadow(0 1px 4px rgba(0,0,0,.4));animation:joinchat_badge_in .4s cubic-bezier(.11,.84,.83,1.01) .3s both;pointer-events:none}.joinchat__qr:after{content:"";display:block;position:absolute;bottom:-6px;right:calc(var(--s)/2 - 6px);border:8px solid transparent;border-width:8px 6px 0;border-top-color:#fff}.joinchat--left .joinchat__qr{left:0;right:auto}.joinchat--left .joinchat__qr:after{left:calc(var(--s)/2 - 6px);right:auto}.joinchat__qr div{font-size:14px;color:#4a4a4a;overflow:hidden;text-overflow:ellipsis}.joinchat__qr canvas{display:block;width:200px;height:200px;margin:0}@keyframes joinchat_show{0%{transform:scale3d(0,0,0)}to{transform:scaleX(1)}}@keyframes joinchat_badge_in{0%{opacity:0;transform:translate3d(0,50px,0)}to{opacity:1;transform:translateZ(0)}}@keyframes joinchat_image_loop{0%{opacity:0}3%,20%{opacity:1}25%,to{opacity:0}}@keyframes joinchat_tootlip{0%{opacity:0;transform:scaleY(0)}1%,20%{opacity:1;transform:scaleX(1)}25%,to{opacity:0;transform:scaleX(1)}}.joinchat__woo-btn__wrapper{clear:both}.joinchat__woo-btn{--s:40px;display:inline-block;box-sizing:border-box;height:var(--s);max-width:100%;padding:0 calc(var(--s)/2) 0 var(--s);background:#25d366 var(--joinchat-ico) calc(var(--s)*0.2) 50% no-repeat;background-size:calc(var(--s)*0.6);color:#fff;border-radius:calc(var(--s)/2);font:700 normal calc(var(--s)*0.35)/var(--s) var(--joinchat-font);white-space:nowrap;text-overflow:ellipsis;overflow:hidden;cursor:pointer;transition:background-color .2s}.joinchat__woo-btn:empty{padding-right:0}.joinchat__woo-btn:hover{background-color:#128c7e}@media (orientation:landscape) and (min-height:481px),(orientation:portrait) and (min-width:481px){.joinchat--mobile{display:none!important}}@media (max-width:767px){.joinchat--footer-bar{--bottom:76px!important}}@media (max-width:480px),(orientation:landscape) and (max-height:480px){.joinchat{--bottom:6px;--sep:6px}}@media (hover:hover){.joinchat__button:hover .joinchat__tooltip{opacity:1;animation:none;transition:opacity .2s}.joinchat--btn .joinchat__button:hover .joinchat__qr{display:flex}}@media (prefers-reduced-motion){.joinchat{animation:none}}

  </style>

<div class="joinchat joinchat--left joinchat--btn joinchat--show joinchat--tooltip" data-settings="{&quot;telephone&quot;:&quot;923363332214&quot;,&quot;mobile_only&quot;:false,&quot;button_delay&quot;:3,&quot;whatsapp_web&quot;:false,&quot;qr&quot;:false,&quot;message_views&quot;:2,&quot;message_delay&quot;:10,&quot;message_badge&quot;:false,&quot;message_send&quot;:&quot;&quot;,&quot;message_hash&quot;:&quot;&quot;}">
	<a class="joinchat__button" href="https://api.whatsapp.com/send?phone=971507150017">
		<div class="joinchat__button__open"></div>
  </a>
	</div>

 

<footer class="footer pt-0">
  <div class="container">
     
    <div class="row">
      <div class="col-12 mt-0 text-center"> <span class="copyright ">© 2023 All Rights Reserved | Dency Estate  </span>  </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</footer>
<!-- end footer --> 


   <!-- map-section end -->
<script src="js/main.js"></script>
<script src="js/contactform.js"></script>
 <script>
function _(id){ return document.getElementById(id); }
function footerForm(){
	_("fmybtn").disabled = true;
	_("fstatus").innerHTML = 'Your message was sent successfully! We will be in touch as soon as we can.';
	var formdata = new FormData();
	formdata.append( "ffn", _("ffn").value );
	formdata.append( "ft", _("ft").value );
	formdata.append( "ft2", _("ft2").value );
	formdata.append( "fm", _("fm").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "Message.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("footer-form").innerHTML = '<h2>Thanks you'+_("ffn").value+', your message has been sent.</h2>';
			} else {
				window.location.href="https://dency.estate/";
				_("fmybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}


</script>

<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/swiper.min.js"></script> 
<script src="js/fancybox.min.js"></script> 
<script src="js/odometer.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/text-rotater.js"></script> 
<script src="js/jquery.stellar.js"></script> 
<script src="js/isotope.min.js"></script> 
<script src="js/scripts.js"></script>
</body>



















