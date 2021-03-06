<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
header("Content-Type: text/html; Charset=utf-8");
sec_session_start();
?>
<head>
    <title>PixlGames</title>
    <link href="stylesheets/menu.css" rel="stylesheet" type="text/css" media="all" />
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Bilder/icon/Icon.png" type="image/x-icon" />
    <link href="//db.onlinewebfonts.com/c/da1a9fbcd9ded63df072427001b24e21?family=04b_03" rel="stylesheet" type="text/css"/>
</head>
<body>
    <!--Logo-->
    <div class="neon-text">PixlGames</div>
    <!--Drop-Down-Menu(Eingeloggt) -->
    <?php if (login_check($mysqli) == true) { ?>
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
        </ul>
    </li>
    </ul>
    <?php
    } else { ?>
    <!--Drop-Down-Menu(Ausgeloggt)-->
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
    <?php
}
    ?>
    <!--Sidebar-->
    <div id="container">
    <div id="subcontainer">
        <div id="sidebar">
            <div class="logo">
            <h1>News</h1>
            <p>
                <?php
                    $info = "info.txt";
                    if(file_exists($info)){
                        echo file_get_contents($info);
                    }
                ?>
            </p>
            </div>
        </div>
    </div>

</div>
</body>
