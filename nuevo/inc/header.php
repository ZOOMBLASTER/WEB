<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();



spl_autoload_register(function($classes){

  include 'classes/'.$classes.".php";

});


$users = new Users();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Ni Hyruuya Na'</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
  </head>
  <body>


<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  // Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  // <strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}



 ?>



    
    <div class="container">
    <nav class="nav container">
            <a href="index.php" class="nav__logo">NI HY<strong>RUUYA NA'</strong></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="agua_dulce.php" class="nav__link">Agua dulce</a>
                    </li>

                    <li class="nav__item">
                        <a href="agua_salada.php" class="nav__link">Agua salada</a>
                    </li>

                    <li class="nav__item">
                        <a href="agua_salobre.php" class="nav__link">Agua salobre</a>
                    </li>

                    <li class="nav__item">
                        <a href="simulador.php" class="nav__link">Simulador</a>
                    </li>

                    <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1' || Session::get('roleid') == '2') { ?>
              <li class="nav__item">
                  <a class="nav__link" href="users.php"><i class="nav__link"></i>User lists </span></a>
              </li>
              
            <?php  } ?>
            <li class="nav__item
            <?php

      				$path = $_SERVER['SCRIPT_FILENAME'];
      				$current = basename($path, '.php');
      				if ($current == 'profile') {
      					echo "active ";
      				}

      			 ?>

            ">

              <a class="nav__link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav__item">
                  <a class="nav__link" href="?action=logout"><i class="nav__link"></i><i class="fas fa-sign-out-alt mr-2"></i>Logout</span></a>
              </li>
          <?php }else{ ?>

              <li class="nav__link

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'register') {
                            echo " active ";
                          }

                         ?>">
                <a class="nav__link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a>
              </li>
              <li class="nav__link
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
                <a class="nav__link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
              </li>

          <?php } ?>



          <div class="nav__actions">
                <!-- Search button -->
                <i class="ri-search-line nav__search" id="search-btn"></i>

                
            </div>
                </ul>
            </div>

        

           


          
      </nav>
