<?php
class products{

    private $title;
    private $description;
     private $price;
    private $image_url;
    private $rating;
    private $reviews_count;

    public function __construct($title,$description,$price,$image_url,$rating,$reviews_count){
   $this->title=$title;
   $this->description=$description;
   $this->price=$price;
   $this->image_url=$image_url;
   $this->rating=$rating;
   $this->reviews_count=$reviews_count;
    }


   
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

 
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

  
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    
    public function getImageUrl() {
        return $this->image_url;
    }

    public function setImageUrl($image_url) {
        $this->image_url = $image_url;
    }

    
    public function getRating() {
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

  
    public function getReviewsCount() {
        return $this->reviews_count;
    }

    public function setReviewsCount($reviews_count) {
        $this->reviews_count = $reviews_count;
    }

}


