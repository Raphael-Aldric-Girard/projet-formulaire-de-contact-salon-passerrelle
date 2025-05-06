<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $choixFormation = $_POST['choixFormation'];
        $choixVoix = $_POST['choixVoix'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $remarqueObservation = $_POST['remarqueObservation'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "informations2";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO information (prenom, nom, choixFormation, choixVoix, email, telephone, remarqueObservation) 
            VALUES ('$prenom', '$nom', '$choixFormation', '$choixVoix', '$email', '$telephone', '$remarqueObservation')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>