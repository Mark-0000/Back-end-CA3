<?php
include_once 'dbh.php';
$location = $_GET["location"];
$id = $_GET["id"];
$completed = $_GET["completed"];

if($completed == 0){
    $completed = 1;
}else if ($completed > 0){
    $completed = 0;
}

$sql = "UPDATE todo SET completed=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $completed, $id);
$stmt->execute();
$conn->close();
header("Location: $location.php");
?>