<?php
require_once 'template-parts/layout/header.php'; ?>

<section id="contact">

    <img class="leave-top-right" src="assets/image/leave-right.png" alt="">

    <img class="leave-top-left" src="assets/image/leave-left.png" alt="">

    <div class="container" style="max-width: 900px;">

        <div class="brand-logo text-center" >
            <img src="http://localhost/agri-health/assets/images/logo.png" style="width: 50px; padding-bottom: 30px;">
        </div>

        <form method="POST" action="./template-parts/send_mail.php">
            <div class="row mb-5">
                <div class="col first_name">
                    <div class="form">

                        <input value="<?= isset($first_name) ? $first_name : null; ?>" type="text"
                               id="form3Example1" min="2" max="20" class="form-control" placeholder="Prénom"
                               name="first_name" required aria-invalid="false">
                    </div>
                </div>
                <div class="col name">
                    <div class="form">

                        <input value="" type="text" id="form3Example2"
                               min="3" max="20" class="form-control" placeholder="Nom" name="last_name" aria-invalid="false">

                    </div>
                </div>
            </div>

            <div class="form mb-5">
                <input type="text" id="form3Example3" class="form-control" placeholder="Objet" aria-invalid="false">
            </div>

            <div class="form mb-5">
                <input type="email" id="form3Example3" class="form-control" placeholder="Adresse email" required aria-invalid="false">
            </div>

            <div class="form">
                    <textarea class="form-control" min="15" max="200" name="message" id="form3Example3" cols="30"
                              rows="10" placeholder="Votre message" required aria-invalid="false"></textarea>
            </div>

            <div class="button-wrapper text-center" style="padding-top: 30px; padding-bottom: 30px;">
                <button type="submit" class="btn btn-primary" style="background-color: #25721E; border: none;">Envoyer</button>
            </div>

        </form>

    </div>
</section>

<?php require_once 'template-parts/layout/footer.php'; ?>




