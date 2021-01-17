<?php
include "connection.php";

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
	<link rel="stylesheet" type="text/css" href="Admin_Panel_Style.css">
	<title>Admin Panel</title>
</head>

<body>


	<div class="leftbox">

		<div class="top">
			<!-- <p>Name: <br><br> User ID: <br><br> Designation:</p> -->
			<p>Name: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ""; ?> <br><br> User ID: <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ""; ?> <br><br> </p>

		</div>
		<form method="post" action="Admin_Panel.php">
         <button class="button" type="submit" name="logout"><u>Logout</u></button>
      </form>

		<a href="all_books.php">
			<button class="SA">SHOW ALL BOOKS</button>
		</a>
		<a href="ordered_list.php">
			<button class="SO">SHOW ORDERED BOOKS</button>
		</a>
	</div>



	<div class="rightbox">

		<div>
			<form class="form" style="width: 80%;">
				<label>Book Name or ISBN:</label> <br>
				<input type="text" name="book_isbn" />

			</form>

			<button class="SE">SEARCH</button>
			<button class="po">Place Order</button>
		</div>



	</div>




</body>

</html>