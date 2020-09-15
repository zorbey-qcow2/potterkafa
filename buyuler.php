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
    $arraybuyu[] = [
            'buyuadi' => $buyu['spell'],
            'buyutur' => $buyu['type'],
            'buyuetki' => $buyu['effect'],
        ];
}

// die(var_dump($arraybuyu));

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
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Büyü</th>
                    <th scope="col">Tür</th>
                    <th scope="col">Etki</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $counter = 1;
                foreach ($arraybuyu as $buyulist) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $counter++; ?> </th>
                        <td><?php echo $buyulist['buyuadi']; ?></td>
                        <td><?php echo $buyulist['buyutur']; ?></td>
                        <td><?php echo $buyulist['buyuetki']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php

include 'footer.php';
?>

