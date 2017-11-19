<?php

include('Functions.php');

session_start();

$conn = connectToDatabase();

$kommentar = $_POST["kommentar"];
$receptId = $_POST["receptId"];
$relocateTo = $_POST["relocateTo"];

$userIsLoggedIn = isset($_SESSION["loggedInUser"]);

if ($userIsLoggedIn) {
    $username = $_SESSION["loggedInUser"];
    $insertComment = "INSERT INTO kommentar(Användarnamn, ReceptID, Kommentar) VALUES ('$username', '$receptId', '$kommentar')";
    $conn->query($insertComment);
} else {
    echo "Du måste logga in för att kunna publisera kommentarer.";
}
$conn->close();
// header("Location: index.php");
header("Location: " . $relocateTo);
?>