<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jérémy Halin | Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">Vous utilisez un navigateur <strong>obsolète</strong>. Merci de <a href="http://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre expérience utilisateur.</p>
<![endif]-->

<?php include('header.php'); ?>
<div class="title-background">
  <div class="container-1024">
    <h2>Contact</h2>
  </div>
</div>
<section class="container-1024">

  <?php

  foreach ($_REQUEST as $key => $val) 
  {
    $val = preg_replace("/[^_A-Za-z0-9-\.&=]/i",'', $val);
    $_REQUEST[$key] = $val;
  }  
  $err=false;
  $message="";
  if(isset($_POST['submit']) && $_POST['submit']=="Envoyer"){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['sujet']) && isset($_POST['message'])){
      if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email'])){
        if(strlen($_POST['message'])>100){
          $to      = 'hello@jeremyhalin.fr';
          $subject = ucfirst($_POST['sujet']);
          $message = $_POST['message'];
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
          $headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
          $headers .= 'To: Jérémy Halin <hello@jeremyhalin.me>' . "\r\n";
          $headers .= 'From: '.$_POST['name'].'<'.$_POST['email'].'>' . "\r\n";

          if(mail($to, $subject, "<p>".$message."</p>", $headers)){
            $message="<i class='fa fa-check'></i> Message envoyé, merci. Je vous répondrais au plus vite !";
          }
          else{
            $err=true;
            $message="<i class='fa fa-exclamation-triangle'></i> Une erreur est survenue. Votre message n'a pas été envoyé";
          }
        }
        else{
          $err=true;
          $message="<i class='fa fa-exclamation-triangle'></i> Merci de décrire votre projet plus précisemment";
        }
      }
      else{
        $message = "<i class='fa fa-exclamation-triangle'></i> Merci de remplir tous les champs";
      }
    }
  }

  ?>
  <p id="message-validation"><?php echo $message ?></p>
  <form class="formulaire" name="form" id="form" action="http://jeremyhalin.fr/contact" method="POST">
    <input type="text" class="input" placeholder="Nom..." name="name" id="nom" value="<?php echo $_POST['name'] ?>" required>
    <input type="email" class="input" placeholder="Email..." name="email" id="email" value="<?php echo $_POST['email'] ?>" required>
    <select name="sujet" id="sujet" required>
      <option value="" default>Sujet...</option>
      <option value="devis">Demande de devis</option>
      <option value="question">Question, proposition, demande</option>
      <option value="autre">Autre</option>
    </select>
    <textarea class="inputMessage" placeholder="Message..." name="message" id="message" value="<?php echo $_POST['message'] ?>" required></textarea>
    <input type="submit" name="submit" value="Envoyer" class="seethecaseblack" style="display:block;" onclick="return validForm()">
  </form>

</section>

<?php include('footer.php'); ?>
</body>
</html>
