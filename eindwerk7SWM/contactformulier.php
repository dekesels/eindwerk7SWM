<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="tekst" />
	<title>Title</title>	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" href="favicon.ico">

	<script src="js/libs/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<div class="wrapper">
        <h2>Stel hier uw vraag!</h2>
	    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="voornaam">voornaam (*)</label>
            <input name="voornaam" id="voornaam" type="text" autofocus required>

            <label for="naam">naam (*)</label>
            <input name="naam" id="naam" type="text" required>
            
            <label for="email">e-mail (*)</label>
            <input name="email" id="email" type="email" required>

            <label for="bedrijf">bedrijf</label>
            <input name="bedrijf" id="bedrijf" type="text">

            <label for="adres">adres</label>
            <input name="adres" id="adres" type="text">

            <label for="postcode">postcode</label>
            <input name="postcode" id="postcode" type="text">

            <label for="woonplaats">woonplaats</label>
            <input name="woonplaats" id="woonplaats" type="text">

            <label for="tel">tel</label>
            <input name="tel" id="tel" type="text">

            <label for="website">website</label>
            <input name="website" id="website" type="text">
            
            <label for="vraag">Vraag (*)</label>
            <textarea name="vraag" id="vraag" required></textarea>
            
            <input type="submit" value="verzenden">
		
        </form>
	
	    
	</div>

	<script src="js/libs/jquery-2.1.4.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
<?php
// validatie
if(isset($_POST['voornaam'])&&isset($_POST['naam'])&&isset($_POST['email'])&&isset($_POST['vraag'])){
  
    $_POST['voornaam'] = htmlspecialchars($_POST['voornaam']);
    $_POST['naam'] = htmlspecialchars($_POST['naam']);
    $_POST['mail'] = htmlspecialchars($_POST['mail']);
    $_POST['bedrijf'] = htmlspecialchars($_POST['bedrijf']);
    $_POST['adres'] = htmlspecialchars($_POST['adres']);
    $_POST['postcode'] = htmlspecialchars($_POST['postcode']);
    $_POST['woonplaats'] = htmlspecialchars($_POST['woonplaats']);
    $_POST['tel'] = htmlspecialchars($_POST['tel']);
    $_POST['website'] = htmlspecialchars($_POST['website']);
    $_POST['vraag'] = htmlspecialchars($_POST['vraag']);
  
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
    <th>E-mail</th>
    <th>Bericht</th>
    </tr>
    <tr>
    <td>".$_POST["naam"]."</td>
    <td>".$_POST["email"]."</td>
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
    $headers .= 'From: <test@visocloud.org>' . "\r\n";
    $headers .= 'Cc: test@visocloud.org' . "\r\n";

    if(mail($to,$subject,$message,$headers)){
        echo "<p>mail verstuurd</p>";
      } else {
        echo "<p>Fout bij het versturen van e-mail</p>";
      }
  
}
 
?>
