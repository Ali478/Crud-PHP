<?php
include "./../include/header.php";
include "./../classes/dbcontroller.php";


$q = $_REQUEST['id'];

$data = new Guest();
$aq = $data->editmode($q);
?>
<html lang="en">
<head>
    <title>Update</title>
</head>
<body>
    <br><br>
    <form action="" method="post">
        <?php while ($row = $aq->fetch()) : ?>
            FirstName: <input type="text" name="fname" id="" value="<?php echo htmlspecialchars($row['firstname']) ?>">
            <br></br>
            LastName: <input type="text" name="lname" id="" value="<?php echo htmlspecialchars($row['lastname']) ?>">
            <br></br>
            Email: <input type="text" name="email" id="" value="<?php echo htmlspecialchars($row['email']) ?>">
            <br></br>
            <input type="submit" name="submit">
        <?php endwhile; ?>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $data->update($q);
    $data->redirect();
}
echo "<br><br><br><br><br><br>";
include  "./../include/footer.php";

