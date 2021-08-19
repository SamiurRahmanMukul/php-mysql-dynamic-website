<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Webpage Title -->
    <title>Technical Website</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Linking Favicon -->
    <link rel="shortcut icon" href="./assets/img/bootstrap-logo.svg" type="image/svg">
  </head>
  <body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
          <img src="./assets/img/bootstrap-logo.svg" alt="brand-logo" width="40" height="34" class="d-inline-block align-text-top">
          Technical Website
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services-section">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-section">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-section">About</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Bootstrap Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/images/carousel/big1.jpg" class="d-block w-100" alt="carousel-slider-image">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/images/carousel/big2.jpg" class="d-block w-100" alt="carousel-slider-image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/images/carousel/big3.jpg" class="d-block w-100" alt="carousel-slider-image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- About-Us Section -->
    <section class="my-5" id="about-section">
      <div>
        <h2 class="text-center">About Us</h2>
      </div>

      <div class="py-5">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="./assets/images/normal/normal2.jpg" alt="section-image" class="img-fluid about-img">
          </div>

          <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4 about-h2">This is <span style="font-style: italic;">Technical Website</span></h2>
            <p class="py-4 about-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident doloribus temporibus animi accusantium cupiditate quo corporis molestiae libero culpa doloremque inventore unde architecto. Consequuntur, impedit aperiam? Nesciunt non eveniet asperiores quas odit voluptates inventore dolorem porro praesentium enim ut blanditiis dolore architecto mollitia nostrum ea impedit rem, sit nobis.
            </p>

            <a href="#about-section" class="btn btn-success about-a">Check More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Service Section -->
    <section class="my-5" id="services-section">
      <div>
        <h2 class="text-center" style="margin-bottom: 50px;">Our Services</h2>
      </div>

      <div class="container-fluid">
        <div class="row" style="margin-bottom: 20px;">
          <div class="col-lg-4 col-md-4 col-12">
            <!-- Bootstrap Card -->
            <div class="card" style="width: 25rem;">
              <img src="./assets/images/carousel/big1.jpg" class="card-img-top" alt="card-image">
              <div class="card-body">
                <h5 class="card-title">Card Title 01</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go Somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <!-- Bootstrap Card -->
            <div class="card" style="width: 25rem;">
              <img src="./assets/images/carousel/big2.jpg" class="card-img-top" alt="card-image">
              <div class="card-body">
                <h5 class="card-title">Card Title 02</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go Somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <!-- Bootstrap Card -->
            <div class="card" style="width: 25rem;">
              <img src="./assets/images/carousel/big3.jpg" class="card-img-top" alt="card-image">
              <div class="card-body">
                <h5 class="card-title">Card Title 03</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go Somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="my-5 border" id="contact-section">
      <div>
        <h2 class="text-center" style="margin-bottom: 50px;">Contact Us</h2>
      </div>

      <div class="w-50 m-auto">
        <form action="./database/user-config.php" method="post">
          <div class="form-group py-2">
            <label for="user">Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Type here your name">
          </div>

          <div class="form-group py-2">
            <label for="email">E-mail</label>
            <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Type here your e-mail">
          </div>

          <div class="form-group py-2">
            <label for="phone">Phone Number</label>
            <input type="number" name="phone" autocomplete="off" class="form-control" placeholder="Type here your phone number">
          </div>

          <div class="form-group">
            <label for="comments py-2">Comments</label>
            <textarea name="comments" class="form-control" placeholder="Type here your message"></textarea>
          </div>

          <div class="d-grid gap-2 col-6 mx-auto py-2">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-section bg-dark" style="height: 100px;">
      <div class="copyright">
        <p class="text-center" style="color: white; font-size: 16px; padding-top: 25px;">&copy; All copyright reserved at - <a href="https://www.facebook.com/SamiurRahmanMukul" target="_blank">Samiur Rahman Mukul</a></p>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
