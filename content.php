<?php
// Check if a specific page is requested
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    // Switch case to include the corresponding page
    switch ($page) {
        case 'home':
            include "includes/home.php";
            break;
        case 'about':
            include "includes/about.php";
            break;
        case 'contact':
            include "includes/contact.php";
            break;
        case 'form':
            include "includes/form.php"; // Include form.php
            break;
        case 'datatables':
            include "includes/datatables.php";
            break;
        default:
            include "includes/404.php"; // Redirect to 404.php if the page is not found
    }
} else {
    // Default to home page if no page parameter is provided
    include "includes/home.php"; // Ubah ini jika ingin menampilkan halaman lain secara default
}
