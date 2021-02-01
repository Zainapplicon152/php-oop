<?php
require_once '../config.php';

$sql = "SELECT id from users";
$result = mysqli_query($mysqli, $sql);

$r = mysqli_fetch_all($result, MYSQLI_NUM);
print_r($r);