<?php

class User {

    private $id, $pseudo, $pwd = [];

    public function getId() {
        return $this->id;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setPseudo(string $pseudo): self {
        if (strlen($pseudo) >= 2)
            $this->pseudo = $pseudo;
        else
            $this->erreurs[] = 'pseudo :(';
        return $this;
    }

    public function setPwd(string $pwd): self {
        if (strlen($pwd) >= 4)
            $this->pwd = $pwd;
        else
            $this->erreurs[] = 'pwd :(';
        return $this;
    }

}
