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

<div class="pt-5">

    <div class="container">

        <section class="jumbotron text-center pt-5 mb-5 bg-white">
            <div class="container">
                <h1 class="jumbotron-heading"><?php echo baslikCek(); ?></h1>
            </div>
        </section>

        <div class="bg-white p-5">
            <div class="col-md-12">


                <p>Tebrikler! Seçmen şapka sizi <strong><?php echo $sapka; ?></strong> evine yerleştirdi.</p>

            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

