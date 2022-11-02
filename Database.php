<?php

namespace DevNonwaKone;

use PDO;
use PDOStatement;

class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=projet';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    public function __construct()
    {
    }

    public static function getDB()
    {
        return new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
    }

    public function add($val)
    {
        $req = self::getDB()->prepare('INSERT INTO employer(id,nom,prenom,contact,sexe,poste,salaire) VALUE (null,?,?,?,?,?,?)');
        return $req->execute($val);
    }

    public function showEmployer()
    {
        $req = self::getDB()->query('SELECT * FROM employer ORDER BY id DESC');
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public function getEmployer($id)
    {
        $req = self::getDB()->prepare('SELECT * FROM employer WHERE id = ?');
        $req->execute(array($id));
        return $req->fetch(\PDO::FETCH_OBJ);
    }

    public function updateInfoEmployer($stmt, $val)
    {
        $req = self::getDB()->prepare($stmt);
        return $req->execute($val);
    }

    public function delete($id)
    {
        $req = self::getDB()->prepare('DELETE FROM employer WHERE id = ?');
        $req->execute(array($id));
    }
}
