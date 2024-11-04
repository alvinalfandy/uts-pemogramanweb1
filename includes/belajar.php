<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Priasigma - Dynamic Website</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <!-- Header with Navbar -->
    <header class="header-section">
        <h1 class="text-center p-3 animated-header">Priasigma - Dynamic Website</h1>
        <?php include "includes/navbar.php"; ?>
    </header>

    <!-- Main Container -->
    <div class="container my-5" id="pageContent">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
                case 'datatables':
                    include "datatables.php";
                    break;
                default:
                    include "home.php";
            }
        } else {
            include "home.php";
        }
        ?>
    </div>

    <!-- Footer Section -->
    <footer class="footer-section text-center p-3 mt-5">
        <p>&copy; 2023 Priasigma | Follow me on:
            <a href="#">Instagram</a> | <a href="#">Twitter</a> | <a href="#">LinkedIn</a>
        </p>
    </footer>

    <!-- JavaScript -->
    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>