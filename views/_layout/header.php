<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/icon.jpg" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
    <a href="<?=APP_ROOT?>"id="icons" ><img src="<?=APP_ROOT?>/content/images/blog_icon.jpg"></a>
    <a href="<?=APP_ROOT?>/">Начало</a>
    <?php if ($this->isLoggedIn) : ?>
        <?php if ($this->isAdmin) : ?>
        <a href="<?=APP_ROOT?>/posts/create" name="icons">Създай пост</a>
        <?php endif?>
        <a href="<?=APP_ROOT?>/posts" name="icons">Новини</a>
    <?php else: ?>

        <a href="<?=APP_ROOT?>/users/login"name="icons">Вход</a>
        <a href="<?=APP_ROOT?>/users/register"name="icons">Регистрация</a>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
        <div id="logged-in-info">
            <span>Здравей, <b><?=htmlspecialchars($_SESSION['username'])?></b></span> <br>
                <a href="<?=APP_ROOT?>/users/logout" input type="submit">Изход</a>

        </div>
    <?php endif; ?>
</header>

<?php require_once('show-notify-messages.php'); ?>
