<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'Eingeloggt';
} else {
    $logged = 'Ausgeloggt';
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>PixlGames</title>
    <link href="stylesheets/menu.css" rel="stylesheet" type="text/css" media="all" />
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta charset="UTF-8">
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link rel="shortcut icon" href="Bilder/icon/Icon.png" type="image/x-icon" />
    <link href="//db.onlinewebfonts.com/c/da1a9fbcd9ded63df072427001b24e21?family=04b_03" rel="stylesheet" type="text/css"/>
</head>
    <body>
        <div class="neon-text">PixlGames</div>
    <ul class="menu cf">
    <li>
        <a href="index.php">Home</a>
    </li>
    <li>
        <a href="">Server</a>
        <ul class="submenu">
        <li><a href="Minecraft.php">Minecraft</a></li>
        <li><a href="Teamspeak.php">Teamspeak</a></li>
        </ul>
    </li>
    <li>
        <a href="">Account</a>
        <ul class="submenu">
            <li><a href="login.php">Ein- und Ausloggen</a></li>
            <li><a href="register.php">Registrieren</a></li>
        </ul>
    </li>
    </ul>
    <div class="container">
    <div class="center">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';}
        ?>
        <form action="includes/process_login.php" method="post" name="login_form">
            Email: <input type="text" name="email" />
            Password: <input type="password"
                             name="password"
                             id="password"/>
            <input type="button"
                   value="Login"
                   onclick="formhash(this.form, this.form.password);" />
        </form>
        <p><a href="includes/logout.php">Ausloggen</a></p>
        <p>Du bist <?php echo $logged ?>.</p>
        </div>
        </body>
</html>
