<?php

class VilleManager {

    public function __construct() {
        try {
            $pdo = new PDO('mysql:dbname=blogtrotteuze ;localhost;', 'root', 'root',
                    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
            );
        } catch (PDOException $e) {

            exit('Erreur connexion BDD');
        }
    }

    //fonction recuperation des données de la bdd

    public function getVilles() {

        $sql = 'SELECT * FROM ville';
        $pdoSt = $this->pdo->query($sql);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS, Ville::class);
        return $ville = $pdoSt->fetchAll();
    }

    public function getLaVille($id) {

        $sql = 'SELECT nom , description FROM ville WHERE id=?';
        $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS, Ville::class);
        $pdoSt->execute([$id]);
        return $ville = $pdoSt->fetch();
    }

}
