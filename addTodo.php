<?php
include 'dbh.php';

$text = $_POST['text'];
$user = "default";

$sql = "INSERT INTO todo (text, user) 
        VALUES (?,?)";

        //prepared statement
        $stmt = $conn->prepare($sql);

        //the variables are at your own choice, 
        //they do not require to be the exact same as the columns in the database
        $stmt->bind_param("ss", $text, $user);

        //send to database
        $stmt->execute();
        $conn->close();

        header("Location: index.php");
?>