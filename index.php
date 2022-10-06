<?php
require_once 'template-parts/layout/header.php';
require_once 'functions/test.php';

?>

    <main>  
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="1" style="color: #25721E; font-weight: 600; margin-bottom: 30px; font-size: 50px;">Une analyse simple <br>et sans danger</h1>
                        <p style="margin-bottom: 40px; font-size: 20px;">Suivre les signes vitaux de vos animaux est désormais <br>possible grâce à Agri Health et ses
                            partenaires.</p>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary" style="background-color: #25721E; border: none; 
                            margin-right: 35px; padding: 8px 15px 10px 15px; font-size:16px;">Comment ça marche ?</a>
                            <img src="http://localhost/agri-health/assets/images/circle.png" style="width: 25px; height: 25px;; margin-top: 10px;" alt="">
                            <a href="#" class="align-content-center" style="color: #25721E; text-decoration: none; margin-top: 10px; padding-left: 10px; font-size:16px; ">Voir la vidéo</a>
                        </div>
                    </div>
                    <div class="col-6 cow">

                    </div>
                </div>
            </div>
        </section>

        <section id="stats" style="padding: 50px;">
            <div class="container">
                <div class="row text-center">
                    <h3 class="col stat">350k<p style="font-size: 20px; font-weight: 400;">STRESS</p></h3>
                    <h3 class="col stat">350k<p style="font-size: 20px; font-weight: 400;">STRESS</p></h3>
                    <h3 class="col stat">350k<p style="font-size: 20px; font-weight: 400;">STRESS</p></h3>
                </div>
            </div>
        </section>

        <section id="space" style="margin-top: 50px;">
            <div class="container">
                <div class="row py-3">
                    <div class="col-6" style="margin-left: 125px;">
                        <h1 style="color: #25721E; font-weight: 600;">
                            L’environnement
                        </h1>
                        <p style="max-width: 500px; font-size: 20px;">
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

