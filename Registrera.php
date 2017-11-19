<?php

    include('Functions.php');

    session_start();

    $conn = connectToDatabase();

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["passwordRegister"];
    $passwordAgain = $_POST["passwordAgainRegister"];
    
    $checkIfUsernameExist = "SELECT Användarnamn FROM användare WHERE Användarnamn = '$username'";
    $checkIfEmailExist = "SELECT Email FROM användare WHERE Email = '$email'";
    $resultCheckUsername = $conn->query($checkIfUsernameExist);
    $resultCheckEmail = $conn->query($checkIfEmailExist);
    
    if ($resultCheckUsername->num_rows > 0) {
        echo "<p>Användarnamnet är upptaget, prova något annat.</p>";
    }
    else if ($resultCheckEmail->num_rows > 0) {
        echo "<p>Den angivna mailadressen har redan ett konto registrerat.</p>";
    }
    else if ($password != $passwordAgain) {
        echo "<p>Lösenorden matchar inte varann.</p>";
    } else {
        $saveUser = "INSERT INTO användare(Användarnamn, Email, Lösenord) VALUES ('$username', '$email', '$password')";
        $conn->query($saveUser);
        
        $_SESSION["loggedInUser"] = $username;
        header("Location: index.php");
    }
    $conn->close();
?>