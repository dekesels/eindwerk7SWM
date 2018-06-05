<?php
// initialisatie
define("DB_SERVER", "localhost");
define("DB_USER", "dekesels"); 
define("DB_PASS", "hwd5w2CT"); //blanco voor XAMPP, dus "")
define("DB_NAME", "dekesels");

// stap 1a: verbinding maken met de database
if (!$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME)) {
echo "Er kan geen verbinding met de DB worden gemaakt";
exit; 
}

//charset initialiseren naar UTF-8
mysqli_set_charset($conn, "utf8");
setlocale (LC_ALL, "nl_NL");
?> 
