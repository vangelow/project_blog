<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
    <a href="<?=APP_ROOT?>" ><img src="<?=APP_ROOT?>/content/images/blog_icon.png"></a>
    <a href="<?=APP_ROOT?>/" id="icons">Home</a>
    <?php if ($this->isLoggedIn) : ?>
        <a href="<?=APP_ROOT?>/posts"name="icons">Posts</a>
        <a href="<?=APP_ROOT?>/posts/create"name="icons">Create Post</a>
        <a href="<?=APP_ROOT?>/users"name="icons">Users</a>
    <?php else: ?>
        <a href="<?=APP_ROOT?>/users/login"name="icons">Login</a>
        <a href="<?=APP_ROOT?>/users/register"name="icons">Register</a>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
        <div id="logged-in-info">
            <span>Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
            <form method="post" action="<?=APP_ROOT?>/users/logout">
                <input type="submit" value="Logout"/>
            </form>
        </div>
    <?php endif; ?>
</header>

<?php require_once('show-notify-messages.php'); ?>
