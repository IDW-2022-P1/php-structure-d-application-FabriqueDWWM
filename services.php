<?php include './config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <link rel="stylesheet" href="<?= CSS ?>/services.css">
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>

<body>
    <?php
        $titre = 'Services';
        include TEMPLATE_PARTS . '/_header.php';
    ?>

    <main>
        <section class="servicesSection">
            <article>
                <h2>service 1</h2>
                <p>A short description of your service. Lorem ipsm dolor amet, consec tetur adipis cing elit, sed do
                    eiusmod tempor incid
                    idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco
                    la enim lorem isae
                    ni.</p>
                <button class="btnBorderTransparent">CONTACT</button>
            </article>
            <article>
                <img src="<?= IMAGES ?>/green-leafed-trees-during-fog-time-167684.jpg" alt="">
            </article>
        </section>
        <section class="servicesSection">
            <article>
                <h2>service 2</h2>
                <p>A short description of your service. Lorem ipsm dolor amet, consec tetur adipis cing elit, sed do
                    eiusmod tempor incid
                    idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco
                    la enim lorem isae
                    ni.</p>
                <button class="btnBorderTransparent">CONTACT</button>
            </article>
            <article>
                <img src="<?= IMAGES ?>/snowy-mountain-1287145.jpg" alt="">
            </article>
        </section>
        <section class="servicesSection">
            <article>
                <h2>service 3</h2>
                <p>A short description of your service. Lorem ipsm dolor amet, consec tetur adipis cing elit, sed do
                    eiusmod tempor incid
                    idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco
                    la enim lorem isae
                    ni.</p>
                <button class="btnBorderTransparent">CONTACT</button>
            </article>
            <article>
                <img src="<?= IMAGES ?>/photo-of-people-standing-on-top-of-mountain-near-grasses-733162.jpg" alt="">
            </article>
        </section>
    </main>

    <?php include TEMPLATE_PARTS . '/_footer.php'; ?>

</body>

</html>