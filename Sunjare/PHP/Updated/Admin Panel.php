<?php
include "connection.php";

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
			<p>Name: <br><br> User ID: <br><br> Designation:</p>
		</div>
		<a href="Login.php">
			<button class="button"><u>Logout</u></button>
		</a>

		<a href="all_books.php">
			<button class="SA">SHOW ALL BOOKS</button>
		</a>
		
		<a href="ordered_list.php">
			<button class="SO">SHOW ORDERED BOOKS</button>
		</a>
	</div>



	<div class="rightbox">

		
			<form class="form" method = "post" style="width: 80%;">
				<label>Book ISBN:</label> <br>
				<input type="text" name="book_isbn" />
				<input class="SE" type="submit" name="search" value="Search">
                
			</form>
			
			<a href="Place Order.php">
				<button class="po">Place Order</button>
		    </a>
			
				
		
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


	?>

	




</body>

</html>