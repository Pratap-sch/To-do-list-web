<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Maker</title>
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:
                white !important;
            width: 100%;
            height: 100%;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar  navbar-expand-lg border-bottom border-body p-2" data-bs-theme="dark"
            style="background-color: #214469 ">
            <img src="assets/icon.png" width="48" height="48" alt="">
            <div class="container ">
                <a class="navbar-brand" href="#">My Planner</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="section section-header pb-6  text-white overflow-hidden z-2">
            <div class="container z-5">
                <div class="row justify-content-center mb-2">
                    <div class="col-lg-7 col-xl-7">
                        <div class="text-center">
                            <h1 class="display-7 mb-3 animation">We're Here For Your Day Organise!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="d-grid gap-2 col-6 mx-auto">
        <a href="goal.php" class="btn btn-success btn-lg" align="center" tabindex="-1" role="button"
            aria-disabled="true">Add Your Goal</a>
        </div>
    </main>

</body>

</html>