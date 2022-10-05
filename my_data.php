<?php
require_once 'template-parts/layout/header.php';
require_once 'functions/test.php';

$a = getDistances();

?>

<section id="data">
    <div class="container">
        <h1>Mes données</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Distances</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($a as $b): ?>
                <tr>
                    <th scope="row"><?php echo $b['ID'] ?></th>
                    <td><?php echo $b['distance'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>