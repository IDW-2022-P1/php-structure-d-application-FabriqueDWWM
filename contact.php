<?php include './config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <link rel="stylesheet" href="<?= CSS ?>/contact.css">
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>

<body>
    <?php 
        $titre = 'Contact';
        include TEMPLATE_PARTS . '/_header.php';
    ?>

    <main>
        <form action="">
            <label for="">Email</label>
            <input type="text">
            <label for="">Objet</label>
            <input type="text">
            <label for="">Message</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Envoyer">
        </form>
    </main>

<?php include TEMPLATE_PARTS . '/_footer.php'; ?>

</body>

</html>