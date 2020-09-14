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

<h1><?php echo baslikCek(); ?></h1>

<?php

foreach ($evIsim as $ewisim) {
    echo $ewisim . "<br>";
}

include 'footer.php';
?>

