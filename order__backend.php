
<?php
session_start(); // Altijd nodig om te starten ook op andere paginasQ
include("includes/db_conn.php");
        // Escape user inputs for security
        $_POST['inputName'] = mysqli_real_escape_string($conn, $_POST['inputName']);
        $_POST['inputEmail'] = mysqli_real_escape_string($conn, $_POST['inputEmail']);
        $_POST['id'] = (int) $_POST['id'];
        $_POST['amountLemon'] = (int) $_POST['amountLemon'];
        $_POST['amountRaspberry'] = (int) $_POST['amountRaspberry'];
        $_POST['amountPeach'] = (int) $_POST['amountPeach'];

        $naam = $_POST['inputName'];
        $email = $_POST['inputEmail'];
        $id = $_POST['id'];
        $amountLemon =  $_POST['amountLemon'];
        $amountRaspberry =  $_POST['amountRaspberry'];
        $amountPeach =  $_POST['amountPeach'];

        // attempt insert query execution
        $sql = "INSERT INTO order_product (naam, id, lemon, raspberry, peach) VALUES ('$naam', '$id', '$amountLemon', '$amountRaspberry', '$amountPeach' )";
        if(mysqli_query($conn, $sql )){
            echo "Records added successfully.";
            header("Location:index.php");
            exit;
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    // close connection
mysqli_close($conn);
?>