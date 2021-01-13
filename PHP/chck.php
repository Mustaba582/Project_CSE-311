<?php

$exp_date = strtotime("+3 Year");
$exp_date_store = date("F j, Y, g:i a", $exp_date);
echo $exp_date_store;
?>