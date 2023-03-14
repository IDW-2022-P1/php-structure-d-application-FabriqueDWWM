<?php include './config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <link rel="stylesheet" href="<?= CSS ?>/about.css">
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>

<body>
    <?php 
        $titre = 'About';
        include TEMPLATE_PARTS . '/_header.php';
    ?>

    <main>
        <section class="established">
            <h2>established in 1995</h2>
            <article>
                <p>Tell people about what you, your expertise and experience. Think about what you would want to see on
                    this page if you
                    were looking at an about page. This is your chance to tell about how you are qualified to serve
                    them.</p>
                <p>Nulla hendrerit metus et tincidunt tristique. Fusce molestie commodo mauris, vitae vestibulum tortor
                    venenatis non.
                    Pellentesque quis urna a magna bibendum volutpat a at nisl. Suspendisse finibus, tortor id gravida
                    feugiat, nulla leo
                    venenatis nisi, et aliquam quam ligula eget dui. Suspendisse lectus lorem, varius vel dapibus a,
                    vestibulum a eros. Sed
                    sed magna in neque commodo pretium.<br><br>
                    We look forward to your stay.</p>
                <h3>John & Steven</h3>
            </article>
        </section>
    </main>
    
    <?php include TEMPLATE_PARTS . '/_footer.php'; ?>

</body>

</html>