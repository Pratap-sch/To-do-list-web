<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Maker</title>
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        body {
            background-color:
                white !important;
            width: 100%;
            height: 100%;
        
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar  navbar-expand-lg border-bottom border-body p-2" data-bs-theme="dark" style="background-color: #214469 ">
            <img src="assets/icon.png" width="50" height="50" alt="">
            <div class="container">
                <a class="navbar-brand" href="homepage.php">My Planner</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">About</a>
                        </li>

                    </ul>
                    <form class="d-flex " role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form> <br>
                    <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        echo '<a href="logout.php" class="btn btn-info "  class="d-grid gap-3 d-md-block">LogOut</a>';
                    } else {
                        echo '<a href="login.php" class="btn btn-primary " class=" d-grid gap-2 d-md-block">Login</a>';
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>