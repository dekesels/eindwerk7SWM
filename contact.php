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
    <a class="navbar-brand" href="#">
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
    <h2 class="lemon">CONTACTEER ONS</h2>
    <p>We helpen je graag verder. Met een duidelijk antwoord op je vraag bijvoorbeeld, en dat zo snel mogelijk.
        Ook is het voor bedrijven mogelijk om proefpakketten aan te vragen. Graag tot binnenkort!</p>

     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                  <label for="voornaam">Voornaam *</label>
                  <input type="text" class="form-control" name="voornaam" id="voornaam" autofocus required>
                </div>
                <div class="form-group">
                 <label for="naam">Naam *</label>
                  <input type="text" class="form-control" name="naam" id="naam" required>
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                  <label for="telefoon">Telefoon *</label>
                  <input type="tel" class="form-control" name="telefoon" id="telefoon" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                  <label for="adres">Adres</label>
                  <input type="text" class="form-control" name="adres" id="adres">
                </div>
                <div class="form-group">
                  <label for="woonplaats">Woonplaats</label>
                  <input type="text" class="form-control" name="woonplaats" id="woonplaats">
                </div>
                <div class="form-group">
                  <label for="postcode">Postcode</label>
                  <input type="text" class="form-control" name="postcode" id="postcode">
                </div>
                <div class="form-group">
                  <label for="bedrijf">Bedrijf</label>
                  <input type="text" class="form-control" name="bedrijf" id="bedrijf">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="vraag">Vraag *</label>
            <textarea class="form-control" name="vraag" id="vraag" rows="3" required></textarea>
        </div>     
        <input type="submit" value="VERZENDEN" class="btn btn-main">
    </form>
  </div>
  <div class="footer">
      <p>Contacteer ons : Stefanie De Kesel dekesels@visocloud.org +32 494 81 50 17</p>
  </div>
  
  <script src="js/dist/main.min.js"></script>
</body>
</html>
<?php
// validatie
if(isset($_POST['voornaam'])&&isset($_POST['naam'])&&isset($_POST['email'])&&isset($_POST['vraag'])){
    $_POST['voornaam'] = htmlspecialchars($_POST['voornaam']);
    $_POST['naam'] = htmlspecialchars($_POST['naam']);
    $_POST['email'] = htmlspecialchars($_POST['email']);
    $_POST['telefoon'] = htmlspecialchars($_POST['telefoon']);
    $_POST['adres'] = htmlspecialchars($_POST['adres']);
    $_POST['woonplaats'] = htmlspecialchars($_POST['woonplaats']);
    $_POST['postcode'] = htmlspecialchars($_POST['postcode']);
    $_POST['bedrijf'] = htmlspecialchars($_POST['bedrijf']);
    $_POST['vraag'] = htmlspecialchars($_POST['vraag']);

    $voornaam = $_POST['voornaam'];
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $adres = $_POST['adres'];
    $woonplaats = $_POST['woonplaats'];
    $postcode = $_POST['postcode'];
    $bedrijf = $_POST['bedrijf'];
    $vraag = $_POST['vraag'];

    // attempt insert query execution
    $sql = "INSERT INTO contact (voornaam, naam, email, telefoon, adres, woonplaats, postcode, bedrijf, vraag) VALUES ('$voornaam', '$naam', '$email', '$telefoon', '$adres', '$woonplaats', '$postcode', '$bedrijf', '$vraag')";
      if(mysqli_query($conn, $sql )){
        echo "We hebben je vraag ontvangen!";
        exit;
    } else{
        echo "ERROR: $sql. " . mysqli_error($conn);
    }
    
    $to = "dekesels@visocloud.org";
    $subject = "contact via site";

    $message = "
    <html>
    <head>
    <title>Contact via site</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Naam</th>
    <br>
    <th>E-mail</th>
    <br>
    <th>Bericht</th>
    <br>
    </tr>
    <tr>
    <td>".$_POST["naam"]." ".$_POST["voornaam"]."</td>
    <br>
    <td>".$_POST["email"]."</td>
    <br>
    <td>".$_POST["vraag"]."</td>
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

    if(mail($to,$subject,$message,$headers)){
        echo "<p>mail verstuurd</p>";
      } else {
        echo "<p>Fout bij het versturen van e-mail</p>";
      }
  
}
 
?>
