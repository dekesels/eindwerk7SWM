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
      <form  method="post" action="order__backend.php">
        <h2 class="lemon">BESTELLEN</h2>
        <div class="row order">
            <div class="col">
                <img src="images/lemon.svg" width="50"  class="d-inline-block align-top" alt="SVG of lemon">
            </div>
            <div class="col-7">
                <h3 class="lemon">CITROEN</h3>
                <p>Je zure vriend die eerder zorgt voor een explosie van smaak in je mond</p>
            </div>
                <div class="quantity">
                    <input type="number" class="amountProduct" min="0"  name="amountLemon" value="0" data-price="1.20">
                </div>
            <div class="col">
                    <p>1,20€</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="images/raspberry.svg" width="50"  class="d-inline-block align-top" alt="SVG of raspberry">
            </div>
            <div class="col-7">
                <h3 class="raspberry">FRAMBOOS</h3>
                <p>De gulden middenweg, heeft zowel een explosie van smaak als een zoete nasmaak</p>
            </div>
                <div class="quantity">
                    <input type="number" class="amountProduct" min="0"  name="amountRaspberry" value="0" data-price="1.20">
                </div>
            <div class="col">
                    <p>1,20€</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="images/peach.svg" width="50"  class="d-inline-block align-top" alt="SVG of peach">
            </div>
            <div class="col-7">
                <h3 class="peach">PERZIK</h3>
                <p>Je zoete vriend die ook zoet is zonder een bom van suikers</p>
            </div>
                <div class="quantity">
                    <input type="number" class="amountProduct" min="0" name="amountPeach" value="0" data-price="1.20">
                </div>
            <div class="col">
                    <p>1,20€</p>
            </div>
        </div>
    <div>
        <h2 class="lemon">TOTAAL PRIJS<h2>
        <h4 class="btn-sm col-md-3 ml-auto">De totale prijs bedraagt €<span class="totalPriceOfProducts">0</span></h4>
    </div>
      <div>
        <h2 class="lemon">PERSOONLIJKE GEGEVENS</h2>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputSurname">Voornaam * </label>
                            <input type="text" name="inputSurname" class="form-control" id="inputSurname" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputName">Naam * </label>
                            <input type="text" name="inputName" class="form-control" id="inputName" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputEmail">Email * </label>
                            <input type="email" name="inputEmail" class="form-control" id="inputEmail" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputPhone">Telefoon * </label>
                            <input type="tel" name="inputPhone" class="form-control" id="inputPhone" required>
                    </div>
                    </div>
                <div class="col-sm">
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputAddress">Adres * </label>
                            <input type="text" name="inputAddress" class="form-control" id="inputAddress" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputCity">Woonplaats * </label>
                            <input type="text" name="inputCity" class="form-control" id="inputCity" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputCode">Postcode * </label>
                            <input type="text" name="inputCode" class="form-control" id="inputCode" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputCompany">Bedrijf </label>
                            <input type="text" name="inputCompany" class="form-control" id="inputCompany">
                    </div>
                    </div>
                </div>
                <h2 class="lemon">BETAALMETHODES</h2>
                    <div class="form-check">
                        <input class="check" type="checkbox" id="inputPay" name="inputPay" value="1" aria-label="...">
                        <img src="images/paypal.png" alt="logo PayPal" />
                    </div>
                    <div class="form-check">
                            <input class="check" type="checkbox" id="inputPay" name="inputPay" value="2" aria-label="...">
                            <img src="images/visa.jpg" alt="logo VISA" />
                    </div>
                    <div class="form-check">
                            <input class="check" type="checkbox" id="inputPay" name="inputPay" value="3" aria-label="...">
                            <img src="images/bancontact.png" alt="logo Bancontact" />
                    </div>
                    </div>
                <button type="submit" class="btn btn-main">BESTELLEN</button>
          </form>
  </div>
  </div>
  <div class="footer">
      <p>Contacteer ons : Stefanie De Kesel dekesels@visocloud.org +32 494 81 50 17</p>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/dist/main.min.js"></script>
</body>
</html>