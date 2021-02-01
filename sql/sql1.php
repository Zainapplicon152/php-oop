<?php
require_once '../config.php';
$result = $mysqli->query("SELECT * FROM users");
echo "Affected rows: " . $mysqli->affected_rows;

mysqli_data_seek($result, 5);
$row = mysqli_fetch_row($result);
echo '<pre>', print_r($row), '</pre>';
//mysqli_debug("d:t:o,/temp/client.trace");
//echo $mysqli -> dump_debug_info();
$mysqli->close();
?>