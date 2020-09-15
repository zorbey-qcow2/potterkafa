<?php

function baslikCek()
{
    return 'Evler';
}

$config = include 'config.php';

$evler = file_get_contents("https://www.potterapi.com/v1/houses?key={$config['api_key']}");

$cozulmusEvler = json_decode($evler,true);

$evIsim = [];

foreach ($cozulmusEvler as $ev) {
$evIsim[] = $ev['name'];
}

//die(var_dump($evIsim));



?>

<?php
include 'govde.php';
include 'ustmenu.php';
?>

<div class="pt-5">

    <div class="container">

        <section class="jumbotron text-center pt-5 mb-5 bg-white">
            <div class="container">
                <h1 class="jumbotron-heading"><?php echo baslikCek(); ?></h1>
            </div>
        </section>

        <div class="row bg-white p-5">
            <?php  foreach ($evIsim as $ewisim) { ?>
                <div class="col-md-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://via.placeholder.com/500x200" height="200" width="500" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $ewisim; ?></h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut egestas diam, a fermentum leo.
                            </p>
                            <div class="justify-content-between align-items-center">
                                <div class="btn-group float-right">
                                    <a href="karakterler.php?ev=<?php echo strtolower($ewisim); ?>" class="btn btn-sm btn-outline-secondary">Öğrencileri Göster</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

