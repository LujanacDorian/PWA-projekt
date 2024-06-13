<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC STUDIO</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e3fe3350f1.js" crossorigin="anonymous"></script>
    <link href="monitor.css" rel="stylesheet">
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
                                <a class="nav-link text-light" id="link-login" href="./login.php"><i class="fa-solid fa-circle-user fa-xl"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>         
    </div>
   
    

    <?php
        $dbc = mysqli_connect('localhost', 'root', '', 'pcstudio') or
            
            die('Error connecting to MySQL server.'.mysqli_connect_error());

        mysqli_set_charset($dbc, 'utf8');

        $query = "SELECT * FROM monitori WHERE id = 1";

        $result = mysqli_query($dbc, $query);

    ?>

    <div class="container my-5">
    <a href="./proizvodi.php"><i class="fa-solid fa-angle-left fa-3x"></i></a>
        <div class="row my-3">
            <div class="col-7">
                <?php
                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<h1>' . $row['marka'] . ' ' . $row['model'] . ' ' . '</h1><br />';
                        }
                    }
                    else{
                        echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                    }
                ?>
                <img src="img/monitor1.jpg" width="700px">
            </div>
            <div class="col-5 info">
                <p class="opis">
                <?php
                    $result = mysqli_query($dbc, $query);

                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<p>Veličina</p> <h3>' . $row['velicina'] . '</h3><hr><p>Rezolucija</p><h3>' . $row['rezolucija'] . '</h3><hr><p>Panel</p><h3>' . $row['panel'] . '</h3><hr><p>Osvježavanje</p><h3>' . $row['osvjezavanje'] . '<br />' . '</h3><br />';
                        }
                    }
                    else{ 
                        echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                    }
                ?>  
                </p>
                              
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>€ 766,35</h2>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12 detalji">
                <?php
                    $result = mysqli_query($dbc, $query);

                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<p>Marka:  ' . $row['marka'] . '<br />Model:  ' . $row['model'] . '<br /> Veličina ekrana:  ' . $row['velicina'] . '<br />Rezolucija:  ' . $row['rezolucija'] . '<br />Panel ekrana:  ' . $row['panel'] . '<br />Aspect ratio:  ' . $row['aspect_ratio'] . '<br />Osvježavanje:  ' .  $row['osvjezavanje'] . '<br />' . '</p><br />';
                        }
                    }
                    else{
                        echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                    }
                ?>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et fringilla eros, ut vulputate sapien. Nulla non nisi sem. Aenean sed ullamcorper sapien. 
                    Fusce sit amet pellentesque dolor. Proin mollis nisi risus, id viverra magna consectetur a. Aliquam interdum lorem sit amet bibendum congue. Integer sed 
                    rutrum erat. Duis sollicitudin varius libero et ornare. Nulla vehicula, diam eget facilisis venenatis, nisi magna cursus felis, sed feugiat velit risus 
                    vitae ante. Praesent eu condimentum ipsum. Sed turpis mi, dignissim eu semper sed, finibus eget felis. Praesent rhoncus porta sapien, a auctor elit tincidunt 
                    et. Sed commodo, felis quis consectetur porttitor, sapien nisi rhoncus sem, ut rhoncus ex magna ut mi.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container mt-5">
            <hr>
            <h3>Slični proizvodi</h3>
            <div class="row justify-content-center mt-5">
                <div class="col-3">
                    <img src="img/monitor2.jpg" height="200px">
                </div> 
                <div class="col-3">
                    <img src="img/monitor3.jpg" height="200px">
                </div> 
                <div class="col-3">
                    <img src="img/monitor4.jpg" height="200px">
                </div>        
            </div>
        </div>
    </div>

    <footer class="container-fluid text-light mt-5 bg-dark" id="foot">
        <div class="row">
            <div class="col-sm-4 text-center">
                <p>Dorian Lujanac</p>
            </div>
            <div class="col-sm-4 text-center">
                <p>TVZ @ 2024</p>
            </div>
            <div class="col-sm-4 text-center">
                <i class="fa-sharp fa-regular fa-copyright fa-2xs" style="color:white;">Copyright</i>
            </div>
        <div>
    </footer>

    


    <?php        
        mysqli_close($dbc);
    ?>

  </body>
</html>