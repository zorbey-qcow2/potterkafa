<?php

function baslikCek()
{
    return 'Karakterler';
}

$karakterler = file_get_contents('https://www.potterapi.com/v1/characters?key=$2a$10$x4.Fv0K2Pjf.QN44jS.hOeNTuVrkIbOHt8YLKaLkq/cvRwPXiS3/G');

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
    echo $isim . "<br>";
}

?>

<?php
include 'footer.php';
?>

