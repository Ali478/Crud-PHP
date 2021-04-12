<?php
include "../include/header.php";
include "../classes/dbcontroller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <br><br>
  <form action="" method="post">
    <input type="hidden" name="userid" id="id">
    FirstName: <input type="text" name="fname" id="">
    <br></br>
    LastName: <input type="text" name="lname" id="">
    <br></br>
    Email: <input type="text" name="email" id="">
    <br></br>
    <input type="submit" name="submit" class="btn btn-dark btn-lg">
</body>
</html>

<?php
if (isset($_POST['submit'])) {
  $data = new Guest();
  $data->insert();
  $data->redirect();
}
include  "../include/footer.php";   
