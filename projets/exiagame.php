<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <base href="http://jeremyhalin.fr/">
  <title>Jérémy Halin | Projet ExiaGame</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">Vous utilisez un navigateur <strong>obsolète</strong>. Merci de <a href="http://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre expérience utilisateur.</p>
<![endif]-->
<div id="container">

  <?php include('../header.php'); ?>

  <section id="container-project">
    <div class="exiagame" style="padding-top:20px">
      <div class="container-wide">

        <h2 style="float:left">exiagame</h2>
        <div class="navigation">
          <a href="projets/ftwrecords" class="previous-project color2" title="Projet précédent: FTW Records"><i class="fa fa-angle-left"></i>Précédent</a>
          <a href="projets/infolan" class="next-project color2" title="Projet suivant: InfoLAN">Suivant<i class="fa fa-angle-right"></i></a>
        </div>
        <div class="browser">
          <div class="toolbar">
            <div class="actions">
              <span class="previous"></span>
              <span class="next"></span>
            </div>

            <a href="http://exiagame.exia-reims.fr/"><div class="search"><p>http://exiagame.exia-reims.fr/</p></div></a>
            <div class="buttons">
              <div class="circle"></div>
              <div class="circle"></div>
              <div class="circle"></div>
            </div>
          </div>
          <img src="img/exiagame.png">
        </div>


      </div>
    </div>
    <div class="container-wide">
      <div id="small-pres">
        <h2>ExiaGame</h2>
      </div>
      <div id="information">
        <p><strong>Client :</strong> Association ExiaGame</p>
        <p><strong>Date :</strong> Hiver 2014</p>
        <p><strong>Lien :</strong> <a href="http://exiagame.exia-reims.fr" title="Site officiel Association ExiaGame">http://exiagame.exia-reims.fr</a></p>
        <p><strong>Technologies :</strong> PHP, HTML5, CSS3, Javascript, jQuery</p>
      </div>
      <div id="pres">
        <p>ExiaGame est une association à but non lucratif, dont je fais partie, qui organise chaque année plusieurs <abbr title="Une LAN party est un évènement rassemblant des personnes dans le but de jouer à des jeux vidéo en utilisant un réseau local.">LAN party</abbr> dans l'enceinte de l'école EXIA, école d'ingénieur en informatique.
           Dans l'optique d'améliorer sa visibilité ainsi que l'expérience utilisateur, j'ai réalisé un tout nouveau design reprenant les couleurs du logo de l'école. Cela donne 
           des tons sombres certes mais avec un très bon contraste et une très bonne lisibilité.
           Avec l'aide d'un autre membre de l'association, nous avons créé l'espace membre dans lequel les inscrits peuvent fonder leur équipe de jeu, consulter leur profil et le modifier, s'inscrire
           à un tournoi, consulter les règles des tournois, payer l'entrée directement en ligne via PayPal.
           Dans le but de toujours facilité la gestion de l'évènement pour les organisteurs, nous avons ensuite développé le <abbr title="Le Back-End est la partie invisible d'un site ou d'une application web, elle traite les données et sert d'interface d'administration.">Back-End</abbr> pour permettre aux organisateurs de gérer les inscriptions, de se faire contacter, de validité 
           l'arrivée des personnes à l'évènement ou encore de confirmer les inscriptions.</p>
           <p class="highlight">Un mois après la mise en ligne, plus de 200 personnes étaient inscrites et l'évènement fût un succès.</p>
      </div>
    </div>
  </section>

</div>

  <?php include('../footer.php'); ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','/js/analytics.js','ga');

  ga('create', 'UA-59276844-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
