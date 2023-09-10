<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CryptoClub - Projet_Padlet</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/eleganter-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="animation.php">Gallerie</a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="session.php">Session</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/header.jpeg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">BitClub<br> Par ce que décentralisation ne signifie pas désunion</h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">Nous sommes un club de passionné de bitcoin, des monnaies décentralisées et des blockchains.</p></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
         <table>
            <thead>
              <tr>
                <th>Titre</th>
                <th>Texte</th>
                <th>Auteur</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //connexion a la base de donnees
                $mysqli = new mysqli('obiwan.univ-brest.fr','zbatengsa','9kubltrw','zfl2-zbatengsa_1');

                if ($mysqli->connect_errno)
                {
                  // Affichage d'un message d'erreur
                  echo "Error: Problème de connexion à la BDD \n";
                  echo "Errno: " . $mysqli->connect_errno . "\n";
                  echo "Error: " . $mysqli->connect_error . "\n";
                  // Arrêt du chargement de la page
                  exit();
                }
                // Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères 
                if (!$mysqli->set_charset("utf8")) {
                printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                exit();
                }
                //echo ("Connexion BDD réussie !");
                $requete="SELECT * FROM t_actualite_act where act_etat='P';";
                $requete_cgf_nom="SELECT cgf_nom FROM t_configuration_cfg;";
                $requete_info_asso = "SELECT cfg_mot_president FROM t_configuration_cfg;";
                //Affichage de la requête préparée
                //echo ($requete);
                //echo ($requete_cgf_nom);
                //echo ($requete_info_asso);

                $result1 = $mysqli->query($requete);
                $result_cgf_nom = $mysqli ->query($requete_cgf_nom);
                $result_info_asso = $mysqli ->query($requete_info_asso);

                if ($result_cgf_nom == false) //Erreur lors de l’exécution de la requête 
                { 
                  echo "Error: La requête a echoué  \n";
                  echo "Errno: " . $mysqli->errno . "\n";
                  echo "Error: " . $mysqli->error . "\n";
                  exit();
                }
                else 
                {
                  echo "<br />";
                  //echo($result_cgf_nom->num_rows); //Donne le bon nombre de lignes récupérées
                  echo "<br />";
                  $nom_asso = $result_cgf_nom ->fetch_assoc();
                  echo ($nom_asso['cgf_nom']);

                }

                if ($result_info_asso == false) //Erreur lors de l’exécution de la requête 
                { // La requête a echoué
                  echo "Error: La requête a echoué  \n";
                  echo "Errno: " . $mysqli->errno . "\n";
                  echo "Error: " . $mysqli->error . "\n";
                  exit();
                }
                else 
                {
                  echo "<br />";
                  //echo($result_info_asso->num_rows); //Donne le bon nombre de lignes récupérées
                  echo "<br />";
                  $info_asso = $result_info_asso ->fetch_assoc();
                  echo ($info_asso['cfg_mot_president']);

                }

                if ($result1 == false) //Erreur lors de l’exécution de la requête 
                { 
                  echo "Error: La requête a echoué  \n";
                  echo "Errno: " . $mysqli->errno . "\n";
                  echo "Error: " . $mysqli->error . "\n";
                  exit();
                }
                else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
                {
                  echo "<br />";
                  //echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
                  echo "<br />";

                  while ($actu = $result1->fetch_assoc()) 
                  {
                    echo "<tr>";
                    echo "<td>".$actu["act_titre"]."</td>";
                    echo "<td>".$actu["act_texte"]."</td>";
                    echo "<td>".$actu["cpt_pseudo"]."</td>";
                    echo "<td>".$actu["act_date"]."</td>";
                    echo "</tr>";
                  }
                }
                //Ferme la connexion avec la base MariaDB
                $mysqli->close();
              ?>
            </tbody>
         </table>

      </section>
      
      <!-- Section 1 -->
      <section class="section">
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">A propos de nous</h2>
          <hr class="break-small background-primary break-center">
        </div>
        <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-2">
              <p class="h1 text-size-30 margin-m-bottom-30 text-primary text-line-height-1 text-right">Nous Sommes<br> BitClub</p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 margin-m-bottom-30 text-dark">Il nous a semblé nécessaire de proposer une Association pour unir et faire résonner des voix audibles et fortes, pour la défense et l’illustration des cryptomonnaies par la publication d’écrits de qualité, l’organisation d’évènements originaux et la multiplication de rencontres fructueuses.  </p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 text-dark">Il semble très adapté de s’appuyer sur un support numérique. Nous pensons de ce fait qu’il serait intéressant de prendre le site internet Le Coin Coin, qui vient d’être restructuré, comme base pour y développer un écosystème de services.</p>
            </div>
          </div>
        </div>    
      </section>
      
      <!-- Section 2 -->
      <section class="full-width">
        <div class="s-12 m-12 l-6">  
          <img src="img/img-12.jpg" alt="">
        </div>
        <div class="s-12 m-12 l-6">
          <div class="padding-2x">
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-drop icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Atelier 1: La Blockchain</h3>
                <p class="text-dark">Venez comprendre la technologie révolutionnaire qui se cache derrière la "Blochain".
                </p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-screen-smartphone icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Atelier 2: Bitcoin </h3>
                <p class="text-dark">Bitcoin example d'application de la technologie de la blockchain.</p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-heart icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Atelier 3: Web3.0</h3>
                <p>Deuxième application de la blockchain afin de nous donner le contrôle de nos informations.</p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-chart icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Atelier 4: Débat reflexion</h3>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-globe-alt icon3x text-dark"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-size-25 margin-bottom-0">Et tellement plus...</h3>
                <p class="text-dark">Organisation de meeting autour des monnaies décentralisé et de la blockchain ouverte à toute personne qui souhaite, <br> partager sa connaissance sur le sujet ou juste simplement partager son opinion à d'autres personnes.</p>            
              </div>
            </div> 
          </div>
        </div>
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white" >  
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">les statistique des cryptos monnaies</h2>
          <hr class="break-small background-primary break-center">
          <div class="margin margin-top-bottom-50">
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-25  text-m-size-20"> 22,431</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin"> Nombre de Cryptos</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-25  text-m-size-20"> $1,072,740,824,487</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Market Cap</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-25  text-m-size-20"> $42,638,385,109</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">24h Vol</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-25  text-m-size-20">BTC: 41.7% ETH: 18.8%</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Dominance</p> 
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 5 -->    
      <section class="section background-white text-center">
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">NOS MEMBRES</h2>
          <hr class="break-small background-primary break-center">
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="img/testimonials-04.png" alt="">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Scott Star / CEO / Company</p>
              </div>
            </div>
            <div class="item"> 
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="img/testimonials-05.png" alt="">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Mark Stoner / Web Developer / Company</h5>
              </div>
            </div>
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="img/testimonials-06.png" alt="">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Jane Naismith / Web Designer / Company</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <!-- FOOTER -->
    <footer>

      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1459734.5702753505!2d16.91089086619977!3d48.577103681657675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1457640551761" width="100%" height="450" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Adresse Postale</h3>
                  <p>
                      <?php
                        //connexion a la base de donnees
                        $mysqli = new mysqli('obiwan.univ-brest.fr','zbatengsa','9kubltrw','zfl2-zbatengsa_1');
                        if ($mysqli->connect_errno)
                        {
                          echo "Error: Problème de connexion à la BDD \n";
                          echo "Errno: " . $mysqli->connect_errno . "\n";
                          echo "Error: " . $mysqli->connect_error . "\n";
                          exit();
                        }
                        if (!$mysqli->set_charset("utf8")) {
                        printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                        exit();
                        }
                        //echo ("Connexion BDD réussie !"); 
                        $requete_addresse_postale="SELECT cfg_adr_postale FROM t_configuration_cfg;";
                        //echo ($requete_addresse_postale);
                        $result_adresse_postale = $mysqli->query($requete_addresse_postale);

                        if ($result_adresse_postale == false)  
                        { 
                          echo "Error: La requête a echoué  \n";
                          echo "Errno: " . $mysqli->errno . "\n";
                          echo "Error: " . $mysqli->error . "\n";
                          exit();
                        }
                        else 
                        {
                          echo "<br />";
                          //echo($result_adresse_postale->num_rows); 
                          echo "<br />";
                          $adresse_postale = $result_adresse_postale ->fetch_assoc();
                          echo ($adresse_postale['cfg_adr_postale']);

                        }
                        $mysqli->close();
                      ?>
                    </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>
                       <?php
                            //connexion a la base de donnees
                            $mysqli = new mysqli('obiwan.univ-brest.fr','zbatengsa','9kubltrw','zfl2-zbatengsa_1');
                            if ($mysqli->connect_errno)
                            {
                              echo "Error: Problème de connexion à la BDD \n";
                              echo "Errno: " . $mysqli->connect_errno . "\n";
                              echo "Error: " . $mysqli->connect_error . "\n";
                              exit();
                            }
                            if (!$mysqli->set_charset("utf8")) {
                            printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                            exit();
                            }
                            //echo ("Connexion BDD réussie !"); 
                            $requete_adresse_mail="SELECT cfg_adr_email FROM t_configuration_cfg;";
                            //echo ($requete_adresse_mail);
                            $result_adresse_mail = $mysqli->query($requete_adresse_mail);
                            if ($result_adresse_mail == false) 
                            { 
                              echo "Error: La requête a echoué  \n";
                              echo "Errno: " . $mysqli->errno . "\n";
                              echo "Error: " . $mysqli->error . "\n";
                              exit();
                            }
                            else 
                            {
                              echo "<br />";
                             //echo($result_adresse_mail->num_rows); 
                              echo "<br />";
                              $adresse_mail = $result_adresse_mail ->fetch_assoc();
                              echo ($adresse_mail['cfg_adr_email']);

                            }
                            //Ferme la connexion avec la base MariaDB
                            $mysqli->close();
                        ?>
                   </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Nous contacter</h3>
                  <p>
                      <?php
                            //connexion a la base de donnees
                            $mysqli = new mysqli('obiwan.univ-brest.fr','zbatengsa','9kubltrw','zfl2-zbatengsa_1');
                            if ($mysqli->connect_errno)
                            {
                              echo "Error: Problème de connexion à la BDD \n";
                              echo "Errno: " . $mysqli->connect_errno . "\n";
                              echo "Error: " . $mysqli->connect_error . "\n";
                              exit();
                            }
                            if (!$mysqli->set_charset("utf8")) {
                            printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                            exit();
                            }
                            //echo ("Connexion BDD réussie !");
                            $requete_tel="SELECT cfg_num_tel FROM t_configuration_cfg;";
                            //echo ($requete_tel);
                            $result_tel = $mysqli->query($requete_tel);
                            if ($result_tel == false) //Erreur lors de l’exécution de la requête 
                            { 
                              echo "Error: La requête a echoué  \n";
                              echo "Errno: " . $mysqli->errno . "\n";
                              echo "Error: " . $mysqli->error . "\n";
                              exit();
                            }
                            else 
                            {
                              echo "<br />";
                              //echo($result_tel->num_rows); //Donne le bon nombre de lignes récupérées
                              echo "<br />";
                              $num_tel = $result_tel ->fetch_assoc();
                              echo ($num_tel['cfg_num_tel']);
                            }
                            //Ferme la connexion avec la base MariaDB
                            $mysqli->close();
                          ?>
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
          <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
        </div>
        <div class="s-12 l-6">
          <a class="right text-size-12" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>