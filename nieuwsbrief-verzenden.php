<?php
session_start(); // Altijd nodig om te starten ook op andere paginas
include("includes/db_conn.php");
?>
<html lang="en">
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
        <a class="nav-link" href="index.php#flavours">Smaken</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#product">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.php">Bestellen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </nav>
  <div class="col-md-4 ml-auto">
      <a href="admin.php" class="btn-secondary btn-outline-dark btn-sm">Sign in.</a><a href="login.php" class="btn-secondary btn-outline-dark btn-sm">Log in.</a>
  </div>
  <div class="container">
    <h2 class="lemon">Verzend hier de nieuwsbrief</h2>
    <p>Hier kunt u promoties en nieuwe info versturen naar de klanten die zijn ingeschreven voor de nieuwsbrief!</p>

     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                  <label for="onderwerp">Onderwerp:</label>
                  <input type="onderwerp" class="form-control" name="onderwerp" id="onderwerp" required>
                </div>

        <div class="form-group">
            <label for="brief">Nieuwsbrief:</label>
            <textarea class="form-control" name="brief" id="brief" rows="3" required></textarea>
        </div>   
          </div>
        </div>
        <br>
        <input type="submit" value="VERZENDEN" class="btn btn-main">
    </form>
    </div>

<?php
// validatie
if(isset($_POST['onderwerp'])&&isset($_POST['brief'])){
    $_POST['onderwerp'] = htmlspecialchars($_POST['onderwerp']);
    $_POST['brief'] = htmlspecialchars($_POST['brief']);
  

    $email = $_POST['onderwerp'];
    $newsletter = $_POST['brief'];

    $query ="SELECT * FROM nieuwsbrief WHERE newsletter=2";
    if(!$result = mysqli_query($conn, $query)){
      echo "FOUT: Query kon niet uitgevoerd worden";
    }

    if(mysqli_num_rows($result)>0){
      echo "<h2>Nieuwsbrief versturen aan:</h2>";
      while($rij =  mysqli_fetch_array($result)){
        echo "<p>E-mail: {$rij['email']}</p>";
        $message = "
        <html>
        <head>
        <title>".$_POST["onderwerp"]."</title>
        </head>
        <body>
        <p>De nieuwe nieuwsbrief van Fruktovy!</p>
        <table>
        <tr>
        <td>".$_POST["brief"]."</td>
        <br>
        </tr>
        </table>
        </body>
        </html>
        ";
    
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
        // More headers
        $headers .= 'From: <info@fruktovy.be>' . "\r\n";
        $headers .= 'Cc: info@fruktovy.be' . "\r\n";
    
        if(mail($rij['email'],$email,$newsletter,$headers)){
            echo "<p>mail verstuurd</p>";
          } else {
            echo "<p>Fout bij het versturen van e-mail</p>";
          }
        }
    }
    
    // attempt insert query execution
    $sql = "INSERT INTO mail (onderwerp, brief) VALUES ('$onderwerp', '$brief')";
      if(mysqli_query($conn, $sql )){
        echo "<p>De nieuwsbrief is goed ontvangen. Versturen...</p>";
    } else{
        echo "ERROR: $sql. " . mysqli_error($conn);
    }

  
}
 
?>
<div class="footer">
      <p>Contacteer ons : Stefanie De Kesel dekesels@visocloud.org +32 494 81 50 17</p>
  </div>
  
  <script src="js/dist/main.min.js"></script>
</body>
</html>
