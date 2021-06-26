<?php
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) echo $_SERVER['HTTP_CLIENT_IP'];
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) echo $_SERVER['HTTP_X_FORWARDED_FOR'];
    else echo $_SERVER['REMOTE_ADDR'];
?>