<?php

//var_export($_POST);
//return;


$result = array();
$result['test'] = "這是測試ajax";
$result['name'] = $_POST['name'];
$result['phone_number'] = $_POST['phone_number'];


//var_export($result);

echo json_encode($result, true);




