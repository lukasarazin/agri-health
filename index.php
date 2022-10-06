<?php
require_once 'template-parts/layout/header.php';
require_once 'functions/test.php';

?>

    <main>  
        <section id="home">
            <div class="container" style="margin-left: 199px;">
                <div class="d-flex">
                    <div style="margin-top: 100px; margin-right: -125px; width: 500px;">
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
                    <div>
                    <img src="http://localhost/agri-health/assets/images/cow-bg.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="stats" style="padding: 50px;">
            <div class="container">
                <div class="row text-center">
                    <h3 class="col stat">3500<p style="font-size: 20px; font-weight: 400;">Vaches</p></h3>
                    <h3 class="col stat">192<p style="font-size: 20px; font-weight: 400;">Moutons</p></h3>
                    <h3 class="col stat">128<p style="font-size: 20px; font-weight: 400;">Chèvres</p></h3>
                </div>
            </div>
        </section>

        <section id="space" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="container">
                <div class="row py-3">
                    <div class="col-6" style="margin-left: 125px;">
                        <h1 style="color: #25721E; font-weight: 600;">
                            L’environnement
                        </h1>
                        <p style="max-width: 500px; font-size: 20px;">
                            Vos animaux peuvent agir différemment en <br>fonction du lieu dans lequel ils vivent. Ainsi,
                            <br>comprendre ce qu’il ressent devient indispensable.
                        </p>
                    </div>
                    
                    <div class="col" style="width: 25px; margin-left: -115px;">
                        <img src="http://localhost/agri-health/assets/images/1.png" alt="">
                    </div>
                    <div class="col" style="width: 25px; margin-left: -115px;">
                        <img src="http://localhost/agri-health/assets/images/2.png" alt="">
                    </div>
                    
                </div>
            </div>
        </section>
        <section id="stats" style="padding: 50px;">
            <div class="container">

                <div class="text-center row">
                    <div class="col-6" style="margin-left: 115px;">
                    <h3 class="stat" style="font-size: 36px; text-align: left; margin-bottom: 20px;"><span style="padding-bottom: 200px;">La tech au service de la vie</span></h3>
                    <p style="font-size: 20px; font-weight: 400; text-align: left; margin-bottom: 30px;">Comprenez mieux vos animaux et <br>aidez les à aller mieux en même temps.</p>
                    <a href="#" class="btn btn-primary" style="background-color: #ffffff; color: #25721E; border: none; 
                            margin: auto; margin-left: -500px; padding: 8px 15px 10px 15px; font-size: 16px; font-weight: 600;">Voir le produit</a>
                </div>
                <div class="col-6">
                    <img src="http://localhost/agri-health/assets/images/collier.png" class="align-right" style="width: 550px; position: absolute; right: 215px; margin-top: -275px;" >
                </div>
                </div>
            </div>
        </section>

        <section style="padding: 50px; padding-top: 200px;">
            <div class="container">
                <h3 style=" color: #25721E; text-align: center; font-size: 35px; font-weight: 700;">Un animal a aussi des sentiments</h3>
                <p style="font-size: 20px; font-weight: 400; text-align: center; padding-bottom: 50px;">Vos animaux peuvent agir différemment en fonction du lieu dans lequel ils vivent</p>
                
                <div class="row text-center">
                    <h3 class="col stat"><img src="http://localhost/agri-health/assets/images/coeur.png" style="width: 150px;">
                        <p style="font-size: 30px; font-weight: 700;">DOULEUR</p></h3>
                    <h3 class="col stat"><img src="http://localhost/agri-health/assets/images/exclamation.png" style="width: 131px;"><p style="font-size: 30px; font-weight: 700;">STRESS</p></h3>
                    <h3 class="col stat"><img src="http://localhost/agri-health/assets/images/pouce.png" style="width: 150px;"><p style="font-size: 30px; font-weight: 700;">FATIGUE</p></h3>
                </div>
            </div>
        </section>


    </main>

<?php require_once 'template-parts/layout/footer.php'; ?>

