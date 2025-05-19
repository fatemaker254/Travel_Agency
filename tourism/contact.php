<?php
session_start();
$page = 'contact'; // Set the current page
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us -Photine Travels</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
    .nav-link {
      color: whitesmoke !important;
    }
    /* .banner1{
      height: 100px;
      background:yellow;
    } */
     .py-5{
      background-image: url('../assets/img/map-image.png');
      background-size: cover;
     }
     .map-container {
            position: relative;
            width: 80%;
            padding-top: 33.25%; /* Aspect ratio 16:9 */
            margin: 20px auto;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      </body>

<!-- NAVBAR -->
<?php include('inc/topBarNav.php'); ?>
<!-- <div class="banner1">
  <p class="border"></p>
</div> -->
<!-- Banner -->
<div class="container-fluid p-0">
  <img src="assets/images/banner1.jpg" class="w-100" style="height: 400px; object-fit: cover;" alt="Contact Banner">
</div>

<!-- Contact Section -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="text-uppercase">Get in Touch</h2>
      <p class="text-muted">We’d love to hear from you! Whether you have a question about destinations, packages, or anything else, our team is ready to answer all your questions.</p>
    </div>

    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-7">
        <form action="send_message.php" method="POST">
          <div class="form-group">
            <label for="name">Full Name *</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="subject">Subject *</label>
            <input type="text" name="subject" id="subject" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="message">Message *</label>
            <textarea name="message" id="message" rows="6" class="form-control" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="col-md-5">
        <div class="bg-light p-4 rounded">
          <h5>Contact Details</h5>
          <p><strong>Address:</strong> 123 Explorer Lane, Travel City, World</p>
          <p><strong>Phone:</strong> +91 98765 43210</p>
          <p><strong>Email:</strong> info@tourism11.com</p>

          <h5 class="mt-4">Working Hours</h5>
          <p>Monday to Friday: 9:00 AM – 6:00 PM</p>
          <p>Saturday: 10:00 AM – 4:00 PM</p>
        </div>
      </div>
    </div>
  </div>
  <div class="map-container">
          <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.1891047680265!2d88.31944817434962!3d22.459526937106975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027b13f86977c5%3A0x2d4697cb923316c6!2sA%20Technologies!5e0!3m2!1sen!2sin!4v1732813514879!5m2!1sen!2sin"
              class="responsive-iframe"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
          </iframe>
      </div>
</section>

<!-- Reviews Carousel -->
<section class="py-5 bg-light" id="reviews" background-image: url('../assets/img/map-image.png');>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev" style="color: black;">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>
