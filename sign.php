<?php include('server-signup.php') ?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content="FindME is a perfect indoor Navigation System with the mission to ease the navigation in indoor environments.">
    <link rel = "stylesheet" type = "text/css" href = "Vendors/CSS/normalize.css">
    <link rel = "stylesheet" type = "text/css" href = "Vendors/CSS/Grid.css">
    <link rel = "stylesheet" type = "text/css" href = "Vendors/CSS/ionicons.min.css">
    <link rel = "stylesheet" type = "text/css" href = "Resources/CSS/style2.css">
    <link rel = "stylesheet" type = "text/css" href = "Resources/CSS/queries.css">
    <link rel = "stylesheet" type = "text/css" href = "Vendors/CSS/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet" type ="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="Resources/Favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="Resources/Favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="Resources/Favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="Resources/Favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="Resources/Favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="Resources/Favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="Resources/Favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="Resources/Favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="Resources/Favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="Resources/Favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="Resources/Favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="Resources/Favicon/favicon-16x16.png">
<link rel="manifest" href="Resources/Favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <title>Sign Up for more</title>
    
    
    
    
    </head>
    <body>
        <header>
            <nav>
                <div class="section-sign">
                <div class = "row">
                    <a href="index.html">
                    <img src = "Resources/IMG/Logo%20White.png" alt = "FindME logo" class = "logo">
                        </a>
                    <ul class = "main-nav js--main-nav">
                        <li><a href = "index.html">Home</a></li>
                        <li><a href = "login.php">LOGIN</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                    
                </div>
                </div>
            
            </nav>
                 
        </header>
        <section class="section-form" id="form">
            <div class="row">
            <h2>Please enter the below details</h2>
            
            </div>
            <div class="row">
              <form method="post" action = "sign.php" class="contact-form">
                <div class="row">
                    
                   
                  <div class="col span-1-of-3">
                    <label for="name">Username:-</label>
                    </div>
                    
                    <div class = "col span-2-of-3">
                     <input type="text" name = "username" placeholder = "Enter your Name" required>
                    
                    </div>
                  </div>
                  <div class="row">
                  <div class="col span-1-of-3">
                    <label for="email">E-mail:-</label>
                    </div>
                    
                    <div class = "col span-2-of-3">
                     <input type="email" name = "email"  placeholder = "Enter your E-mail" required>
                    
                    </div>
                  </div>
                    
                  <div class="row">
                  <div class="col span-1-of-3">
                    <label for="email">Password:-</label>
                    </div>
                    
                    <div class = "col span-2-of-3">
                     <input type="password" name = "password" placeholder = "Enter your password" required>
                    
                    </div>
                  </div>
               
                  <div class="row">
                  <div class="col span-1-of-3">
                    <label>&nbsp;</label>
                    </div>
                    
                    <div class = "col span-2-of-3">
                    <input type = "submit" name="reg_user" value="Submit!">
                           
                    </div>
                  </div>
                  <p>Already a member? <a href="login.php">Login</a></p>
                         
                </form>
            
            </div>
        
        </section>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="Vendors/JS/jquery.waypoints.min.js"></script>
        <script src="Resources/JS/script.js"></script>
    
    </body>
    
    
</html>