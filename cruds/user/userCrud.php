<?php

include_once __DIR__ . '/../../SQL/DbConnection.php';

class UserCrud extends DbConnection
{



    public function createUser($name, $email, $password)
    {
        $sql = 'INSERT INTO users (name,email,password) VALUES (?,?,?);';
        $stmt = $this->getConn()->prepare($sql);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $stmt->execute([$name, $email, $hashedPassword]);
    }



    public function emailExists($email)
    {
        $sql = 'SELECT id FROM users WHERE email = ?';
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount() > 0;
    }

    public function getUserByEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email = ? ';
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->fetch();
    }


    public function getUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id = ? ';
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function readUsers()
    {
        $sql = "SELECT id, name, email, role, created_at FROM users";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function deleteUser($id)
    {
        $sql = 'DELETE FROM users WHERE id=?';
        $stmt = $this->getConn()->prepare($sql);
        return $stmt->execute([$id]);
    }


    public function updateUser($id, $name, $email)
    {

        $sql = 'UPDATE users 
            SET name = ?, email = ?
            WHERE id = ?';

        $stmt = $this->getConn()->prepare($sql);

        return $stmt->execute([$name, $email, $id]);
    }
}
