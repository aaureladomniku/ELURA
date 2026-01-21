<?php


 include_once '../SQL/DbConnection.php';

class productCrud extends DbConnection{



    public function createProduct($title,$description,$price,$image_url,$rating,$reviews_count){
        $sql='INSERT INTO products (title,description,price,image_url,rating,reviews_count)VALUES (?,?,?,?,?,?);';
        $stmt=$this->getConn()->prepare($sql);
       return $stmt->execute([$title,$description,$price,$image_url,$rating,$reviews_count]);
    }

    public function readAllProducts(){
         $sql='SELECT * FROM products';
         $stmt=$this->getConn()->prepare($sql);
          $stmt->execute();
          return $stmt->fetchAll();
    }

    public function deleteProduct($id){
        $sql='DELETE FROM  products WHERE id=?';
        $stmt=$this->getConn()->prepare($sql);
        return $stmt->execute([$id]);
    }

  public function updateProduct($id, $title, $description, $price, $rating, $reviews_count) {
    $sql = 'UPDATE products
            SET title = ?, 
                description = ?, 
                price = ?,
                rating = ?, 
                reviews_count = ?
            WHERE id = ?';
    $stmt = $this->getConn()->prepare($sql);
    return $stmt->execute([
        $title,
        $description,
        $price,
        $rating,
        $reviews_count,
        $id
    ]);

    
}
}

