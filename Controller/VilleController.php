<?php

class VilleController {

//afficher le détail d'une ville

    public function detail($id)
    {
        $vm = new VilleManager();
        $ville = $vm->getLaville($id);
        var_dump($ville);
        $this->render('detail.html.php', ['ville' => $ville, 'titre' => 'Détail de la ville']);


    }

        private function render($vue,$data=[]){
            extract($data);

            ob_start();
            include __DIR__.'/../views/'.$vue;
            $buffer = ob_get_clean();
            include __DIR__.'/../views/home.html.php';


        }

}
