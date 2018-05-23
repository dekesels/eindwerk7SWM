<?php
// validatie
if(isset($_POST['voorn'])&&isset($_POST['achtern'])&&isset($_POST['email'])&&isset($_POST['bericht'])){

    $_POST['voorn'] = htmlspecialchars($_POST['voorn']);
    $_POST['achtern'] = htmlspecialchars($_POST['achtern']);
    $_POST['email'] = htmlspecialchars($_POST['email']);
    $_POST['bericht'] = htmlspecialchars($_POST['bericht']);

    $to = $_POST["email"];
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
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>E-mail</th>
    <th>Bericht</th>
    </tr>
    <tr>
    <td>".$_POST["voorn"]."</td>
    <td>".$_POST["achtern"]."</td>
    <td>".$_POST["email"]."</td>
    <td>".$_POST["bericht"]."</td>
    </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <dekesels@visocloud.org>' . "\r\n";
    $headers .= 'Cc: test@visocloud.org' . "\r\n";

    if(mail($to,$subject,$message,$headers)){
        echo "<p>Bericht verstuurd</p>";
      } else {
        echo "<p>Fout bij het versturen van e-mail</p>";
      }

}
 
?>