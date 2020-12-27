<?php
    $arr = array(
        'massage'    => $_GET['massage']);
        'name'     => $_GET['name'],
    $json_format = json_encode($arr);
    echo $json_format;
?>
