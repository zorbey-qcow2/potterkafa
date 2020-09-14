<?php

function baslikCek()
{
    return 'Evler';
}

$evler = file_get_contents('https://www.potterapi.com/v1/houses?key=$2a$10$x4.Fv0K2Pjf.QN44jS.hOeNTuVrkIbOHt8YLKaLkq/cvRwPXiS3/G');

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

