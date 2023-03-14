<?php include './config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>

<body>
    <?php
        $titre = 'Home';
        include TEMPLATE_PARTS . '/_header.php';
    ?>

    <?php
        var_dump($_GET["page"]);
        $page = $_GET["page"]; // valeur du paramètre d'url page
        // en fonction de la valeur de $page, on affichera un contenu différent
        if($page == "accueil"){
            echo "Page d'accueil";
        }else if($page == "about"){
            echo "Page about";
        }else if($page == "services"){
            echo "Page services";
        }else if($page == "contact"){
            echo "Page contact";
        }
    ?>

    <!-- <main>
        <section class="services">
            <article>
                <div class="overlay"></div>
                <h2>service 1</h2>
            </article>
            <article>
                <div class="overlay"></div>
                <h2>service 2</h2>
            </article>
            <article>
                <div class="overlay"></div>
                <h2>service 3</h2>
            </article>
        </section>
        <section class="amazing">
            <article>
                <h2>amazing things for you</h2>
            </article>
            <article>
                <p>
                    Always write benefits over features. Mention all the benefits or services with some real examples.
                    Focus on how you can
                    help and benefit your user. Use simple words so that you don’t confuse people. Say as much in as few
                    words as possible.
                </p>
                <p>
                    Speak directly to users using you not I or we.
                </p>
                <p><button class="btnBorderTransparent">OUR HISTORY</button></p>
            </article>
        </section>
        <section class="callToAction">
            <div class="overlay"></div>
            <h2><em>Call To Action</em></h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,
                pulvinar dapibus
                leo.
            </p>
            <button id="btn_contact">CONTACT</button>
        </section>
        <section class="images">
            <div>
                <article><img src="<?= IMAGES ?>/snowy-mountain-1287145.jpg" alt=""></article>
                <article><img src="<?= IMAGES ?>/green-leafed-trees-during-fog-time-167684.jpg" alt=""></article>
                <article><img src="<?= IMAGES ?>/green-grass-field-and-mountain-1034887.jpg" alt=""></article>
                <article><img src="<?= IMAGES ?>/bird-s-eye-view-photography-of-green-forest-1208379.jpg" alt=""></article>
                <article><img src="<?= IMAGES ?>/photo-of-people-standing-on-top-of-mountain-near-grasses-733162.jpg" alt="">
                </article>
                <article><img src="<?= IMAGES ?>/mountain-and-lake-at-sunset-135157.jpg" alt=""></article>
            </div>
        </section>
    </main> -->
    
    <?php include TEMPLATE_PARTS . '/_footer.php'; ?>

</body>

</html>