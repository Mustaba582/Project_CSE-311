<!DOCTYPE html>
<html>

<head>
  <title>Create Account</title>
  <link rel="stylesheet" type="text/css" href="new_account_style.css">
</head>

<body>

  <header class="header1">
    Enter your information Here
  </header>

  <section class="section1">

    <form class="my-form">
      <div class="form-group">
        <label>Name: </label>
        <input type="text" name="Name" required="">
      </div>
      <div class="form-group">
        <label>User ID: </label>
        <input type="number" name="user_id" required="">
      </div>
      <div class="form-group">
        <label>Password: </label>
        <input type="password" name="password" required="">
      </div>
      <div class="form-group">
        <label>Contact no: </label>
        <input type="number" name="contact_no" required="">
      </div>
      <div class="form-group">
        <label>Address: </label>
        <input type="text" name="address" required="">
      </div>
    </form>
    <div>
      <a href="Login.php">
        <input class="button" type="submit" class="submit" name="">
      </a>
    </div>
  </section>

</body>

</html>