<?php

function baslikCek()
{
    return 'Anasayfa';
}

$sapka = file_get_contents('https://www.potterapi.com/v1/sortinghat?key=$2a$10$x4.Fv0K2Pjf.QN44jS.hOeNTuVrkIbOHt8YLKaLkq/cvRwPXiS3/G');

?>

<?php
include 'govde.php';
include 'ustmenu.php';
?>

<h1><?php echo baslikCek(); ?></h1>

<p>Tebrikler! Seçici şapka sizi <?php echo $sapka; ?> evine yerleştirdi.</p>

<?php
include 'footer.php';
?>

