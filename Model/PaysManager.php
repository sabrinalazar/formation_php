<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/01/2019
 * Time: 10:19
 */

class PaysManager
{
    /**
     * @var PDO
     */
    private $pdo;

    private $dsn = 'mysql:dbname=blogtrotteuze;host=localhost;charset=utf8',
        $user = 'root',
        $password = '';

    /**
     * PaysManager constructor.
     * @param PDO $pdo
     */
    public function __construct()
    {
        try {
            $pdo = new PDO($this->dsn,$this->user,$this->password,
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            //var_dump($pdo);
        }
        catch (PDOException $exc) {
            exit ('Erreur connexion BDD');
        }
        $this->pdo = $pdo;
    }

    public function getPays(){
        $sql='SELECT * FROM pays ';
        $pdoSt= $this->pdo->query($sql);
        // ajouter ca pour la 2 eme methode
        $pdoSt->setFetchMode(PDO::FETCH_CLASS, Pays::class);
        return $pays = $pdoSt->fetchAll();
    }

    public function getLePays($id) {
        $sql = 'SELECT nom  FROM pays WHERE id = ? ';
        $pdoSt = $this->pdo ->prepare($sql);
        $pdoSt->execute([$id]);

        $pdoSt->setFetchMode(PDO::FETCH_CLASS,Pays::class);
        return $name = $pdoSt->fetch();

    }

}
