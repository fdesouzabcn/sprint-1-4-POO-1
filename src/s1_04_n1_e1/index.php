<?php
require_once 's1_04_n1_e1.php';

$ruben = new Employee('Ruben', 6000);
$ruben->printTaxInfo();

$clara = new Employee('Clara', 6000.01);
$clara->printTaxInfo();

$ana = new Employee('Ana', -100);
$ana->printTaxInfo();

?>