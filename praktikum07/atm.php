<?php
require_once 'class_account.php';

$acl = new Account("03201",5000000);
$acl = new Account("01010",4500000);

$ac1->cetak();
$ac1->deposit(75000);
echo '<br/>nabung 75000 <br/>';
$ac1->cetak();

?>

