<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vinpeace - Dynamic Website</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
  <!-- Header with Navbar -->
  <header>
    <?php include "includes/navbar.php"; ?>
  </header>

  <!-- Main Container -->
  <div class="container" id="pageContent">
    <?php include "content.php"; ?>
  </div>

  <!-- Footer -->
  <footer class="text-center mt-5">
    <p>&copy; 2024 Vinpeace. Semua Hak Dilindungi.</p>
    <div class="contact-info mb-3">
      <p>Telepon: (123) 456-7890</p>
      <p>Email: alvinalfandy0601@vinpeace.com</p>
    </div>
    <div class="social-icons">
      <a href="https://www.instagram.com/alvinalfandyy" target="_blank" class="me-3"><i class="fab fa-instagram fa-2x"></i></a>
      <a href="https://x.com/heeseuxxng" target="_blank" class="me-3"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="https://github.com/alvinalfandyy" target="_blank" class="me-3"><i class="fab fa-github fa-2x"></i></a>
      <a href="https://www.linkedin.com/in/alvin-alfandy-69893b1a8/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>