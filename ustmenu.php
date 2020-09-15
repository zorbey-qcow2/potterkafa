<div class="bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Menü</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/index.php') { echo 'active'; } ?>" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/characters.php') { echo 'active'; } ?>" href="karakterler.php">Karakterler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/houses.php') { echo 'active'; } ?>" href="evler.php">Evler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/spells.php') { echo 'active'; } ?>" href="buyuler.php">Büyüler</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>