<?php

function baslikCek()
{
    return 'Karakterler';
}

$config = include 'config.php';

$karakterler = file_get_contents("https://www.potterapi.com/v1/characters?key={$config['api_key']}");

$karakterisim = [];

$karakterler = json_decode($karakterler, true);

foreach ($karakterler as $karakter) {
    $karakterisim[] = $karakter['name'];
}

?>

<?php
include 'govde.php';
include 'ustmenu.php';
?>

<h1><?php echo baslikCek(); ?></h1>

<?php

foreach ($karakterisim as $isim) {
    echo "$isim<br>";
}

?>

<?php
include 'footer.php';
?>

