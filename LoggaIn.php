<?php

include('Functions.php');

session_start();

$conn = connectToDatabase();

$username = $_POST["usernameLogin"];
$password = $_POST["passwordLogin"];

$checkIfUserExist = "SELECT Användarnamn, Lösenord FROM användare WHERE Användarnamn = '$username' AND Lösenord = '$password'";
$result = $conn->query($checkIfUserExist);

if ($result->num_rows > 0) {
    $_SESSION["loggedInUser"] = $username;

    header("Location: index.php");
} else {
    echo "Vi kann tyvärr inte hitta ditt användarnamn eller lösenord, vänligen kontrollera att du har skrivit rätt och försök igen.";
}
$conn->close();
?>