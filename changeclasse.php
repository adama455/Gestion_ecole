<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Dash:lycée_classique_abidjan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/ionicons.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon/favicon1.png" type="image/x-icon">

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Martel+Sans:400,200,300,600,700,800,900|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- Wrap -->
<div id="wrap"> 
  
    <!-- header -->
    <header> 
      
      <!-- Logo -->
      <div class="container">
        <div class="logo"> <a href="#."><img  class="img-responsive" src="images/logooo.png" alt="logo" ></a> </div>
        
        <!-- INFO -->
        <div class="top-info-con">
          <ul>
            
            <!-- Call Us Now -->
            <li>
              <div class="media-left">
                <div class="icon"> <i class="icon-call-in"></i></div>
              </div>
              <div class="media-body">
                <h6>Appeler nous </h6>
                <p>+ ( 221 ) 745 29 40 </p>
              </div>
            </li>
            
            <!-- Email us -->
            <li>
              <div class="media-left">
                <div class="icon"> <i class="icon-envelope-open"></i></div>
              </div>
              <div class="media-body">
                <h6>Notre email</h6>
                <p>lkkane@gmail.com</p>
              </div>
            </li>
            
            <!-- Opening Time -->
            <li>
              <div class="media-left">
                <div class="icon"> <i class="icon-clock"></i></div>
              </div>
              <div class="media-body">
                <h6>Heure de cours </h6>
                <p>Lun - vend : 9h à 18h</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Navigation -->
      <nav class="navbar">
        <div class="container">
          <ul class="nav ownmenu">
            <li > <a href="index.html">Acceuil</a> </li>
            <li> <a href="#"> Eleve </a>
              <ul class="dropdown animated-3s fadeInRight">
                <li> <a href="ajouteleve.php">Ajouter un elève</a> </li>
                <li> <a href="listeeleve.php">Lister les elèves</a> </li>
              </ul>
            </li>
            <li class="active"> <a href="#"> Classe </a>
              <ul class="dropdown animated-3s fadeInRight">
                <li> <a href="ajoutclass.html">Ajouter une classe</a> </li>
                <li> <a href="listeclass.php">Lister les classes</a> </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    

      <!-- SUB BANNER -->
  <section class="sub-bnr">
    <div class="position-center-center">
      <div class="container"> <img src="images/sub-bnr-hr-up-contact.png" alt="tiret" >
        <h4>MENU</h4>
        <ol class="breadcrumb">
          <li><a href="#">Acceuil</a></li>
          <li class="active">Modifier une classe </li>
        </ol>
        <img src="images/sub-bnr-hr.png" alt="tiret" > </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!--CLASSE -->
    <section class="sendclasse-page padding-top-0"> 
      
      <!-- CLASSE FORM -->
      <div class="container">
        <div class="row margin-top-100 margin-bottom-100">
          <div class="col-md-10 col-sm-10 col-xs-12"> 
            
            <!-- Heading -->
            <div class="heading text-left">
              <h5>Modifier une classe</h5>
              <p>Modifier une classe dans le système. </p>
            </div>
            <div class="sendclasse-form"> 
              <!-- Form  -->
              <div class="margin-top-30">
                <div class="sendclasse-form"> 
                  
                  <!-- Success Msg -->
                  <div id="modifclasse_message" class="success-msg"> </div>
                  
                  <!-- FORM -->
                  <form id="sendclasse_form" class="sendclasse-form" method="post" onSubmit="return false">
                    <ul class="row">
                      
                      <li class="col-md-12 col-sm-12 col-xs-12">
                        <label>
                        <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "projet_edacy";
                    
                              // Create connection
                              $conn = mysqli_connect($servername, $username, $password, $dbname);
                              // Check connection
                              if (!$conn) {
                                die("Pas de connection: " . mysqli_connect_error());
                            }
                    
                            $sql = "SELECT  nom ,id_classe  FROM classe WHERE id_classe=".$_GET['id'];
                            $result = mysqli_query($conn, $sql);
                    
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                 
                                  ?>
                                  <input type="text" class="form-control" name="classe" id="classe" value="<?php echo ($row["nom"]);?>">
                                 
                              </label>
                           </li>
                           <li class="col-md-12 col-sm-12 col-xs-12">
                             <button type="submit" value="submit" class="btn" id="btn_submit" onClick="modifc(<?php echo ($row["id_classe"]);?>);">Ajouter <span><i class="ion-ios-arrow-thin-right"></i></span></button>
                           </li>
                          <?php
                            }
                            }
                             mysqli_close($conn);
                          ?>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
         
        </div>
      </div>
      
    </section>
  </div>
  
    <!--======= FOOTER =========-->
    <footer>
      <div class="container"> 
        <div class="footer-info">
          <div class="container">
            <div class="row"> 
              
              <!-- About -->
              <div class="col-md-4 col-sm-12 col-xs-12"> <img class="margin-bottom-30" src="images/logooo.png" alt="logo" >
                <p>Application de gestion<br>
                
                <p>Le Lycée Khar KANE de GOSSAS </p>
              </div>
              
              <!-- Service provided -->
              <div class="col-md-4 col-sm-12 col-xs-12">
                <h6>Notre service</h6>
                <ul class="links">
                  <li> <a href="ajouteleve.php">Ajouter un elève</a> </li>
                  <li> <a href="listeeleve.php">Lister les elèves</a> </li>
                  <li> <a href="ajoutclass.html">Ajouter une classe</a> </li>
                  <li> <a href="listeclass.php">Lister les classes</a> </li>
                </ul>
              </div>
              
              <!-- Quote -->
              <div class="col-md-4 col-sm-12 col-xs-12">
                <h6>Un message</h6>
                <div class="quote">
                  <form>
                    <input class="form-control" type="text" placeholder="Name">
                    <input class="form-control" type="text" placeholder="Phone No">
                    <textarea class="form-control" placeholder="Messages"></textarea>
                    <button type="submit" class="btn">Envoyer nous maintenant<span><i class="ion-ios-arrow-thin-right"></i></span></button>
                  </form>
                </div>
              </div>
            </div>
            
            <!--======= Footer Info =========-->
            <div class="foot-info-con">
              <ul class="row">
                
                <!-- Call Us Now -->
                <li class="col-md-4 col-sm-6 col-xs-6">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-call-in"></i></div>
                  </div>
                  <div class="media-body">
                    <h6>Appeler nous </h6>
                    <p>+ ( 221 ) 745 29 40 </p>
                  </div>
                </li>
                
                <!-- Email us -->
                <li class="col-md-4 col-sm-6 col-xs-6">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-envelope-open"></i></div>
                  </div>
                  <div class="media-body">
                    <h6>Ecrivez nous</h6>
                    <p>lkkane@gmail.com</p>
                  </div>
                </li>
                
                
                <!-- Opening Time -->
                <li class="col-md-4 col-sm-6 col-xs-6">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-printer"></i></div>
                  </div>
                  <div class="media-body">
                    <h6>Heure de cours </h6>
                    <p>Lun - vend : 9h à 18h</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!--======= RIGHTS =========-->
    <div class="rights">
      <div class="container">
        <p>Copyrights &copy; 2021  tout droit réservé </p>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.12.4.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/own-menu.js"></script> 

  <!-- RS5.0 Core JS Files -->
  
  <script  src="js/jquery.themepunch.tools.min.js?rev=5.0"></script>
  <script  src="js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
  <script  src="js/revolution.extension.actions.min.js"></script>
  <script  src="js/revolution.extension.carousel.min.js"></script>
  <script  src="js/revolution.extension.kenburn.min.js"></script>
  <script  src="js/revolution.extension.layeranimation.min.js"></script>
  <script  src="js/revolution.extension.migration.min.js"></script>
  <script  src="js/revolution.extension.navigation.min.js"></script>
  <script  src="js/revolution.extension.parallax.min.js"></script>
  <script  src="js/revolution.extension.slideanims.min.js"></script>
  <script  src="js/revolution.extension.video.min.js"></script>
  <!-- my script--> 
  <script src="js/main.js"></script>

</body>
</html>
