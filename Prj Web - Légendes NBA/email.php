<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nous Contacter</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="logo.png">


        </script>
    </head>


<body>


    <div>
        <ul class="a">
            <li><a class="active" href="accueil.html"><i class="fa fa-fw fa-home"></i> Accueil </a></li>
            <li><a href="temoignages.html"> Légendes NBA </a></li>
            <li><a href="forum.html"> Quiz </a></li>
            <li><a href="A_Propos.html"> À propos</a></li>
            <li><a href="email.php"> Contactez-nous</a></li>
        </ul>
    </div>	
	<header class="header" >
			<h1 class="jing">Nous contacter</h1>
	</header>


<div class="container">
  <form method="post">
    <label for="prénom">Prénom</label>
    <input type="text" id="prénom" name="prénom" placeholder="Prénom...">

    <label for="ndf">Nom de famille</label>
    <input type="text" id="ndf" name="ndf" placeholder="Nom de famille...">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="azerty@exemple.com...">

    <label for="message">Votre message</label>
    <textarea id="message" name="message" placeholder="Écrivez ici..." style="height:200px"></textarea>

    <input type="Submit" value="Envoyer">
  </form>
    
  <?php
    if(isset($_POST['message'], $_POST['prénom'], $_POST['ndf'], $_POST['email']))
    {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h2> Message provenant de Légendes NBA </h2>
        <p><b>Prénom : </b>' . $_POST['prénom'] . '<br><br>
        <b>Nom : </b>' . $_POST['ndf'] . '<br><br>
        <b>Email : </b>' . $_POST['email'] . '<br><br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('kevinsri@live.fr', '< Message depuis Nous Contacter >', $message, $entete);

        if($retour)
        {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }

  ?>

</div>



<footer>
        <div>
            <ul class="b">
                <br>
                <li class="dos"><a href="accueil.html"> Accueil </a></li>
                <li class="dos"><a href="temoignages.html"> Légendes NBA </a></li>
                <li class="dos"><a href="forum.html"> Quiz </a></li>
                <li class="dos"><a href="A_Propos.html"> À Propos </a></li>
                <li class="dos"><a href="email.php"> Contactez-nous </a></li>
                <li class="dob"><a href="https://www.facebook.com/L%C3%A9gendes-NBA-107172257706119/?view_public_for=107172257706119" class="fa fa-facebook"></a>
                <li class="dob"><a href="https://twitter.com/alex_mtns" class="fa fa-twitter"></a>
                <li class="dob"><a href="https://www.snapchat.com/add/kevin.korver" class="fa fa-snapchat-ghost"></a>
                <li class="dob"><a href="https://www.instagram.com/alex_mtns/" class="fa fa-instagram"></a>
            </ul>
        </div>


</footer>




        <footer class="certif">
            <p>Le Salon © 2020. Tous droits réservés</p>
        </footer>

</body>
</html>