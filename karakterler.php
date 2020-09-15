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
    $karakterisim[] = [
            'isim' =>  $karakter['name'],
            'rol' =>  $karakter['role'] ?? '-',
            'ev' =>  $karakter['house'] ?? '-',
            'kan' =>  $karakter['bloodStatus'],
            'tür' =>  $karakter['species'],
];
}

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
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">İsim</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Ev</th>
                    <th scope="col">Kan Durumu</th>
                    <th scope="col">Tür</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $counter = 1;
                foreach ($karakterisim as $karakterdetay) {
                    if ($_GET['ev'] == strtolower($karakterdetay['ev']) ) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $counter++; ?> </th>
                        <td><?php echo $karakterdetay['isim']; ?></td>
                        <td><?php echo $karakterdetay['rol']; ?></td>
                        <td><?php echo $karakterdetay['ev']; ?></td>
                        <td><?php echo $karakterdetay['kan']; ?></td>
                        <td><?php echo $karakterdetay['tür']; ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>

