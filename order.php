<?php
session_start(); // Altijd nodig om te starten ook op andere paginasQ
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
                    <button class="plus-btn" type="button" name="button">
                        <img src="images/plus.svg" alt="" />
                    </button>
                    <input type="text" id="amount" name="amountLemon" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <img src="images/minus.svg" alt="" />
                    </button>
                </div>
            <div class="col">
                    <p>0,00€</p>
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
                    <button class="plus-btn" type="button" name="button">
                        <img src="images/plus.svg" alt="" />
                    </button>
                    <input type="text" id="amount" name="amountRaspberry" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <img src="images/minus.svg" alt="" />
                    </button>
                </div>
            <div class="col">
                    <p>0,00€</p>
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
                    <button class="plus-btn" type="button" name="button">
                        <img src="images/plus.svg" alt="" />
                    </button>
                    <input type="text" id="amount" name="amountPeach" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <img src="images/minus.svg" alt="" />
                    </button>
                </div>
            <div class="col">
                    <p>0,00€</p>
            </div>
        </div>

      <div>
        <h2 class="lemon">PERSOONLIJKE GEGEVENS</h2>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputName" class="col-sm col-form-label">Volledige Naam : </label>
                        <div class="col-sm">
                            <input type="text" name="inputName" class="form-control" id="inputName" placeholder="John Doe">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="" >
                        <label for="inputEmail" class="col-sm col-form-label">Email : </label>
                        <div class="col-sm">
                            <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="John@Doe.Com">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Telefoon</label>
                            <input type="tel" class="form-control" id="tel">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Adres</label>
                    <input type="text" class="form-control" id="adres">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Woonplaats</label>
                        <input type="text" class="form-control" id="woonplaats">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Postcode</label>
                        <input type="text" class="form-control" id="postcode">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Bedrijf</label>
                            <input type="text" class="form-control" id="bedrijf">
                    </div>
                    </div>
                </div>
                <h2 class="lemon">BETAALMETHODES</h2>
                    <div class="form-check">
                        <input class="check" type="checkbox" id="paypal" value="paypal" aria-label="...">
                    </div>
                    <div class="form-check">
                            <input class="check" type="checkbox" id="visa" value="visa" aria-label="...">
                    </div>
                    <div class="form-check">
                            <input class="check" type="checkbox" id="bancontact" value="bancontact" aria-label="...">
                    </div>

                <button type="submit" class="btn btn-primary">BESTELLEN</button>
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