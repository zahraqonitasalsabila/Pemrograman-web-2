<?php
require_once 'class_accountbank.php';

$ab1 = new AccountBank("010",5000000,"roney");
$ab2 = new Accountbank("070",15000000,"ronaldo");

$ab1->cetak();
echo '<hr/>';
$ab2->cetak();
echo 'ronaldo transfer uang ke ronny 1250000<br/>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin. '<br/>';
$ab2->transfer($ab1,1250000);
$ab1->cetak();
echo '<hr/>';
$ab2->cetak();

?>
