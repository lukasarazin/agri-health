<?php
require_once 'template-parts/layout/header.php';
require_once 'functions/test.php';

?>

    <main>
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="1">Une analyse simple et sans danger</h1>
                        <p>Suivre les signes vitaux de vos animaux est désormais possible grâce à Agri Health et ses
                            partenaires.</p>
                        <div class="about d-flex">
                            <a href="#" class="btn btn-primary">Comment ça marche ?</a>
                            <a href="#" class="align-content-center">Voir la vidéo</a>
                        </div>
                    </div>
                    <div class="col-6 cow">

                    </div>
                </div>
            </div>
        </section>

        <section id="stats">
            <div class="container">
                <div class="row text-center">
                    <h3 class="col stat">350k</h3>
                    <h3 class="col stat">350k</h3>
                    <h3 class="col stat">350k</h3>
                </div>
            </div>
        </section>

        <section id="space">
            <div class="container">
                <div class="row py-3">
                    <div class="col-6">
                        <h1>
                            L’environnement
                        </h1>
                        <p>
                            Vos animaux peuvent agir différemment en fonction du lieu dans lequel ils vivent. AInsi,
                            comprendre ce qu’il ressent devient indispensable.
                        </p>
                    </div>
                    <div class="col">
                        <img src="http://localhost/agri-health/assets/images/1.png" alt="">
                    </div>
                    <div class="col">
                        <img src="http://localhost/agri-health/assets/images/2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require_once 'template-parts/layout/footer.php'; ?>