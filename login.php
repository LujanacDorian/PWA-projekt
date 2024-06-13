<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC STUDIO</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="login.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3fe3350f1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/validacija.js"></script> 
  </head>
  <body>
    
  <div class="container-fluid " style="background-color: #7F96FF;">
        <div class="row">
            <div class="col-12 text-center my-3">
                <a href="./index.html" class="navbar-brand">
                    <img src="img/logops.png" width="200px">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbck">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav"> 
                            <li class="nav-item">
                                <a class="nav-link text-light active" id="link-home" aria-current="page" href="./index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" id="link-proizvodi" href="./proizvodi.php">Proizvodi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" id="link-login" href="#"><i class="fa-solid fa-circle-user fa-xl" style="color: #5F19EA;"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>         
    </div>
   
    <div class="container my-5">
        <div class="d-flex justify-content-center">    
            <form action="validacija.php" method="post" name="prijava">
                Korisničko ime:
                <input type="text" id="username" name="username"><br>
                Lozinka:
                <input type="password" id="password" name="password"><br>
                Potvrda lozinke:
                <input type="password" id="confirm" name="confirm"><br><br>
                <button type="submit" id="button">Registracija</button><br>
            </form>
        </div>
    </div>

  </body>
</html>
