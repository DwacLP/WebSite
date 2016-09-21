<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
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
            <li><a href="login.php">Einloggen</a></li>
            <li><a href="register.php">Registrieren</a></li>
        </ul>
    </li>
    </ul>
        <!-- Anmeldeformular für die Ausgabe, wenn die POST-Variablen nicht gesetzt sind
        oder wenn das Anmelde-Skript einen Fehler verursacht hat. -->
        <div class="container">
        <div class="center">
        <h1>Registrierung</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Benutzernamen dürfen nur Ziffern, Groß- und Kleinbuchstaben und Unterstriche enthalten.</li>
            <li>E-Mail-Adressen müssen ein gültiges Format haben.</li>
            <li>Passwörter müssen mindest sechs Zeichen lang sein.</li>
            <li>Passwörter müssen enthalten
                <ul>
                    <li>mindestens einen Großbuchstaben (A..Z)</li>
                    <li>mindestens einen Kleinbuchstabenr (a..z)</li>
                    <li>mindestens eine Ziffer (0..9)</li>
                </ul>
            </li>
            <li>Das Passwort und die Bestätigung müssen exakt übereinstimmen.</li>
        </ul>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                method="post"
                name="registration_form">
            Username: <input type='text'
                name='username'
                id='username' /><br>
            Email: <input type="text" name="email" id="email" /><br>
            Password: <input type="password"
                             name="password"
                             id="password"/><br>
            Confirm password: <input type="password"
                                     name="confirmpwd"
                                     id="confirmpwd" /><br>
            <input type="button"
                   value="Register"
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" />
        </form>
        <p><a href="index.php">Einloggen</a></p>
         </div>
    </body>
</html>
