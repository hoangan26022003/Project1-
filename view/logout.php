<?php

session_start();

session_destroy();

echo "<script>window.open('index.php?controller=home','_self')</script>";

?>