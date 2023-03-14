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
        $page = "accueil";
        $titre = 'Accueil';
        if(isset($_GET["page"])){
            $page = $_GET["page"]; // valeur du paramètre d'url page
            // en fonction de la valeur de $page, on affichera un contenu différent
            switch($page){
                case "about":
                    $titre = 'A propos';
                break;
                case "services":
                    $titre = 'Services';
                break;
                case "contact":
                    $titre = 'Contact';
                break;
                default:
                    $titre = '404';
            }
        }
        include TEMPLATE_PARTS . '/_header.php';
        if(file_exists(PAGES . $page . ".php")){
            include PAGES . $page . ".php";
        }else{
            include PAGES . "page404.php";
        }

    ?>

    <!--  -->
    
    <?php include TEMPLATE_PARTS . '/_footer.php'; ?>

</body>

</html>