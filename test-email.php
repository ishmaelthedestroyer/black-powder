<?php
    ini_set('display_errors', 1);
    error_reporting(-1);
    mail ('tosphilip@gmail.com', 'Postfix Test', 'A test email') || print_r(error_get_last());
?>