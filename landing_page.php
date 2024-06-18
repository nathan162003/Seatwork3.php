<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to To-Do List Application</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .jumbotron {
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to the To-Do List Application</h1>
            <p class="lead">Easily manage your tasks and boost your productivity.</p>
            <hr class="my-4">
            <p>Click the button below to start using the to-do list application.</p>
            <a class="btn btn-primary btn-lg" href="index.php" role="button">Get Started</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
