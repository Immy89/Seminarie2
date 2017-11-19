<?php header("Content-type: text/css"); ?>

h2 {
    text-align: center;
    font-size: 28px;
    margin: 0em 0.5em 0.5em 0.5em;
}

h3 {
    font-size: 20px;
    margin: 0.3em 1%;
}

.header4 {
    display: block;
    margin: 0.3em 1%;
    font-size: 16px;
    font-weight: bold;
}

#ingredienser ul {
    margin: 0.3em 0%;
}

#ingredienser ul li {
    margin: 0.1em 1%;
}

#beskrivning p {
    margin: 0.3em 1%;
}

h5 {
    font-size: 16px;
    font-weight: bold;
    margin: 0.1em;
}

p {
    font-weight: lighter;
}

#titel {
    position: relative;
    display: block;
    padding: 0.3em;
    margin: 0%;
}

#bild {
    position: relative;
    display: inline;
    width: 35%;
    padding: 0.5%;
    float: left;
    background-color: rgb(233, 210, 196);
    border-radius: 20px;
    margin-bottom: 1em;
    vertical-align: middle;
}

img {
    max-height: 100%;
    width: 100%;
    border-radius: 20px;
}

#ingredienser {
    position: relative;
    display: inline;
    width: 24%;
    padding: 0.5%;
    float: left;
    margin-left: 1.5%;
    margin-right: 1.5%;
    background-color: rgb(233, 210, 196);
    border-radius: 20px;
    margin-bottom: 1em;
}

#beskrivning {
    position: relative;
    display: inline;
    width: 35%;
    padding: 0.5%;
    float: left;
    background-color: rgb(233, 210, 196);
    border-radius: 20px;
    margin-bottom: 1em;
}

#recensioner {
    position: relative;
    display: block;
    clear: left;
    background-color: rgb(233, 210, 196);
    border-radius: 20px;
    padding: 0.5%;
}

<?php

    session_start();
    
    $displayTextbox = "block";
    $dontDisplayTextbox = "none";

    if (isset($_SESSION["loggedInUser"])){
        $display = $displayTextbox;
    } else {
        $display = $dontDisplayTextbox;
    }
?>

#SkapaRecensioner {
    width: 100%;
    height: fit-content;
    overflow: hidden;
    display: <?php echo $display; ?>;
}

form {
    margin: 0% 1%;
}

.container {
    padding: 16px;
}

label {
    display: block;
}

textarea {
    width: 88%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    float: left;
    border: 1px solid rgb(180, 145, 122);
    border-radius: 6px;
    box-sizing: border-box;
    background-color: rgb(253, 238, 230);
}

input[placeholder] {
    font-family: "Comic sans MS";
}

button {
    background-color: rgb(179, 152, 135);
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 6px;
    border: none;
    /* box-shadow: 4px rgb(122, 96, 81); */
    cursor: pointer;
    width: 10%;
    float: right;
    font-family: "Comic sans MS";
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.7;
}

#InlästaRecensioner {
    width: 95.4%;
    height: fit-content;
    padding: 0% 2.3% 2% 2.3%;
}

hr {
    border-color: rgb(180, 145, 122);
    width: 100%;
    float: left;
}