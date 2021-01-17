<?php
include "connection.php";
session_start();
if(isset($_SESSION['login'])) {
   if($_SESSION['login'] != true) {
      header("Location: ./index.php");
   }
} else {
   header("Location: ./index.php");
}
if(isset($_POST['logout'])) 
{
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
         <p>Name: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ""; ?> <br><br> 
         User ID: <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ""; ?>  <br><br>
         Membership Validity: <?php echo isset($_SESSION['mem_exp']) ? $_SESSION['mem_exp'] : ""; ?> <br><br></p>
      </div>

      <form method="post" action="member.php">
         <button class="button" type="submit" name="logout"><u>Logout</u></button>
      </form>
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

         <form class="form" style="width: 80%;">
            <h1 class="hi2"> Find Books</h1>
            <label>Book Name or ISBN:</label> <br>
            <input type="text" name="book_isbn" />
         </form>

         <button class="SE">SEARCH</button>
         <button class="po">Add to list</button>
      </div>

   </div>




</body>

</html>