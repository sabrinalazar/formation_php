<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/01/2019
 * Time: 10:36
 */

class PaysController
{
    public function index (){
        $pm = new PaysManager();
        $pays = $pm->getPays();
//        var_dump($pays);

        $this->render('home.html.php',['pays'=>$pays,'titre'=>'Les Pays !']);

    }

    public function grosDetail($id){
        $pm = new PaysManager();
        $vm= new VilleManeger();

        $pays = $pm->getLePays($id);
        $villes = $vm->getVilles($id);

        var_dump($pays);


        $this->render('detailPays.html.php',['pays'=>$pays,'villes'=>$villes,'titre'=>'Hello :)']);

    }

    private function render($vue,$data=[]){
        extract($data);

        ob_start();
        include __DIR__.'/../views/'.$vue;
        $buffer = ob_get_clean();
        include __DIR__.'/../views/home.html.php';


    }
}