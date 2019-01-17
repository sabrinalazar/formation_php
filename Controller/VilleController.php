<?php

class VilleController {

//afficher le détail d'une ville

    public function detail($id) {
        $vm = new VilleManager();
        $ville = $vm->getLaville($id);
        var_dump($ville);
        $this->render('detail.html.php', ['ville' => $ville, 'titre' => 'Détail de la ville']);


        //
        extract($data);

        //demarrer la mise en tampon
        ob_start();

        //inclure le bout de vue recupere
        include __DIR__ . './../views/' . vue;

        //le tampon sous forme de caractère
        $buffer = ob_get_clean();
        //nettoyer le tampon

        include __DIR__ . '/./../views/home.html.php';
    }

}
