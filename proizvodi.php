<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC STUDIO</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="proizvodi.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3fe3350f1.js" crossorigin="anonymous"></script>
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
                                <a class="nav-link text-light" id="link-proizvodi" href="#">Proizvodi</a>
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

        $id = 1;
    ?>
    
    
    <div class="container my-5 ">
    <h2>LED monitori</h2>
        <div class="row mt-5">
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor1.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor2.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor3.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor4.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor5.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor6.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
        </div>  
        <div class="row my-5">
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor7.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor8.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
            </div>
            <div class="col-4 text-center">
                <a href="monitor.php">
                    <img src="img/monitor9.jpg" width="200px">
                </a>
                <p>
                    <?php                
                        $query = "SELECT * FROM monitori WHERE id = '$id'";

                        $result = mysqli_query($dbc, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['marka'] . ' ' . $row['model'] . '<br />' . ' ' . $row['cijena'] . '<br />';
                            }
                        }
                        else{
                            echo "Ne moze se pristupiti podacima: %s\n", mysqli_error($dbc);
                        }

                        $id++;
                    ?>
                </p>
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