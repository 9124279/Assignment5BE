<?php
    $arr = array(
        'massage'    => $_POST['massage']);
        'name'     => $_POST['name'],
    $json_format = json_encode($arr);
    echo $json_format;

?>
