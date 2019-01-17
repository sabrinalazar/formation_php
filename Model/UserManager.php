<?php

/**
 * Description of UserManager
 *
 * @author sabrinalazar
 */
class UserManager {

    public function getUser($data) {
        $sql = 'SELECT * FROM user WHERE pseudo=? ';
        $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $pdoSt->execute([$data]);
        $user = $pdoSt->fetch();
        return $user;
    }

    public function getUserById($id) {
        $sql = 'SELECT * FROM user WHERE id=? ';
        $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $pdoSt->execute([$id]);
        $user = $pdoSt->fetch();
        return $user;
    }

    public function insert(User $user) {
        $sql = 'INSERT INTO user VALUES (null, ?, ?, ?)';
        $pdoSt = $this->pdo->prepare($sql);
        try {
            $pdoSt->execute([
                $user->getPseudo(),
                $user->getPwd(),
            ]);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

}
