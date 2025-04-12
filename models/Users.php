<?php
require_once __DIR__ . '/../core/Conexion.php';
require_once __DIR__ . '/../core/Model.php';
class Users extends Model

{
    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$name,$lastname,$email) {
        try {
            $stmt= $this->db->prepare("UPDATE users SET name = :name, lastname = :lastname, email = :email WHERE id = :id");
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':lastname',$lastname);
            $stmt->bindParam(':email',$email);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }

    }

    public function create($name, $lastname, $email,$password)
    {
        try{
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->db->prepare("INSERT INTO users (name,lastname,email,password) VALUES(:name,:lastname,:email,:password)");
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':lastname',$lastname);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$hashedPassword);
            return $stmt->execute();
        }catch (PDOException $e){
            return false;
        }
    }
    public function login($email, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email',$email);
            $stmt->execute();
            $user= $stmt->fetch(PDO::FETCH_ASSOC);

            if($user && password_verify($password, $user['password'])){
               return $user;
           }
           return false;
        }catch (PDOException $e){
            return false;
        }

    }

    public function delete($id )
    {
        try{
            $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
            $stmt->bindParam(':id',$id);
            return $stmt->execute();
        }catch (PDOException $e){
            echo ("error al eliminar" . $e->getMessage());
            return false;
        }
    }
}