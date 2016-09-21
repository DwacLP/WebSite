<?php
    include_once 'includes/functions.php';
    sec_session_start();
    header("refresh: 30;");
    $username = "root";
    $password = "";
    $hostname = "localhost";
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("secure_login",$dbhandle)
  or die("Could not select examples");
$RID = "2";

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
    <div  class="neon-text">PixlGames</div>
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
    <br>
    <?php
    $sql= mysql_query("SELECT Rechte FROM id WHERE `id` = '".$_SESSION['userid']."' ")or die(mysql_error());
    $result= mysql_fetch_array($sql);
    if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
    $value= $result['Rechte'];
    if($value >= $RID){
    ?>
    <?php
  $server = "213.202.228.172";
  $port = "25565";
  $timeout = "10";
  if ($server and $port and $timeout)
  {
  $minecraft = @fsockopen("$server", $port, $timeout);
  }
  if($minecraft)
  {
  if (isset($_POST['button'])) { exec('scrpits/rstart.sh'); }?>
<center>
    <form  action="" method="post">
        <button class="button-secondary pure-button">Restart Server</button>
    </form>
    <?php
        if (isset($_POST['button'])) { exec('scrpits/stop.sh'); } ?>
    <form  action="" method="post">
        <button class="button-error pure-button">Stop Server</button>
    </form>
</center>
    <?php
    }
    else
    {
        if (isset($_POST['button'])) { exec('scrpits/run.sh'); }
    ?>
<center>
    <form  action="" method="post">
        <button class="button-success pure-button">Start Server</button>
    </form>
</center>
<?php
  }
    }
  ?>
  <?php
  $server = "213.202.228.172";
  $port = "25566";
  $timeout = "10";
  if ($server and $port and $timeout)
  {
  $minecraft = @fsockopen("$server", $port, $timeout);
  }
  if($minecraft)
  {
  echo '<body style="background-color:#003300">';
  }
  else
  {
  echo '<body style="background-color:#660000">';
  }
  ?>

</body>
