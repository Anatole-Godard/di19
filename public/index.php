<?php
require '../vendor/autoload.php';

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
$controller = (isset($_GET['controller'])? $_GET['controller']: 'Article');
$action = (isset($_GET['action'])? $_GET['action'] : 'Index');
$param = (isset($_GET['param'])? $_GET['param'] : '');

$className = 'src\Controller\\'.$controller.'Controller';
if(class_exists($className)){
    $classController = new $className;
    if(method_exists($className,$action)){
        echo $classController->$action();
    }else{
        echo 'L\'action '.$action.' n\'existe pas';
    }
}else{
    echo 'Pas de controller pour cette page';
}


