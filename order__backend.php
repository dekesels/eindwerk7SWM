
<?php
session_start(); // Altijd nodig om te starten ook op andere paginasQ
include("includes/db_conn.php");
        // Escape user inputs for security
        $_POST['inputName'] = mysqli_real_escape_string($conn, $_POST['inputName']);
        $_POST['inputSurname'] = mysqli_real_escape_string($conn, $_POST['inputSurname']);
        $_POST['inputEmail'] = mysqli_real_escape_string($conn, $_POST['inputEmail']);
        $_POST['inputPhone'] = mysqli_real_escape_string($conn, $_POST['inputPhone']);
        $_POST['inputAddress'] = mysqli_real_escape_string($conn, $_POST['inputAddress']);
        $_POST['inputCity'] = mysqli_real_escape_string($conn, $_POST['inputCity']);
        $_POST['inputCode'] = mysqli_real_escape_string($conn, $_POST['inputCode']);
        $_POST['inputCompany'] = mysqli_real_escape_string($conn, $_POST['inputCompany']);
        $_POST['inputPay'] = mysqli_real_escape_string($conn, $_POST['inputPay']);
        $_POST['id'] = (int) $_POST['id'];
        $_POST['amountLemon'] = (int) $_POST['amountLemon'];
        $_POST['amountRaspberry'] = (int) $_POST['amountRaspberry'];
        $_POST['amountPeach'] = (int) $_POST['amountPeach'];

        $voornaam = $_POST['inputSurname'];
        $naam = $_POST['inputName'];
        $email = $_POST['inputEmail'];
        $telefoon = $_POST['inputPhone'];
        $adres = $_POST['inputAddress'];
        $woonplaats = $_POST['inputCity'];
        $postcode = $_POST['inputCode'];
        $bedrijf = $_POST['inputCompany'];
        $betaalmethodes = $_POST['inputPay'];
        $id = $_POST['id'];
        $amountLemon =  $_POST['amountLemon'];
        $amountRaspberry =  $_POST['amountRaspberry'];
        $amountPeach =  $_POST['amountPeach'];

        // attempt insert query execution
        $sql = "INSERT INTO order_product (voornaam, naam, telefoon, adres, woonplaats, postcode, bedrijf, betaalmethodes, id, lemon, raspberry, peach) VALUES ('$voornaam', '$naam', '$telefoon', '$adres', '$woonplaats', '$postcode', '$bedrijf', '$betaalmethodes', '$id', '$amountLemon', '$amountRaspberry', '$amountPeach' )";
        if(mysqli_query($conn, $sql )){
            echo "Records added successfully.";
            header("Location:succes.php");
            exit;
        } else{
            echo "ERROR: $sql. " . mysqli_error($conn);
        }
    // close connection
mysqli_close($conn);
?>