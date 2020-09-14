<?php

function baslikCek()
{
    return 'Büyüler';
}

$config = include 'config.php';

$buyuler = file_get_contents("https://www.potterapi.com/v1/spells?key={$config['api_key']}");

$acikodeBuyuler = json_decode($buyuler, true);

$arraybuyu = [];

foreach ($acikodeBuyuler as $buyu) {
    $arraybuyu[] = $buyu['spell'];
}

// die(var_dump($arraybuyu));

?>

<?php
include 'govde.php';
include 'ustmenu.php';
?>

<h1><?php echo baslikCek(); ?></h1>

<?php

foreach ($arraybuyu as $buyulist) {
    echo $buyulist . '<br>';
}

include 'footer.php';
?>

