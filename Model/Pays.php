<?php
/**
 * Created by PhpStorm.
 * User: Hala
 * Date: 17/01/2019
 * Time: 09:35
 */

class Pays
{
    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $nom;

    private $description;
    /**
     * @var array
     */
    private $erreurs=[];

    public function __construct($data=[]){
        if($data)
            $this->hydraration($data);
    }

    private function hydraration($data){
        foreach ($data as $key => $value){
            $setter = 'set' . ucfirst($key);
            if (method_exists($this,$setter))
                $this->$setter($value);
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pays
     */
    public function setId(int $id): Pays
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Pays
     */
    public function setNom(string $nom): Pays
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Pays
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return array
     */
    public function getErreurs(): array
    {
        return $this->erreurs;
    }

    /**
     * @param array $erreurs
     * @return Pays
     */
    public function setErreurs(array $erreurs): Pays
    {
        $this->erreurs = $erreurs;
        return $this;
    }




}