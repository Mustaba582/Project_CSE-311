<?php
include "connection.php";
//Taken
session_start();
if (isset($_SESSION['login'])) {
   if ($_SESSION['login'] != true) {
      header("Location: ./index.php");
   }
} else {
   header("Location: ./index.php");
}
if (isset($_POST['logout'])) {
   unset($_SESSION['login'], $_SESSION['name'], $_SESSION['user_id']);
   header("Location: ./index.php");
}

?>


<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" type="text/css" href="member_style.css">
   <title>Member Panel</title>
</head>

<body>


   <div class="user_info_box">

      <div class="top">

         <p>Name: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ""; ?> <br><br> User ID: <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ""; ?> <br><br> Membership Validity: <?php echo isset($_SESSION['mem_exp']) ? $_SESSION['mem_exp'] : ""; ?> <br><br></p>

      </div>

      <a href="Login.php">
         <button class="button"><u>Logout</u></button>
      </a>
   </div>

   <div class="borrowed_box">

      <div class="top">
         <h1 class="hi1">Borrowed Books</h1>
      </div>

      <div>
         <ol class="borrowed_list">
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
         </ol>
         <a href="all_books.php">
            <button class="SA">View All books</button>
         </a>
      </div>

   </div>

   <div class="edit_borrowed">

      <div>

         <form class="form_e" style="width: 80%;">
            <h1 class="hi3"> Edit borrowed list</h1>
            <label>Enter the serial number:</label> <br>
            <input type="text" name="book_isbn" />
         </form>

         <button class="SE">Remove</button>
      </div>

   </div>

   <div class="bottom_box">

      <div>

         <form class="form" action="" method="post" style="width: 80%;">
            <h1 class="hi2"> Find Books</h1>
            <label>Book Name or ISBN:</label> <br>
            <input type="text" name="book_isbn">
            <input class="SE" type="submit" name="search" value="Search">
            <input class="po" type="submit" name="add_to_list" value="Add to list">

         </form>


      </div>

   </div>



   <?php

   $count = 0;
   $sql = "SELECT Book_id, Book_name, Genre from `all_book_list`";
   $res = mysqli_query($connection, $sql);
   $bookname = null;
   while ($row = mysqli_fetch_assoc($res)) {
      if ($row['Book_id'] == $_POST['book_isbn']) {
         $count = $count + 1;
         $bookname = $row['Book_name'];
         break;
      }
   }


   if (isset($_POST['search'])) {

      if ($count == 1) {

   ?>
         <script type="text/javascript">
            alert("Book Found!");
         </script>
      <?php
      } else {

      ?>
         <script type="text/javascript">
            alert("Sorry, this Book is not available");
         </script>
      <?php

      }
   }


   if (isset($_POST['add_to_list'])) {

      $issue_date = strtotime("today");
      $issue_date_store = date("Y-m-d h:i:s", $issue_date);

      $return_date = strtotime("+3 Month");
      $return_date_store = date("Y-m-d H:i:s", $return_date);
      echo $_SESSION['user_id'] . 'And ' . $_POST['book_isbn'] . $bookname . $issue_date_store . $return_date_store;
      if ($count == 1) {
         mysqli_query($connection, "INSERT INTO `borrowed_book_list` VALUES ('$_SESSION[user_id]' , '$_POST[book_isbn]' , '$bookname', '$issue_date_store', '$return_date_store')");


      ?>
         <script type="text/javascript">
            alert("Book Added!");
         </script>
      <?php
      } else {

      ?>
         <script type="text/javascript">
            alert("Sorry, this Book is not available");
         </script>
   <?php

      }
   }

   ?>





</body>

</html>