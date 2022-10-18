<?php
// Autoloader
if (file_exists('vendor/' . 'autoload.php')) {
    require_once 'vendor/' . 'autoload.php';
}

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('./');
$dotenv->safeLoad();

function redirect($url)
{
    if (!headers_sent()) {
        header('Location: ' . $url);
        exit;
    } else {
        echo '<script type="text/javascript">';
        echo 'window.location.href="' . $url . '";';
        echo '</script>';
    }
}

include 'php/db.php';
include 'php/profile.php';
include 'php/login.php';
include 'php/apiRequests.php';
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyArk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/sidebars.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="css/main.css?<?php echo time(); ?>" rel="stylesheet">
    <script src="js/sidebars.js?<?php echo time(); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="js/main.js?<?php echo time(); ?>"></script>
    <script src="js/ff14.js?<?php echo time(); ?>"></script>
</head>

<?php
$userName = "Guest";
$profilePic = "https://glowmagzine.com/wp-content/uploads/2022/04/Screenshot-2022-04-26-at-2.32.19-PM.png";
$userId = 999999;
if (session('access_token')) {
    $user = apiRequest($apiURLBase);
    $userName = $user->username;
    $userId = $user->id;
    $profilePic = 'https://cdn.discordapp.com/avatars/' . $user->id . '/' . $user->avatar . '.png';
}
?>



<body>
    <div id="backdrop"></div>
    <?php include 'parts/svgs.php';?>
    <main class="d-flex flex-nowrap">
        <?php include 'parts/sidebar.php'?>



        <div id="mainContent">
            <div class="slogen">
                <h1> Your Static Loot Tracker </h1>
                <h2> Because writing it on paper is too much to ask! </h2>
            </div>
        </div>
    </main>
</body>

</html>