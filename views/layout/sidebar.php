
<!-- sidebar.php -->
<aside class="sidebar bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Menu</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?pag=article">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?pag=event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?pag=gallery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?pag=klien">Klien</a>
                    </li>
                    <?php if(isset($_SESSION['sesi'])): ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="logout.php"><i class="fas fa-arrow-alt-circle-left"></i> Logout</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="membershipDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                        <ul class="dropdown-menu" aria-labelledby="membershipDropdown">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</aside>
