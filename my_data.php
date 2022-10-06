<?php
require_once 'template-parts/layout/header.php';
require_once 'functions/test.php';


$a = getDistances();
$c = getActivities();
?>

<section id="data">
    <div class="container">
        <h1>Mes données</h1>
        <div class="row">
            <div class="col">
                <h4 class="mt-5">Distances parcourues</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Distances parcourues</th>
                        <th scope="col">Partit à</th>
                        <th scope="col">Signe de vie</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 0 ?>
                    <?php foreach ($a as $b): ?>
                        <tr>
                            <th scope="row">Vache <?php echo $b['ID'] ?></th>
                            <td><?php echo $b['distance'] ?> cm</td>
                            <?php $date = new DateTime($b['date']); ?>
                            <td><?php echo date_format($date, 'H:i') ?></td>
                            <td>

                                <?php if (strlen($b['life']) >= 1) { ?>
                                    🟢
                                <?php } else { ?>
                                    🔴
                                <?php } ?>


                            </td>
                        </tr>
                        <?php if (++$i == 5) break; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>