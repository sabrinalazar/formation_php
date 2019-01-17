<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/01/2019
 * Time: 11:03
 */

function autoLoad($classe){
    $file = 'Model/'. $classe . '.php';
    $file2 = 'controller/' . $classe . '.php';

    if(file_exists($file))
        include $file;


    elseif(file_exists($file2))
        include $file2;


    var_dump($file);
}
spl_autoload_register('autoLoad');


$controller = new PaysController();
$controller2 = new PaysController();
if(isset($_GET['id'])){
    $controller->detail($_GET['id']);
    $controller2->grosDetail($_GET['id']);
}else {
    $controller->index();
}
