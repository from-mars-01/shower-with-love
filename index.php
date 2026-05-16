<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shower with Love</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Shower with Love</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="about.php">Our Story</a>
              <a class="nav-link" href="find-us.php">Find Us</a>
              <a class="nav-link" href="volunteer.php">Volunteer</a>
              <a class="nav-link" href="donate.php">Donate</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="row justify-content-center align-items-center mt-3">
        <div class="col-md-5">
          <h3>Shower with Love</h3>
          <p>Returning dignity to those in need.</p>
        </div>
        <div class="col-md-5 text-center">
          <img src="images/watering-can.png" alt="Shower with Love Logo">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/Haircut.jpg" alt="Haircut slide" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/Laundry.jpg" alt="Laundry slide" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/Shower.jpg" alt="Shower slide" style="height: 400px; object-fit: cover;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
          </div>
        </div>
      </div>
      <?php
        date_default_timezone_set('America/Chicago');
        $orgName = "Shower with Love";
        $hour = (int)date("G");

        if ($hour < 12) {
            $greeting = "Good morning!";
        } elseif ($hour < 18) {
            $greeting = "Good afternoon!";
        } else {
            $greeting = "Good evening!";
        }

        $dayOfWeek = date("l");
        if ($dayOfWeek == "Saturday" || $dayOfWeek == "Sunday") {
            $dayMessage = "Thanks for visiting us this weekend!";
        } else {
            $dayMessage = "Have a great day supporting our mission!";
        }

        $popupMessage = "$greeting Welcome to $orgName. $dayMessage";
      ?>
      <script>
        alert("<?php echo $popupMessage; ?>");
      </script>
      <div class="row mt-5 justify-content-center">
        <div class="col-md-3">
    <div class="card text-center">
      <div class="card-body">
        <img src="images/Haircut.jpg" alt="Haircuts" class="rounded-circle mb-3" style="width: 140px; height: 140px; object-fit: cover;">
        <h5 class="card-title fw-normal">Haircuts</h5>
        <p class="card-text">We offer free haircuts to those in need.</p>
      </div>
    </div>
  </div>
        <div class="col-md-3">
    <div class="card text-center">
      <div class="card-body">
        <img src="images/Shower.jpg" alt="Showers" class="rounded-circle mb-3" style="width: 140px; height: 140px; object-fit: cover;">
        <h5 class="card-title fw-normal">Showers</h5>
        <p class="card-text">We offer free showers to those in need.</p>
      </div>
    </div>
  </div>
        <div class="col-md-3">
    <div class="card text-center">
      <div class="card-body">
        <img src="images/Laundry.jpg" alt="Laundry" class="rounded-circle mb-3" style="width: 140px; height: 140px; object-fit: cover;">
        <h5 class="card-title fw-normal">Laundry</h5>
        <p class="card-text">We offer free laundry services to those in need.</p>
      </div>
    </div>
  </div>
      </div>
 </main>
    <footer class="mt-5">
        <p>Copyright &copy; <?php echo date("Y"); ?> Shower with Love</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
  </body>
</html>
