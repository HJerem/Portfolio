<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jérémy Halin | Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="http://jeremyhalin.fr/">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">update your browser</a> to improve user experience.</p>
<![endif]-->

<?php include('header.php'); ?>
<div class="title-background">
  <div class="container-1024">
    <h2>Services</h2>
  </div>
</div>
<section class="container-1024">

 <section class="slider">
  <div id="slider" class="flexslider">
    <ul class="slides">
      <li>
        <span class="round"><i class="fa fa-desktop"></i></span>
        <h3>Webdesign</h3>
        <p>I conceive from A to Z the design of your website, from prototyping to integration, meeting your demands and expectations while offering a unique design.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-eye"></i></span>
        <h3>Branding</h3>
        <p>I create a corresponding visual identity for your business in order to increase notoriety and credibility.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-code"></i></span>
        <h3>Web integration</h3>
        <p>I integrate your website in every detail while focusing myself on the user experience (UX).</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-facebook"></i></span>
        <h3>Social media</h3>
        <p>I take care to make your business visible on the main social networks in order to increase your online visibility.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-expand"></i></span>
        <h3>Responsive</h3>
        <p>I make sure every page of your website is accessible regardless of the device used (PC, laptop, smartphone, tablet)</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-cogs"></i></span>
        <h3>Back-End development</h3>
        <p>I conceive your application and its administration interface in an optimized way and well thought out.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-check"></i></span>
        <h3>Meeting standards</h3>
        <p>I respect the standards for accessibility, W3C, ergonomics and cross-browser compatibility.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-server"></i></span>
        <h3>Hosting</h3>
        <p>I take care of the domain name, the online publication, the SEO and other actions related to provide you with a website ready for use.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-heart"></i></span>
        <h3>Passion</h3>
        <p>I work with passion and I am perfectionist. You are assured to get a powerful product that meet your expectations.</p>
      </li>
    </ul>
  </div>
  <nav id="services">
    <ul>
      <li><a title="Webdesign" class="round-small services-desktop"><i class="fa fa-desktop"></i></a></li>
      <li><a title="Branding" class="round-small services-eye"><i class="fa fa-eye"></i></a></li>
      <li><a title="Web integration" class="round-small services-code"><i class="fa fa-code"></i></a></li>
      <li><a title="Social media" class="round-small services-facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a title="Responsive Design" class="round-small services-expand"><i class="fa fa-expand"></i></a></li>
      <li><a title="Back-End development" class="round-small services-cogs"><i class="fa fa-cogs"></i></a></li>
      <li><a title="Meeting standards" class="round-small services-check"><i class="fa fa-check"></i></a></li>
      <li><a title="Hosting" class="round-small services-server"><i class="fa fa-server"></i></a></li>
      <li><a title="A true passion" class="round-small services-heart"><i class="fa fa-heart"></i></a></li>
    </ul>
  </nav>
</section>


</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/main.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    if($(window).width()>640){
      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: false,
        animationLoop: false,
        slideshow: false,
        start: function(){
         $('.slider').css('opacity', '1'); 
    	}
      });  
    }
  });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','js/analytics.js','ga');

  ga('create', 'UA-59276844-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
