<?php
    $query = $_GET['q'];
    
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) $ipAddr = $_SERVER['HTTP_CLIENT_IP'];
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) $ipAddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else $ipAddr = $_SERVER['REMOTE_ADDR'];

    if(!empty($query)) {
        if ($query === 'json') echo json_encode(array('ip' => $ipAddr));
    }else echo $ipAddr;
?>