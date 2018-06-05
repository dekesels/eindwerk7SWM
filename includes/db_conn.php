<<<<<<< HEAD
<?php
// initialisatie
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", ""); //blanco voor XAMPP, dus "")
define("DB_NAME", "stefanie");

// stap 1a: verbinding maken met de database
if (!$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME)) {
echo "Er kan geen verbinding met de DB worden gemaakt";
exit; 
}

//charset initialiseren naar UTF-8
mysqli_set_charset($conn, "utf8");
setlocale (LC_ALL, "nl_NL");
?> 
=======
<?php
// initialisatie
define("DB_SERVER", "localhost");
define("DB_USER", "root"); 
define("DB_PASS", ""); //blanco voor XAMPP, dus "")
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
>>>>>>> da9c20a3d584439d74c002526289182c022c66cb
