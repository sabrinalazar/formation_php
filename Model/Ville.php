<?php

class Ville {

    private $id, $nom, $description, $id_pays;

    private function hydratation($data) {
        foreach ($data as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter))
                $this->$setter($value);
        }
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void {
        $this->nom = $nom;
    }

    function getDescription() {
        return $this->description;
    }

    function setDescription($description) {
        $this->description = $description;
    }

}
