
      
<?php
include_once '../includes/header.php';
include_once '../cruds/product/productCrud.php';
$productCrud=new productCrud();
$posts=$productCrud->readAllProducts();
?>
<head>
  <link rel="stylesheet" href="../css/shop.css">
  <script src="../js/shop.js" defer></script>
</head>

    <main>

    
        <section class="hero">
        <div class="heroImg" id="first">
            <img src= "https://i.pinimg.com/736x/0e/19/80/0e1980950828a0f07b7d7e58178a4e9c.jpg" alt="">
           
        </div>

        


         <div class="heroImg" id="second">
            <img src="https://i.pinimg.com/736x/2b/4f/e3/2b4fe39ffa853d035518e539eb1a9b4d.jpg" alt="">
        </div>


         <div class="heroImg" id="third">
            <img src="https://i.pinimg.com/1200x/02/0e/35/020e35122238d71f6bfa800ef62e2946.jpg" alt="">
        </div>
        
         <h3>SHOP SECTION</h3>
    </section>


      



 
   <section class="collections">
            <div class="section-header">
                <h2 class="section-title">Featured Collections</h2>
                <p class="section-subtitle">Curated by our in-house design team</p>
            </div>
            <div class="collection-tags">
                <span class="tag active">All Products</span>
                <span class="tag">Living Room</span>
                <span class="tag">Bedroom</span>
                <span class="tag">Kitchen</span>
                <span class="tag">Office</span>
                <span class="tag">Decor</span>
                <span class="tag">Lighting</span>
                <span class="tag">On Sale</span>
            </div>
        </section>

        <!-- Filter & Search -->
        <section class="filter-section">
            <div class="filter-container">
                <div class="filter-group">
                    <select class="filter-select">
                        <option value="">Category</option>
                        <option value="furniture">Furniture</option>
                        <option value="lighting">Lighting</option>
                        <option value="decor">Decor</option>
                        <option value="textiles">Textiles</option>
                    </select>
                    <select class="filter-select">
                        <option value="">Price Range</option>
                        <option value="low">Under $100</option>
                        <option value="medium">$100 - $500</option>
                        <option value="high">$500+</option>
                    </select>
                    <select class="filter-select">
                        <option value="">Sort By</option>
                        <option value="newest">Newest</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="popular">Most Popular</option>
                    </select>
                </div>
                <div class="search-box">
                  
                    <input type="text" class="search-input" placeholder="Search products...">
                    <button class="search-btn">Search</button>
                </div>
              
            </div>
            <div class="results-info">
    <span class="result-count"></span>  
</div>
         
        </section>


    
       
  <div id="noMatchMsg">
            <h2>NO PRODUCTS FOUND </h2>
          </div>
        <section class="Posts">
         
<?php foreach($posts as $p): ?>

              <div class="Card">
                <div class="CardImg">
                <img src="../cruds/product/uploads/<?= $p['image_url'] ?>" alt="Kitchen">
                 <p class="favIcon">♡</p>
               
                 </div>
                <div class="text">
                <p class="type"><?= $p['title'] ?></p>
                <p><?= $p['price'] ?></p>
                 
                </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
              
            </div>
<?php endforeach;?>
          

               <div class="Card">
                <div class="CardImg">
                <img src="../images/K1.jpg" alt="Kitchen">
                 <p class="favIcon">♡</p>
                 <p class="icon">Client Favourite</p>
                 </div>
                <div class="text">
                <p class="type">Kitchen</p>
                <p>1200$</p>
                 
                </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
              
            </div>
  


              <div class="Card">
                <div class="CardImg">
                <img src="../images/B1.jpg" alt="Bathroom">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Bathroom</p>
              
                    <p>750$</p>
               </div>
                  <div class="txt2">
                  <p class="stock">◯ In Stock </p>
                  <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
            </div>

                 <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/90/ed/10/90ed105dc39f85bca0a065ec897d8eee.jpg" alt="office">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Office Table</p>
                    <p>170$</p>
                   </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
            </div>



              <div class="Card">
                <div class="CardImg">
                <img src="../images/BR1.jpg" alt="Bedroom">
                 <p class="favIcon">♡</p>
                  
                </div>
               <div class="text">
                 <p class="type">Bed</p>
              
                    <p>380$</p>
               </div>
                <div class="txt2">
                       <p class="stock">◯ In Stock </p>
        <p class="rating">⭐⭐⭐⭐ (557 reviews)</p>
    
                  </div>
            </div>
              
             


              <div class="Card">
                <div class="CardImg">
                <img src="../images/D.jpg" alt="ChristmasDecoration">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">ChristmasDecoration</p>
              
                    <p>45$</p>
               </div>
                  <div class="txt2">
                  <p class="stock">◯ In Stock </p>
                  <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
            </div>

                   <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/05/10/76/051076f91584b649e5982b2cf7db48ed.jpg" alt="Bathroom">
                 <p class="favIcon">♡</p>
                 <p class="sale">On Sale</p>
                </div>
               <div class="text">
                 <p class="type">Pillows</p>
              
                    <p>15$</p>
               </div>
                  <div class="txt2">
                  <p class="stock">◯ In Stock </p>
                  <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
            </div>


              <div class="Card">
                <div class="CardImg">
                <img src="../images/BR2.jpg" alt="Bedroom">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Bedroom</p>
                    <p>800</p>
                   </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
            </div>


                  <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/6a/6f/1e/6a6f1ee83dfe7bb65c98015fc5b193e6.jpg" alt="Kitchen">
                 <p class="favIcon">♡</p>
                 <p class="icon">Client Favourite</p>
                 </div>
                <div class="text">
                <p class="type">Kitchen</p>
                <p>1200$</p>
                 
                </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
              
            </div>


              <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/2f/22/7a/2f227a491e98778a2dc08c6d54e32712.jpg" alt="Kitchen">
                 <p class="favIcon">♡</p>
                 <p class="icon">Client Favourite</p>
                 </div>
                <div class="text">
                <p class="type">Candels</p>
                <p>13$</p>
                 
                </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
              
            </div>
  



  
              <div class="Card">
                <div class="CardImg">
                <img src="../images/D2.jpg" alt="Door decoration">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Door decoration</p>
              
                    <p>42$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
            </div>


              <div class="Card">
                <div class="CardImg">
                <img src="../images/il_1588xN.4920525378_gozw.webp" alt="Wall Art">
                 <p class="favIcon">♡</p>
                 <p class="left">only 3 left</p>
                </div>
               <div class="text">
                 <p class="type">Wall Art</p>
                    <p>26$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

              <div class="Card">
                <div class="CardImg">
                <img src="../images/il_1588xN.7434265437_g88w.avif" alt="Wall Art">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Wall Art</p>
                    <p>45$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

                 
            
             
               <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/6a/2f/4d/6a2f4d20c0dadb7cbad4ba69cb8aca7d.jpg" alt="Office">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Office Desk</p>
                   <p>250$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

   
              <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/33/5c/f4/335cf463b257f49cd25e0c0534fdf6b8.jpg" alt="Kitchen">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Kitchen</p>
                  <p>1100$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

              <div class="Card">
                <div class="CardImg">
                <img src="../images/V1.jpg" alt="VaseSet">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">VaseSet</p>
                 <p>140$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

                <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/4f/99/61/4f9961374f9ae5024a679302d79d7ecc.jpg" alt="Kitchen">
                 <p class="favIcon">♡</p>
                 </div>
                <div class="text">
                <p class="type">Wall Art</p>
                <p>10$</p>
                 
                </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                  </div>
              
            </div>

              <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/736x/0e/19/80/0e1980950828a0f07b7d7e58178a4e9c.jpg" alt="Lamp">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type">Lamp</p>
                   <p>25$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>


           


              <div class="Card">
                <div class="CardImg">
                <img src="../images/office.jpg" alt="Office desk">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                <p class="type">Office Desk</p>
                <p>250$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

              <div class="Card">
                <div class="CardImg">
                <img src="../images/P2.avif" alt="Wall Art">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                <p class="type">Wall Art</p>
                <p>120$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>


              <div class="Card">
                <div class="CardImg">
                <img src="../images/plates1.jpg" alt="Table Decor">
                 <p class="favIcon">♡</p>
                 <p class="left">only 6 left</p>
                </div>
               <div class="text">
                <p class="type">Table Decor</p>
                <p>25$</p>
               </div>
                <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

             <div class="Card">
                <div class="CardImg">
                <img src="../images/d39fb719d66d9764358da7e423147197.jpg" alt="Vase">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                <p class="type">Vase</p>
                <p>15$</p>
               </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>


                

             <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/fc/13/9d/fc139d0fe02e4138cb7f07a921b975ab.jpg" alt="Kitchen Table">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                <p class="type">Kitchen Table</p>
                <p>200$</p>
               </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>

              <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/5b/56/98/5b56984b0559da185f2197e2a8bfdb8e.jpg" alt="Kitchen Table">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                <p class="type">Wall Art</p>
                <p>200$</p>
               </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>


              <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/e0/a8/36/e0a83638afb8bf9e5b2a7eeadc63cc18.jpg" alt="lamp">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type"> Lamp</p>
                <p>67$</p>
               </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>





             <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/76/47/66/764766b84b78f36ec3ae0cf037708c81.jpg" alt=" Kitchen Counter">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                 <p class="type"> Kitchen Counter</p>
                <p>270$</p>
               </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>
            </div>


              <div class="Card">
                <div class="CardImg">
                <img src="https://i.pinimg.com/1200x/6a/c6/a6/6ac6a60b893dc7c1d1a51fad70b0f765.jpg" alt="Christmas Decor">
                 <p class="favIcon">♡</p>
                </div>
               <div class="text">
                <p class="type">Christmas Decor</p>
                <p>47$</p>
                 </div>
                 <div class="txt2">
                 <p class="stock">◯ In Stock </p>
                 <p class="rating">⭐⭐⭐⭐ (57 reviews)</p>
                 </div>

            </div>
        </section>
    </main>

  




    </main>

      
<?php
include_once '../includes/footer.php';
?>
