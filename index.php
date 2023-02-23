<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Nosso Hall</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a href="#" class="navbar-brand">Nosso Hall</a>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- SLIDE -->
    <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="demo" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://www.w3schools.com/bootstrap5/la.jpg" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item ">
            <img src="https://www.w3schools.com/bootstrap5/ny.jpg" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item ">
            <img src="https://www.w3schools.com/bootstrap5/chicago.jpg" class="d-block" style="width:100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
       
    </div>
    <!-- SLIDE END -->
</body>
</html>