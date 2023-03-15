<?php include './config/config.php'; ?>
<?php
// $page = "accueil";
// if (isset($_GET["page"])) {
//     $page = $_GET["page"]; // valeur du paramètre d'url page
// }

$routes = include 'config/routes.php';
$page = isset($_GET["page"]) ? $_GET["page"] : "accueil";
// if (isset($routes[$page])) {
//     $titre = $routes[$page];
// } else {
//     $titre = "404";
// }
$titre = isset($routes[$page]) ? $routes[$page] : "404";
$pageLink = CSS . "/" . $page . ".css";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <?php if (file_exists($pageLink)) : ?>
        <link rel="stylesheet" href="<?= $pageLink ?>">
    <?php endif ?>
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>

<body>
    <?php
    include TEMPLATE_PARTS . '/_header.php';
    if (file_exists(PAGES . $page . ".php")) {
        include PAGES . $page . ".php";
    } else {
        include PAGES . "page404.php";
    }
    ?>

    <?php include TEMPLATE_PARTS . '/_footer.php'; ?>

</body>

</html>