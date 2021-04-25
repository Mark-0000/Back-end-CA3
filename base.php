<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDoApp</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="App">
        <header>
            <h1>PHP To Do App</h1>
        </header>
        <form action="addTodo.php" method="POST">
            <input type="text" class="todo-input" name="text" required/>
            <button class="todo-button" type="submit">
                <i class="fas fa-plus-square"></i>
            </button>