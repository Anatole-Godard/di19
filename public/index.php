<?php
include "./config.php";
function chargerClasse($classe){
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__."{$ds}.."; //Remonte d'un cran par rapport à index.php
    $classeName = str_replace('\\', $ds,$classe);

    $file = "{$dir}{$ds}{$classeName}.php";
    if(is_readable($file)){
        require_once $file;
    }
}
spl_autoload_register('chargerClasse');
//http://www.git.local/?controller=Article&action=Add
$controller = $_GET['controller'];
$action = $_GET['action'];
//$param = $_GET['param'];

$className = 'src\Controller\\'.$controller.'Controller';
$classController = new $className;
echo $classController->$action();

var_dump($classController);
