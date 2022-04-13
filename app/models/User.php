<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query('SELECT * FROM users');
//      $this->db->query('SELECT u.*, x.contacts FROM USERS u LEFT JOIN (SELECT c.user_id,GROUP_CONCAT(c.contact SEPARATOR ";" ) AS contacts FROM CONTACTS c GROUP BY c.user_id ) x ON x.user_id = u.id');

        return $this->db->resultSet();
    }

    public function getUser($id)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function getContacts()
    {
        $this->db->query('SELECT * FROM contacts');

        return $this->db->resultSet();
    }

    public function getUserContacts($id)
    {
        $this->db->query('SELECT * FROM users LEFT JOIN contacts ON contact.user_id = users.id WHERE users.id = :id');
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function calculateWinnings($data)
    {
        if ($data['result'] == 'win') {
            return $data['bet'] * $data['odds'] - $data['bet'];
        }

        return 0 - $data['bet'];
    }

    public function updateBalance($id, $newBalance)
    {
        $this->db->query('UPDATE users SET balance = :balance WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':balance', $newBalance);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
