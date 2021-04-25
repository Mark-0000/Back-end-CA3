<?php
include_once 'dbh.php';
$location = $_GET["location"];
$id = $_GET["id"];
$sql = "DELETE FROM todo WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$conn->close();
header("Location: $location.php");
?>