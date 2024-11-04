<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
  <a class="navbar-brand" href="?page=home"><i class="fas fa-anchor"></i> Vinpeace</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= ($_GET['page'] ?? 'home') === 'home' ? 'active' : '' ?>" href="?page=home"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($_GET['page'] ?? '') === 'about' ? 'active' : '' ?>" href="?page=about"><i class="fas fa-info-circle"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($_GET['page'] ?? '') === 'contact' ? 'active' : '' ?>" href="?page=contact"><i class="fas fa-envelope"></i> Contact</a>
        </li>
        <!-- Belajar Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="belajarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-book-reader"></i> Belajar
          </a>
          <ul class="dropdown-menu" aria-labelledby="belajarDropdown">
            <li><a class="dropdown-item" href="?page=datatables"><i class="fas fa-table"></i> Datatables</a></li>
            <li><a class="dropdown-item" href="?page=form"><i class="fas fa-list-alt"></i> Form </a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Something else here</a></li>
          </ul>
        </li>
        <!-- Search Button -->
        <li class="nav-item">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </li>
      </ul>
    </div>
    </div>
</nav>