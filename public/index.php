<?php 

require '../app/Autoload.php';
// Fait fonctionner l'autoloader avec la function register()
App\Autoloader::register();


if(isset($_GET['p'])){

    $p = $_GET['p'];

} else {

    $p = 'home';
}

// initialisation des objets 
$db = new App\Database('blog');

var_dump($db);
// Function native qui dit a php tout ce qui sera afficher tu le stocke dans une variable 
ob_start();

if($p === 'home'){

    require '../pages/home.php';
} else if ($p === 'single'){

    require '../pages/single.php';
}


$content = ob_get_clean();

require '../pages/templates/default.php';

//video graphiart tp conetcion  bdd 18.51