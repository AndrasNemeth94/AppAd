<?php
    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css" type="text/css">
        <title>AdApp</title>
    </head>

    <header>
    <h3>AdApp</h3>
        <ul>
        <li><a href="index.php?home" >Home</a></li>
        <li><a href="index.php?users">Users</a></li>
        <li><a href="index.php?advertisements">Advertisements</a></li>
        </ul>
        
    </header>
    <main>
        <?php
      
           if(isset($_GET['users'])){

                $userpage = new UsersView();
                $userpage-> showUsers();
            }
            if(isset($_GET['advertisements'])){

                $adpage = new AdvertView();
                $adpage-> showAds();
            } 
            if(isset($_GET['home'])){

                $homepage = new HomeView();
                $homepage->showHome();
            }
            else if(!(isset($_GET['users'])) && !isset($_GET['advertisements']) && !isset($_GET['home']) ){

                $homepage = new HomeView();
                $homepage->showHome();
            }
           
        ?>

    <main>
    <footer>
</footer>
</html>