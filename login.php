<?php
    include("includes/db_conn.php");
    session_start(); // Altijd nodig om te starten ook op andere paginas
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $unaam = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password=md5($password);
        $query = "SELECT * FROM login WHERE naam = '$unaam' AND wachtwoord = '$password' ";
       // or die("Failed Login".mysqli_error($conn));
        $result = mysqli_query($conn, $query);
        $res=mysqli_num_rows ( $result );
        $row = mysqli_fetch_array($result);
        if($row["naam"] == $unaam && $row["wachtwoord"] == $password && $res == 1){
            $_SESSION['name'] = $unaam;
            $_SESSION['wachtwoord'] = $password;
            $_SESSION['rank'] = $row["rank"];
            echo "Welkom, " .$_SESSION['name'] ;
            if( $_SESSION['rank'] == 2 ){
                ?>
                <a href='signin.php'> Controle Paneel </a>
                <?php
            }
            ?>
                <a href='uitlog.php'> Uitloggen </a>
				<a href='index.php'> Naar Index </a>
            <?php
        }
        else{
            echo "Foute gebruikersnaam/wachtwoord! Gelieve opnieuw te proberen";

}
    $result = mysqli_query($conn, $query);
    }
    else{
        ?>
        <!DOCTYPE html>
        <html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/dist/main.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruktovy</title>
</head>
<body>
<nav class="navbar navbar-light">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" width="150" height="45" class="d-inline-block align-top" alt="logo Fruktovy">
    </a>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.php">Bestellen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </nav>
  <div >
  <div class="col-md-4 ml-auto">
      <a href="signin.php" class="btn-secondary btn-outline-dark btn-sm">Sign in.</a><a href="login.php" class="btn-secondary btn-outline-dark btn-sm">Log in.</a>
  </div>
    <body>
      <div class="col-md-3 offset-md-3 pt-5 pb-5">
        <h1>Log in als admin</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="name">Naam : </label>
            <input type="text" name="username" placeholder="Naam" autofocus required />
            <br><br>
            <label for="name">Wachtwoord : </label>
            <input type="password" name="password" placeholder="Wachtwoord" required />
            <br><br>
            <input type="hidden" name="rank" placeholder="" />
            <br><br>
            <input type="submit" class="btn-secondary btn-outline-dark btn-sm" name="Submit" value="Log in." />
        </form>    
        
        </div>
    <div class="footer">
      <p>Contacteer ons : Stefanie De Kesel dekesels@visocloud.org +32 494 81 50 17</p>
    </div>

    </body>
</html>
<?php
    }
    $conn->close(); 
    ?>
        </div>
    </body>
<html>