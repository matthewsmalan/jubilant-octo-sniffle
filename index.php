<?php

  error_reporting(0);
  require "nav.php";
  require "connect.php";
  
  session_start();

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
                <a href='books.php?id=$token_id1' id='link_1'>
                    <img src='$book_image' class='img-responsive' alt='' id='book_cover_one' token_id='$token_id1'>
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
         var token = machine.token;
      
         $("#link_1").attr("href","books.php?id="+token);
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
      
      $book_query2 = $db->query("SELECT * FROM books ORDER BY token DESC LIMIT 1 OFFSET 1");
      $fetch_books2 = $book_query2->fetch_object();
      $book_image2 = $fetch_books2->image;
      $book_date2 = $fetch_books2->end_date;
      $token_id2 = $fetch_books2->token_id;
        
        echo "<div class='col-lg-3 col-sm-6 portfolio-item' id='book_column'>
                <a href='books.php?id=$token_id2' id='link_2'>
                    <img src='$book_image2' class='img-responsive' alt='' id='book_cover_two' token_id='$token_id2'>
                <div class='description_two'>
                  
                </div> </a>
            </div>";
            
            ?>
            
                                           <script type="text/javascript">
  var date = '<?php echo $book_date2; ?>';
  $(".description_two").countdown(date, function(event) {
    
    if($(this).text() == "00:00:00") {
      var token_id2 = "<?php echo $token_id2; ?>";
       $.ajax({url: 'insert_book.php?token_id='+token_id2+'&token=2', success: function(result){
         $(".description_two").text(result);
         machine = JSON.parse(result);
         var date = machine.time;
         var token = machine.token;
      
         $("#link_2").attr("href","books.php?id="+token);
      
         $("#book_cover_two").attr("src",machine.image);

        $(".description_two").countdown(date, function(event) {
          $(".description_two").text(
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

<!-- End of Second Book -->

<!-- Third Book -->
  <?php
      
      $book_query3 = $db->query("SELECT * FROM books ORDER BY token DESC LIMIT 1 OFFSET 2");
      $fetch_books3 = $book_query3->fetch_object();
      $book_image3 = $fetch_books3->image;
      $book_date3 = $fetch_books3->end_date;
      $token_id3 = $fetch_books3->token_id;
        
        echo "<div class='col-lg-3 col-sm-6 portfolio-item' id='book_column'>
                <a href='books.php?id=$token_id3' id='link_3'>
                    <img src='$book_image3' class='img-responsive' alt='' id='book_cover_three' token_id='$token_id3'>
                <div class='description_three'>
                  
                </div> </a>
            </div>";
            
            ?>
            
                                           <script type="text/javascript">
  var date = '<?php echo $book_date3; ?>';
  $(".description_three").countdown(date, function(event) {
    
    if($(this).text() == "00:00:00") {
      var token_id3 = "<?php echo $token_id3; ?>";
       $.ajax({url: 'insert_book.php?token_id='+token_id3+'&token=1', success: function(result){
         $(".description_three").text(result);
         machine = JSON.parse(result);
         var date = machine.time;
         var token = machine.token;
      
         $("#link_3").attr("href","books.php?id="+token);
      
         $("#book_cover_three").attr("src",machine.image);

        $(".description_three").countdown(date, function(event) {
          $(".description_three").text(
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
<!-- End of Third Book -->

<!-- Fourth Book -->
  <div class='col-lg-3 col-sm-6 portfolio-item' id='book_column'>
                <a href='#'>
                    <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Mormon-book.jpg/417px-Mormon-book.jpg' class='img-responsive' alt='' id='book_cover_four' token_id='Hey'>
                <div class='description_four'>
                  Testing...
                </div> </a>
            </div>
<!-- End of Fourth Book -->

        </div>
    <!-- End of Books -->
