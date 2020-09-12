<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menü</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/index.php' ) { echo 'active'; } ?>">
                <a class="nav-link" href="index.php">Anasayfa </a>
            </li>
            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/karakterler.php' ) { echo 'active'; } ?>">
                <a class="nav-link" href="karakterler.php">Karakterler</a>
            </li>
            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/evler.php' ) { echo 'active'; } ?>">
                <a class="nav-link" href="evler.php">Evler</a>
            </li>
            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/buyuler.php' ) { echo 'active'; } ?>">
                <a class="nav-link" href="buyuler.php">Büyüler</a>
            </li>
        </ul>
    </div>
</nav>