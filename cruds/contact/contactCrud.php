<?php
include_once __DIR__ . '/../../SQL/DbConnection.php';

class ContactCrud extends DbConnection
{
    public function createMessage($user_id, $name, $phone, $email, $message)
    {
        $sql = "INSERT INTO messages (user_id, name, phone, email, message) VALUES (?,?,?,?,?)";
        $stmt = $this->getConn()->prepare($sql);
        return $stmt->execute([$user_id, $name, $phone, $email, $message]);
    }

    public function readMessages()
    {
        $sql = "SELECT 
                    messages.id, 
                    messages.name AS visitor_name, 
                    messages.phone, 
                    messages.email AS visitor_email, 
                    messages.message, 
                    messages.created_at,
                    users.name AS user_name,
                    users.email AS user_email
                FROM messages
                LEFT JOIN users ON messages.user_id = users.id
                ORDER BY messages.created_at DESC";

        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMessageById($id)
    {
        $sql = "SELECT * FROM messages WHERE id = ?";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateMessage($id, $name, $phone, $email, $message)
    {
        $sql = "UPDATE messages SET name = ?, phone = ?, email = ?, message = ? WHERE id = ?";
        $stmt = $this->getConn()->prepare($sql);
        return $stmt->execute([$name, $phone, $email, $message, $id]);
    }

    public function deleteMessage($id)
    {
        $sql = "DELETE FROM messages WHERE id = ?";
        $stmt = $this->getConn()->prepare($sql);
        return $stmt->execute([$id]);
    }
}
