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
        <a class="nav-link" href="#flavours">Smaken</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#product">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.php">Bestellen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </nav>
  <div>
    <div class="col-md-4 ml-auto">
      <a href="admin.php" class="btn-secondary btn-outline-dark btn-sm">Sign in.</a><a href="login.php" class="btn-secondary btn-outline-dark btn-sm">Log in.</a>
    </div>
    <div class="row d-flex align-items-center">
      <div class="col-sm">
        <img src="images/bottles.png" class="d-inline-block align-top bottles" alt="image of the bottles">
      </div>
      <div class="col-sm">
        <h1>TASTE NATURE</h1>
        <p class="italic">Ontdek de smaak van de natuur op een gezonde manier, en een lekkere manier!</p>
        <a href="#product" class="btn btn-main">ONTDEK</a>
      </div>
    </div>
  </div>
  <div id="flavours">
    <div class="flavours-st">
      <h2>SMAKEN</h2>
      <p>In ons assortiment van smaken zit voor elk wat wils. Maak zelf de keuze of je favoriete smaak de zoete,
        de zure of de gulden middenweg is. Miscchien vallen ze alle drie wel in de smaak!</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm">
        <h3 class="lemon">CITROEN</h3>
        <p>Je zure vriend die eerder zorgt voor een explosie van smaak in je mond</p>
        <img src="images/lemon.svg" width="150"  class="d-inline-block align-top" alt="SVG of lemon">
      </div>
      <div class="col-sm">
        <h3 class="raspberry">FRAMBOOS</h3>
        <p>De gulden middenweg, heeft zowel een explosie van smaak als een zoete nasmaak</p>
        <img src="images/raspberry.svg" width="150"  class="d-inline-block align-top" alt="SVG of raspberry">
      </div>
      <div class="col-sm">
        <h3 class="peach">PERZIK</h3>
        <p>Je zoete vriend die ook zoet is zonder een bom van suikers</p>
        <img src="images/peach.svg" width="150"  class="d-inline-block align-top" alt="SVG of peach">
      </div>
    </div>
    <a href="order.php" class="btn">BESTELLEN</a>
  </div>
  <div id="product">
    <h2>PRODUCT</h2>
    <p>Met ons product willen we mensen die een gezonde levensstijl hebben ook laten genieten van zoete drankjes,
      met minder suikers maar met net zoveel meer smaak!</p>
      <div class="sizer">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZttvNOsG7Iw?rel=0" allowfullscreen></iframe>
        </div>
      </div>  
  </div>
  <div class="footer">
      <p>Contacteer ons : Stefanie De Kesel dekesels@visocloud.org +32 494 81 50 17</p>
  </div>
  
  <script src="js/dist/main.min.js"></script>
</body>
</html>

