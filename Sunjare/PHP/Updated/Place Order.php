<?php
include "connection.php";

?>


<!DOCTYPE html>
<html>

<head>
  <title>Place Order</title>
  <link rel="stylesheet" type="text/css" href="new_account_style.css">
</head>

<body>

  <header class="header1">
    Enter Book information Here
  </header>

  <section class="section1">
     <br>
    
    <div>
      <form class="my-form" action="" method="post">
        <div class="form-group">
          <label>Admin ID: </label>
          <input type="text" name="POadmin_id" required="">
          <label>Book ID: </label>
          <input type="number" name="PObook_id" required="">

          <label>Publisher ID: </label>
          <input type="number" name="POpublisher_id" required="">

          <label>Book Name: </label>
          <input type="text" name="PObook_name" required="">

          <br><br>
          <input class="button" type="submit" name="submit" value="Add Book">
        </div>
      </form>
    </div>
  </section>
  <?php

  if (isset($_POST['submit'])) {



    $arrival_date = strtotime("+1 Month ");
    $arrival_date_store = date("Y-m-d H:i:s", $arrival_date);

    $ordered_date = strtotime("today");
    $ordered_date_store = date("Y-m-d H:i:s", $ordered_date);


      mysqli_query($connection, "INSERT INTO `ordered_book_list_admin` VALUES('$_POST[POadmin_id]', '$_POST[PObook_id]','$_POST[POpublisher_id]' , '$_POST[PObook_name]' , '$arrival_date_store' , '$ordered_date_store');");
  ?>
      <script type="text/javascript">
        alert("Book Added to Ordered List Successfully");
      </script>
    <?php

  }
  ?>


</body>

</html>