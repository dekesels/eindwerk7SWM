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
        <h2>Subscribe</h2>
	    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="username">username </label>
            <input name="username" id="username" type="text" autofocus required>

            <label for="password">password </label>
            <input name="password" id="password" type="text" required>
            
            <label for="email">e-mail </label>
            <input name="email" id="email" type="email" required>

            <input type="submit" value="verzenden">
		
        </form>
	
	    
	</div>

	<script src="js/libs/jquery-2.1.4.min.js"></script>
	<script src="js/main.js"></script>
</body>

<?php
// validatie
if (empty($_POST["username"]) && empty($_POST["password"]) && empty($_POST["email"]) ){
	// als de url-parameter niet werd meegegeven ga terug naar admin.php
	echo "Niet alle verplichte velden werden ingevuld.";
	exit;
}

//stap 1b: bestand db_conn.php insluiten
include("includes/db_conn.php");

// SQL-injectie voorkomen
	// 1) zet integers om met (int) $_POST['naamveld']
	
	// 2) met mysqli_real_escape_string($conn, $_POST['naamveld']
	$_POST['username'] = mysqli_real_escape_string($conn, $_POST['username']);
	$_POST['password'] = md5(mysqli_real_escape_string($conn, $_POST['password']));
	$_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);


// stap 2: De query opstellen en uitvoeren

$query = "INSERT INTO gip_newsletter (username, password, email) VALUES ('{$_POST['username']}', '{$_POST['password']}', '{$_POST['email']}')";

if (!$result = mysqli_query($conn,$query)) {
    echo "FOUT: Query kon niet uitgevoerd worden".$query; 
	exit;
}else{
	echo "Uw gegevens zijn opgeslagen in onze database. ";
	$email= $_POST['email'];
	$last_id = mysqli_insert_id($conn);
	$to = $email;
    $subject = "Registratie - Fruktovy";

    $message = "
    <html>
    <head>
    <title>Bedankt voor de registratie!</title>
    </head>
    <body>
    <p>Uw gegevens zijn goed ontvangen</p>
    <table>
    <tr>
    <th>Naam</th>
    <th>E-mail</th>
    </tr>
    <tr>
    <td>".$_POST["username"]."</td>
	<td>".$_POST["email"]."</td>
    </tr>
    </table>
	<a href=\"http://dekesels.happyvisocoders.be/GIP/www/confirm_email.php?id=".$last_id."\"\>Klik hier om je aan te melden voor de nieuwsbrief!</a>
    </body>
    </html>
	";
	
	    // Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
		// More headers
		$headers .= 'From: <Fruktovy@visocloud.org>' . "\r\n";

        if(mail($to,$subject,$message,$headers)){
            echo "<p>mail verstuurd</p>";
          } else {
            echo "<p>Fout bij het versturen van e-mail</p>";
          }
	
	  
}

// stap 3: niet nodig - we lezen niets uit de database

// stap 4: De verbinding met de database sluiten  

if (!mysqli_close($conn)) {
    echo "FOUT: De verbinding kon niet worden gesloten "; 
    exit;
}



