<?php

class sql_class {

    /*
      Links for learning:
      SQL Data Types:     https://www.w3schools.com/sql/sql_datatypes.asp
      SQL basics:         https://www.codecademy.com/articles/sql-commands
    */

    private $pdo;

    const dbFile = 'db.sqlite';

    function __construct() {
        // Create the connection to the database
        $this->pdo = new PDO('sqlite:'.self::dbFile);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // Create table, if not exists
        $this->pdo->exec('CREATE TABLE IF NOT EXISTS tabella (
                            id      INTEGER PRIMARY KEY AUTOINCREMENT,
                            ip1     TEXT,
                            ip2     TEXT,
                            data    TEXT NOT NULL,
                            name    TEXT NOT NULL DEFAULT "Anonimo",
                            gender  TEXT NOT NULL,
                            comment TEXT NOT NULL
                        );');
    }

    public function readAll() {
        // Returns all items contained into the database
        $stmt = $this->pdo->query('SELECT id, data, name, gender, comment FROM tabella ORDER BY id ASC');
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
	
    public function readItem($id = null) {
        if ($id != null) {
            // Return a single item from the database
            $stmt = $this->pdo->prepare('SELECT data, name, gender, comment FROM tabella WHERE id = :ID');
            $stmt->bindParam(':ID', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
		}
    }

    public function addItem($data, $ip1, $ip2, $name, $gender, $comment) {
        // Create a new item and save it into the database
        $datetime = date("Y-m-d H:i:s");
        $stmt = $this->pdo->prepare('INSERT INTO tabella (ip1, ip2, data, name, gender, comment) VALUES (:ip1, :ip2, :data, :name, :gender, :comment)');
        $stmt->bindParam(':ip1', $ip1);
        $stmt->bindParam(':ip2', $ip2);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':name', $name);
		$stmt->bindParam(':gender', $gender);
		$stmt->bindParam(':comment', $comment);
        $stmt->execute();
    }

    public function removeItem($id) {
        $stmt = $this->pdo->prepare('DELETE FROM tabella WHERE id = :ID');
        $stmt->bindParam(':ID', $id);
        $stmt->execute();
    }
	
    public function removeAll() {
        $stmt = $this->pdo->query('DELETE FROM tabella; VACUUM');
    }

}
