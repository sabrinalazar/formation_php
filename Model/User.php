<?php

class User {

    private $id, $pseudo, $pwd = [];

    public function getId() {
        return $this->id;
    }

    public function getPseudo() {
        return $this->login;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setPseudo(string $login): self {
        if (strlen($login) >= 2)
            $this->login = $login;
        else
            $this->erreurs[] = 'login :(';
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
