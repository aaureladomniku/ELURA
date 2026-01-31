<?php

include_once __DIR__ . '/../../SQL/DbConnection.php';


class productCrud extends DbConnection{



    public function createProduct($title,$description,$price,$image_url,$rating,$reviews_count){
        $sql='INSERT INTO posts (title,description,price,image_url,rating,reviews_count)VALUES (?,?,?,?,?,?);';
        $stmt=$this->getConn()->prepare($sql);
       return $stmt->execute([$title,$description,$price,$image_url,$rating,$reviews_count]);
    }

    public function getProductById($id) {
    $sql = 'SELECT * FROM posts WHERE id = ?';
    $stmt = $this->getConn()->prepare($sql);
    $stmt->execute([$id]);         
    $post = $stmt->fetch();       
    return $post;                  
}

    public function readAllProducts(){
         $sql = 'SELECT p.*, u.name AS updated_by_name
            FROM posts p
            LEFT JOIN users u ON p.updated_by = u.id';
         $stmt=$this->getConn()->prepare($sql);
          $stmt->execute();
          return $stmt->fetchAll();
    }

    public function deleteProduct($id){
        $sql='DELETE FROM  posts WHERE id=?';
        $stmt=$this->getConn()->prepare($sql);
        return $stmt->execute([$id]);
    }

  public function updateProduct($id, $title, $description, $price, $updatedBy) {
    $sql = 'UPDATE posts
            SET title = ?, 
                description = ?, 
                price = ?,
                updated_by = ?
            WHERE id = ?';
    $stmt = $this->getConn()->prepare($sql);
    return $stmt->execute([
        $title,
        $description,
        $price,
        $updatedBy,
        $id
    ]);

    
}
}

