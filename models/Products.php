<?php
require_once __DIR__ . '/../core/Conexion.php';
require_once __DIR__ . '/../core/Model.php';

class Products extends Model

{



    public function getAll()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM products");
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        }catch (\PDOException $e){
            echo ("error al recuperar datos" . $e->getMessage());
        }
    }

    public function findById($id)
    {
     $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id");
     $stmt->bindParam(":id", $id);
     $stmt->execute();
     return $stmt->fetch(\PDO::FETCH_ASSOC);
    }


    public function update($id,$name,$price,$amount){
        try{
        $stmt = $this->db->prepare("UPDATE products SET name = :name,amount = :amount, price = :price WHERE id = :id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":amount", $amount);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
        }catch (PDOException $e){
            echo ("error al actualizar datos" . $e->getMessage());
            return false;
        }
    }

    public function delete($id){
        try{
            $stmt = $this->db->prepare("DELETE FROM products WHERE id = :id");
            $stmt->bindParam(":id", $id);
          return  $stmt->execute();
        }catch (PDOException $e){
            echo ("error al eliminar un producto " . $e->getMessage());
            return false;
        }
    }


    public function create($name,$amount,$price)
    {  try{
        $stmt = $this->db->prepare("INSERT INTO products(name,amount,price) VALUES(:name,:amount,:price)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":amount", $amount);
        $stmt->bindParam(":price", $price);
        return $stmt->execute();
      } catch (PDOException $e){
        echo ("error al crear un producto " . $e->getMessage());
        return false;
    }
    }


}