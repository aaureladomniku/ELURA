<?php


 include_once '../SQL/DbConnection.php';

class productCrud extends DbConnection{



    public function createProduct($title,$description,$price,$image_url,$rating,$reviews_count){
        $sql='INSERT INTO posts (title,description,price,image_url,rating,reviews_count)VALUES (?,?,?,?,?,?);';
        $stmt=$this->getConn()->prepare($sql);
       return $stmt->execute([$title,$description,$price,$image_url,$rating,$reviews_count]);
    }

    public function readAllProducts(){
         $sql='SELECT * FROM posts';
         $stmt=$this->getConn()->prepare($sql);
          $stmt->execute();
          return $stmt->fetchAll();
    }

    public function deleteProduct($id){
        $sql='DELETE FROM  posts WHERE id=?';
        $stmt=$this->getConn()->prepare($sql);
        return $stmt->execute([$id]);
    }

  public function updateProduct($id, $title, $description, $price, $rating, $reviews_count) {
    $sql = 'UPDATE posts
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

