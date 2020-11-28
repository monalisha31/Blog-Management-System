<?php
$query = "SELECT * FROM book ORDER BY B_id DESC";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)){
  $book_id = $row['B_id'];
    $book_title = $row['B_name'];
    $book_author = $row['B_author'];
    $book_category = $row['B_genre'];
    $book_image = $row['B_image'];


  ?>
                         <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single_b.php?book=<?php echo $book_id; ?>" class="item-entry__thumb-link">
                                <img src="<?php echo $book_image;?>" 
                                     alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <a href="book.php"><?php echo $book_category;?></a> 
                            </div>

    
                            <h1 class="item-entry__title"><a href="single_b.php?book=<?php echo $book_id; ?>"><?php echo $book_title;?></a></h1>

                                
                            <div class="item-entry__date">
                                <a href="single_b.php?book=<?php echo $book_id; ?>"><?php echo $book_author;?></a><br>
                                
                            </div>
                        </div>
                    </div> 

                </article> 

<?php }
 ?>