<?php

include "include/header.php";
include "classes/dbcontroller.php";
?>

<!DOCTYPE html>
<html>

<body>
    <div id="container">
        <h1 id="h1">GUEST</h1>
        <a href="./pages/insert.php" class="btn btn-dark btn-lg" id="butt">
            Insert New Data</a>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = new Guest();
                $q = $data->showData();
                foreach ($q->fetchAll() as $row) {
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['firstname']) ?></td>
                        <td><?php echo htmlspecialchars($row['lastname']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td>

                            <a href="index.php?action=delete&id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-danger">Delete</a>
                            <a href="/pages/edit.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-dark">Edit</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
</body>
</div>

</html>

<?php
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = (int)$_GET['id'];
    if ($data->delete($id)) {
        $data->redirect();
    }
}
include  "include/footer.php";
