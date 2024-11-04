<div class="container" id="pageContent">
    <?php
    // Periksa apakah parameter 'page' ada dalam URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        // Gunakan switch case untuk menentukan halaman yang akan dimasukkan
        switch ($page) {
            case 'home':
                include "includes/home.php"; // Memasukkan home.php
                break;
            case 'about':
                include "includes/about.php"; // Memasukkan about.php
                break;
            case 'contact':
                include "includes/contact.php"; // Memasukkan contact.php
                break;
            case 'form':
                include "includes/form.php"; // Memasukkan form.php
                break;
            case 'datatables':
                include "includes/datatables.php"; // Memasukkan datatables.php
                break;
            default:
                include "includes/404.php"; // Mengarahkan ke 404.php jika halaman tidak ditemukan
        }
    } else {
        // Secara default memuat halaman home jika tidak ada parameter 'page'
        include "includes/home.php";
    }
    ?>
</div>