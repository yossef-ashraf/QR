<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4169e1">
    <title> <?= $title ?></title>
    <link rel ="icon" href="<?= PATH ?>/style/img/icon.svg">
    <link rel="stylesheet" href="<?= PATH ?>/style/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= PATH ?>/style/main.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&#038;display=swap"rel="stylesheet"/>
    <link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>


<ul class="nav justify-content-center ">

    <li class="nav-item">
        <i class="fa-solid fa-qrcode m-1"></i>
    </li>

    <li class="nav-item">
        <a class="nav-link" href='<?= PATH ?>/user/index'>my qrs</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href='<?= PATH ?>/user/formqr'>add qr </a>
    </li>

    <li class="nav-item">
        <a class="nav-link"href='<?= PATH ?>/user/formqruser'>add Business Card qr </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href='<?= PATH ?>/user/logout'>logout</a>
    </li>

    <li class="nav-item">
        <i class="fa-solid fa-qrcode m-1"></i>
    </li>
</ul>
