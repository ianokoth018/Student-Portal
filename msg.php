<?php
// foo.php
$errors = array (
    1 => "Record Has Been Successfully Inserted",
    2 => "Record Has Been Successfully Approved",
    3 => "Record Has Been Successfully Deleted",
    4 => "MySQL Database Error. Please Check your query",
);
$error_id = isset($_GET['msg']) ? (int)$_GET['msg'] : 0;
if ($error_id != 0 && in_array($error_id, [1,2,3,4])) {
    echo $errors[$error_id];
}else{
    echo 'VIEW DETAILS';
}
?>