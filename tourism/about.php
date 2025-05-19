<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .py-5 {
        background-color: antiquewhite;
    }
</style>
<body>

<div class="container-fluid p-0">
  <img src="./assets/img/header-bg.jpg" class="w-100" style="height: 400px; object-fit: cover;" alt="Contact Banner">
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include('inc/topBarNav.php'); ?>


<!-- About Section -->
<section class="py-5" id="about">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-uppercase">About Us</h2>
            <p class="lead">Discover who we are and why travelers love us.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="./assets/images/a1.jpg" alt="About Us" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h4>Welcome to Photine Travels</h4>
                <p>At Photine Travels, we believe travel is more than just visiting places — it’s about creating unforgettable memories. Whether you dream of serene beaches, vibrant cities, or breathtaking mountains, we bring your travel dreams to life with custom packages, expert guides, and round-the-clock support.</p>
                <p>We are passionate about delivering high-quality travel experiences with affordability, safety, and comfort in mind. Join us and explore the world like never before!</p>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Carousel -->
<section class="py-5 bg-light" id="reviews">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-uppercase">What Our Travelers Say</h2>
        </div>

        <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="d-flex flex-column align-items-center">
                        <p class="fs-5 fst-italic text-center px-4">"Amazing service and unforgettable experience! Our trip to Italy was flawless."</p>
                        <h5 class="fw-bold mt-3">– Priya Sharma</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex flex-column align-items-center">
                        <p class="fs-5 fst-italic text-center px-4">"From booking to return, Photine Travels took care of everything. Highly recommend!"</p>
                        <h5 class="fw-bold mt-3">– Rahul Mehta</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex flex-column align-items-center">
                        <p class="fs-5 fst-italic text-center px-4">"Professional team and well-organized packages. Will book again!"</p>
                        <h5 class="fw-bold mt-3">– Ayesha Khan</h5>
                    </div>
                </div>

            </div>

            <!-- Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>
<!-- Bootstrap 5 JS (if not already loaded globally) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
