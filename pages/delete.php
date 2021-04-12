<?php
include "classes/dbcontroller.php";
$q = $_REQUEST['id'];

$data = new Guest();
$data->delete($q);
$data->redirect();
?>