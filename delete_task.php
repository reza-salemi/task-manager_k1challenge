<?php
include_once "Database/functions.php";

$id = $_GET['id'];
delete_task($id);
header("location:tasks.php");