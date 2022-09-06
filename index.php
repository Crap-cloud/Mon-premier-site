<!DOCTYPE html>
<html lang="fr">

  <!-- HEAD -->
  <head>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Yanni Lapoyade">
    <meta name="generator" content="Jekyll v3.8.6">
    <title> Mon site </title>
  </head>
  <!-- HEAD -->

  <!-- BODY -->
  <body>
    <header>
      <!-- Chargement de la page -->
      <div class="load">
        <span class="lettres">L</span>
        <span class="lettres">O</span>
        <span class="lettres">A</span>
        <span class="lettres">D</span>
        <span class="lettres">I</span>
        <span class="lettres">N</span>
        <span class="lettres">G</span>
      </div>

      <!-- Barre de navigation -->
      <nav class="nav">
        <div class="container">
          <div class="logo">
            <a href="#">Lapoyade Yanni</a>
          </div>
          <div id="mainListDiv" class="main_list">
              <ul class="navlinks">
                  <li><a class="fermer" href="#About">About</a></li>
                  <li><a class="fermer" href="#Works">Works</a></li>
                  <li><a class="fermer" href="#Contact">Contact</a></li>
              </ul>
          </div>

          <!-- Menu déroulant pour téléphone -->
          <span class="navTrigger">
              <i></i>
              <i></i>
              <i></i>
          </span>
        </div>
      </nav>
    </header>

    <!-- Fond d'écran et titre -->
    <main>
      <section class="home">
        <div id="titre">
          <h1 class="rotate">Développeur informatique </br> Conception de site web</h1>
        </div>
      </section>

      <!-- About me -->
      <section class="plushaut" id="About">
        <div class="about-container">
          <h2>About me</h2>
          <p class="bloc">Etudiant français en maîtrise informatique pour l'intelligence et la gestion de données à l'UQAM, j'aimerais peaufiner mon apprentissage par le biais de projets concrets. Toujours en quête de nouvelles expériences, je suis à la recherched'un premier emploi à temps plein dans le domaine informatique à Montréal et plus précisément en tant que développeur web junior front-end ou back-end.</p>
        </div>
        <div class="about-stats">
          <h3 id="stats-title"> My skills</h3>
          <div class="progress-bars">
            <div class="progress-bar">
              <p class="prog-title">HTML5</p>
              <div class="progress-con">
                <p class="prog-text">80%</p>
                <div class="progress">
                  <span class="html"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">CSS3</p>
              <div class="progress-con">
                <p class="prog-text">70%</p>
                <div class="progress">
                  <span class="css"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">Javascript</p>
              <div class="progress-con">
                <p class="prog-text">60%</p>
                <div class="progress">
                  <span class="js"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">PHP</p>
              <div class="progress-con">
                <p class="prog-text">50%</p>
                <div class="progress">
                  <span class="php"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- My works -->
      <section class="plushaut" id="Works">
        <div class="works-container">
          <h2>My Works</h2>
          <p class="bloc port-txt"> Voici quelques projets que j'ai réalisés avec différents langage de programmations.</p>
        </div>
        <div class="works-portfolios">
          <div id="portfolioIitemDiv" class="portfolio-item">
            <div class="image">
              <img src="images/website-4.jpg" alt="Mon premier site de cuisine">
            </div>
            <div id="1" class="hover-item item" onclick="getId(this.id);">
              <h4>KitchN'Cook</h4>
            </div>
            <aside id="modal1" class="modal" style="display:none">
              <div id="wrapper" class="modal-wrapper">
                <img class="slide" src="images/website-4.jpg" alt="Site de cuisine image 1" >
                <img class="slide" src="images/website-5.jpg" alt="Site de cuisine image 2">
                <img class="slide" src="images/website-6.jpg" alt="Site de cuisine image 3">
                <img class="slide" src="images/website-7.jpg" alt="Site de cuisine image 4">
                <img class="slide" src="images/website-8.jpg" alt="Site de cuisine image 5">
                <div class="arrow">
                  <i class="fa-solid fa-square-caret-left arrowleft" onclick="setSlides(-1)"></i>
                  <i class="fa-solid fa-square-caret-right arrowright" onclick="setSlides(1)"></i>
                </div>
              </div>
            </aside>
          </div>
          <div id="portfolioIitemDiv" class="portfolio-item">
            <div class="image">
              <img src="images/satellite-1.png" alt="Orbite des satellites autour de la Terre">
            </div>
            <div id="2" class="hover-item item" onclick="getId(this.id);">
              <h4>Satellite</h4>
            </div>
            <aside id="modal2" class="modal" style="display:none">
              <div id="wrapper" class="modal-wrapper">
                <img src="images/satellite-1.png" alt="Vue des satellites sur la Terre et leurs orbites">
                <img src="images/satellite-2.png" alt="Vue des satellites sur la Terre et leurs orbites">
              </div>
            </aside>
          </div>
          <div class="portfolio-item">
            <div class="image">
              <img src="images/blank.jpg" alt="">
            </div>
            <div>
              <h4></h4>
            </div>
          </div>
          <div class="portfolio-item">
            <div class="image">
              <img src="images/blank.jpg" alt="">
            </div>
            <div>
              <h4></h4>
            </div>
          </div>
        </div>  
      </section>


      <!-- Contact -->
      <section class="plushaut" id="Contact">
        <?php
        if (!empty($_POST["send"])) {
          $email = $_POST['email'];
          $message = $_POST['message'];
          $name = $_POST['name'];
          $subject = $_POST['subject'];

          $to = 'arrdoyie@gmail.com';
          $text = "Name : " . $name . "\r\nEmail : ". $email . "\r\nMessage : " . $message;
          $headers = "From: noreply@monsite.com";

          if(mail($to, $subject, $text, $headers)) {
            $mail_msg = "Vos informations de contact ont été reçues avec succés.";
            $type_mail_msg = "success";
          }
          else {
            $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
            $type_mail_msg = "error";
          }
        }
        ?>
        <div class="grid">   
          <div class="carrenoir">
            <div class="txt">
              <h3 class="color">Why would you contact me ?</h3>
              <i>"Hello everyone, I'm a junior web developper interested in new opportunities ! I'm looking for my first experience in companies or in freelance. I would like to start with small projects. However, if you need anything else, if you want to ask me something or just give me your feelings about my website, please fill this form, I'll be grateful !" </i>
              <span id="tilde">~</span>
              <p>Bonjour à tous, je suis un développeur web junior intéressé par de nouvelles opportunités ! Je suis à la recherche de ma première expérience en entreprise ou en freelance. J'aimerais commencer par de petits projets. Cependant, si vous avez besoin de quelque chose d'autre, si vous voulez me poser une question ou simplement me donner votre avis sur mon site, veuillez remplir ce formulaire, je vous en serai reconnaissant !</p>
            </div>
          </div>
          <div id="box">
            <form id="form" method="post" autocomplete="off" action="index.php#form" onsubmit="return validate()" enctype="multipart/form-data">
              <h3>Send me a message</h3>
              <label>Name<span>*</span> :</label>
              <div class="col-1">
                <input type="text" id="name" class="effect-1" name="name" placeholder="Fill with your name" required>
                <span class="border-focus"></span>
              </div>
              <label>Email<span>*</span> :</label><span id="info" class="info"></span>
              <div class="col-1">
                <input type="text" type="email" id="email" class="effect-1" name="email" placeholder="Now your email adress" required>
                <span class="border-focus"></span>
              </div>
              <label>Subjet<span>*</span>  :</label>
              <div class="col-1">
                <input type="text" id="subject" class="effect-1" name="subject" placeholder="Why do you contact me" required>
                <span class="border-focus"></span>
              </div>
              <label>Message<span>*</span>  :</label>
              <div class="col-1">
                <textarea type="text" id="message" class="effect-2" name="message" placeholder="Now write your message" required></textarea>
                <span class="border-focus">
                  <i></i>
                </span>
              </div>
              <input type="submit" name="send" value="Send me your message !"/>
              <div id="statusMessage"> 
                <?php if (! empty($mail_msg)) { ?>
                  <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                <?php } ?>
              </div>
            </form>
          </div>         
        </div>
      </section>

      <!-- Jquery needed -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="js/app.js"></script>
      </main>

    <!-- Footer -->
    <footer>
    </footer>
  </body>
  <!-- BODY -->
</html>