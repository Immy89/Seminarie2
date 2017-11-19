<?php

include('Functions.php');

session_start();

$conn = connectToDatabase();

$emailOrUsername = $_POST["emailOrUsername"];
$password = $_POST["passwordLogin"];

$checkIfUserExist = "SELECT Användarnamn, Email, Lösenord FROM användare WHERE Användarnamn = '$emailOrUsername' OR Email = '$emailOrUsername' AND Lösenord = '$password'";
$result = $conn->query($checkIfUserExist);

if ($result->num_rows > 0) {
    $_SESSION["loggedInUser"] = $emailOrUsername;

    header("Location: index.php");
} else {
    echo "Vi kann tyvärr inte hitta ditt användarnamn eller lösenord, vänligen kontrollera att du har skrivit rätt och försök igen.";
}
$conn->close();
?>