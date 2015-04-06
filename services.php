<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jérémy Halin | Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">


  <!--<script src="js/vendor/modernizr-2.6.2.min.js"></script>-->
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">Vous utilisez un navigateur <strong>obsolète</strong>. Merci de <a href="http://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre expérience utilisateur.</p>
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
        <p>Je conçois de A à Z le design de votre site internet, du maquettage à l'intégration, en respectant vos demandes et attentes tout en proposant un design unique.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-eye"></i></span>
        <h3>Identité visuelle</h3>
        <p>Je créé une identité visuelle correspondante à votre entreprise afin d'en augmenter la notoriété et sa crédibilité.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-code"></i></span>
        <h3>Intégration web</h3>
        <p>J’intègre votre site web jusqu’aux moindres détails tout en me focalisant sur l’expérience utilisateur (UX).</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-facebook"></i></span>
        <h3>Réseaux sociaux</h3>
        <p>Je m’occupe de rendre visible votre entreprise sur les principaux réseaux sociaux et ce afin d’en augmenter la visibilité sur internet.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-expand"></i></span>
        <h3>Responsive (site web adaptatif)</h3>
        <p>Je m’assure que chaque page de votre site est accessible peu importe l’appareil (PC, smartphone, tablette, ordinateur potable)</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-cogs"></i></span>
        <h3>Développement back-end</h3>
        <p>Je conçois votre application ainsi que son interface d’administration de manière optimisée et bien pensée.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-check"></i></span>
        <h3>Respect des normes</h3>
        <p>Je respecte les normes liées à l’accessibilité, au W3C, à l’ergonomie et la compatibilité multi-navigateurs.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-server"></i></span>
        <h3>Hébergement</h3>
        <p>Je m’occupe du nom de domaine, de la mise en ligne, du référencement et autres actions liées à la mise en ligne afin de vous fournir un site web “clés en main”.</p>
      </li>
      <li>
        <span class="round"><i class="fa fa-heart"></i></i></span>
        <h3>Passion</h3>
        <p>Je travaille avec passion, je suis perfectionniste et ne laisse rien au hasard. Vous êtes assurés d’obtenir un produit performant et correspondant à vos attentes.</p>
      </li>
    </ul>
  </div>
  <nav id="services">
    <ul>
      <li><a title="Webdesign" class="round-small services-desktop"><i class="fa fa-desktop"></i></a></li>
      <li><a title="Identité visuelle" class="round-small services-eye"><i class="fa fa-eye"></i></a></li>
      <li><a title="Intégration web" class="round-small services-code"><i class="fa fa-code"></i></a></li>
      <li><a title="Réseaux sociaux" class="round-small services-facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a title="Responsive Design" class="round-small services-expand"><i class="fa fa-expand"></i></a></li>
      <li><a title="Développement back-end" class="round-small services-cogs"><i class="fa fa-cogs"></i></a></li>
      <li><a title="Respect des normes" class="round-small services-check"><i class="fa fa-check"></i></a></li>
      <li><a title="Hébergement" class="round-small services-server"><i class="fa fa-server"></i></a></li>
      <li><a title="Une véritable passion" class="round-small services-heart"><i class="fa fa-heart"></i></a></li>
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
  $(window).load(function(){
    if($(window).width()>640){
      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: false,
        animationLoop: false,
        slideshow: false
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
