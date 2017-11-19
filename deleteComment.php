<?php

    include('Functions.php');

    session_start();
    
    $conn = connectToDatabase();
    $username = $_SESSION["loggedInUser"];
    $commentId = $_GET["KommentarID"];
    $relocateTo = $_GET["relocateTo"];

    if ($username && $commentId) {
        $result = $conn->query("SELECT Användarnamn FROM kommentar WHERE KommentarID = '$commentId' AND Användarnamn = '$username'");
        if ($result->num_rows > 0) {
            $conn->query("DELETE FROM kommentar WHERE KommentarID = '$commentId'");
        }
    }

    $conn->close();
    // header("Location: index.php");
    header("Location: " . $relocateTo);
?>