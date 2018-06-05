<<<<<<< HEAD
<<<<<<< HEAD
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
      <?php
            if (isset($_SESSION["naam"])){
      ?>
      <li>
        <a href="toevoegen.php">Toevoegen</a>
      </li>
      <?php
        }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="order.php">Bestellen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <?php
       if (isset($_SESSION["naam"])){
      ?>
      <li>
       <a href="uitlog.php">Uitloggen</a>
      </li>
      <?php
        }
      ?>
    </ul>
  </nav>
  <div >
    <div class="register">
        <h1>Registreren</h1>
        <p>Gelieve je te registreren!</p>
            <form method="post" action="add_user.php">
                <label for="naam">Naam</label>
                <input type="text" name="naam" value="Gebruikersnaam" required autofocus>*
                <br><br>
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" value="Wachtwoord" required >*
                <br><br>
                <label for="email">E-mail</label>
                <input type="text" name="email" value="E-mail" required>*
                <br><br>
                <input type="hidden" name="id" value="" >
                <input type="hidden" name="rank" value="">
                <br><br>
                <input type="submit">
            
            </form>  
  </div>
  <div class="footer">
      <p>Contacteer ons : Stefanie De Kesel dekesels@visocloud.org +32 494 81 50 17</p>
  </div>
  
  <script src="js/dist/main.min.js"></script>
</body>
</html>


=======
=======
>>>>>>> da9c20a3d584439d74c002526289182c022c66cb
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
      <?php
            if (isset($_SESSION["naam"])){
      ?>
      <li>
        <a href="toevoegen.php">Toevoegen</a>
      </li>
      <?php
        }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="order.php">Bestellen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <?php
       if (isset($_SESSION["naam"])){
      ?>
      <li>
       <a href="uitlog.php">Uitloggen</a>
      </li>
      <?php
        }
      ?>
    </ul>
  </nav>
  <div >
    <div class="register">
        <h1>Registreren</h1>
        <p>Gelieve je te registreren!</p>
            <form method="post" action="add_user.php">
                <label for="naam">Naam</label>
                <input type="text" name="naam" value="Gebruikersnaam" required autofocus>*
                <br><br>
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" value="Wachtwoord" required >*
                <br><br>
                <label for="email">E-mail</label>
                <input type="text" name="email" value="E-mail" required>*
                <br><br>
                <input type="hidden" name="id" value="" >
                <input type="hidden" name="rank" value="">
                <br><br>
                <input type="submit">
            
            </form>  
  </div>
  <div class="footer">
      <p>Contacteer ons : Stefanie De Kesel dekesels@visocloud.org +32 494 81 50 17</p>
  </div>
  
  <script src="js/dist/main.min.js"></script>
</body>
</html>


<<<<<<< HEAD
>>>>>>> da9c20a3d584439d74c002526289182c022c66cb
=======
>>>>>>> da9c20a3d584439d74c002526289182c022c66cb
