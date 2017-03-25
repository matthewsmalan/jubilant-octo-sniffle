<?php

  error_reporting(0);
  require "nav.php";
  require "connect.php";

?>

<!-- Books -->
    <h2 id='books_text'> We Giveaway Free Books </h2>
    <div class="row" id='books_div'>
      
      <!-- First Book -->
      
      <?php
      
      $book_query = $db->query("SELECT * FROM books ORDER BY token DESC LIMIT 1");
      $fetch_books = $book_query->fetch_object();
      $book_image = $fetch_books->image;
      $book_date1 = $fetch_books->end_date;
      $token_id1 = $fetch_books->token_id;
        
        echo "<div class='col-lg-3 col-sm-6 portfolio-item' id='book_column'>
                <a href='#'>
                    <img class='img-responsive' src='$book_image' alt='' id='book_cover_one' token_id='$token_id1'>
                <div class='description_one'>
                  
                </div> </a>
            </div>";
            
            session_start();
            
            ?>
            
                                            <script type="text/javascript">
  var date = '<?php echo $book_date1; ?>';
  $(".description_one").countdown(date, function(event) {
    
    if($(this).text() == "00:00:00") {
      var token_id1 = "<?php echo $token_id1; ?>";
       $.ajax({url: 'insert_book.php?token_id='+token_id1+'&token=3', success: function(result){
         $(".description_one").text(result);
         machine = JSON.parse(result);
         var date = machine.time;
      
         $("#book_cover_one").attr("src",machine.image);

        $(".description_one").countdown(date, function(event) {
          $(".description_one").text(
      event.strftime('%H:%M:%S')
    );
        });
      }});
    } else {
      $(this).text(
      event.strftime('%H:%M:%S')
    );
    }
    
  });
</script>

<!-- End of First Book -->

<!-- Second Book -->

  <?php
      
      $book_query = $db->query("SELECT * FROM books ORDER BY token DESC LIMIT 1 OFFSET 1");
      $fetch_books = $book_query->fetch_object();
      $book_image = $fetch_books->image;
      $book_date2 = $fetch_books->end_date;
      $token_id2 = $fetch_books->token_id;
        
        echo "<div class='col-lg-3 col-sm-6 portfolio-item' id='book_column'>
                <a href='#'>
                    <img class='img-responsive' src='$book_image' alt='' id='book_cover_two' token_id='$token_id2'>
                <div class='description_two'>
                  
                </div> </a>
            </div>";
            
            ?>
            
                                            <script type="text/javascript">
  var date = '<?php echo $book_date2; ?>';
  $(".description_two").countdown(date, function(event) {
    $(this).text(
      event.strftime('%H:%M:%S')
    );
  
  });
</script>

<!-- End of Second Book -->

<!-- Third Book -->
  <?php
      
      $book_query = $db->query("SELECT * FROM books ORDER BY token DESC LIMIT 1 OFFSET 2");
      $fetch_books = $book_query->fetch_object();
      $book_image = $fetch_books->image;
      $book_date3 = $fetch_books->end_date;
      $token_id3 = $fetch_books->token_id;
        
        echo "<div class='col-lg-3 col-sm-6 portfolio-item' id='book_column'>
                <a href='#'>
                    <img class='img-responsive' src='$book_image' alt='' id='book_cover_three' token_id='$token_id3'>
                <div class='description_three'>
                  
                </div> </a>
            </div>";
            
            ?>
            
                                            <script type="text/javascript">
  var date = '<?php echo $book_date3; ?>';
  $(".description_three").countdown(date, function(event) {
    $(this).text(
      event.strftime('%H:%M:%S')
    );
  });
</script>
<!-- End of Third Book -->
      
        </div>
    <!-- End of Books -->