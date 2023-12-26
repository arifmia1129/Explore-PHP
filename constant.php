<?php
$employee_name = "Md. Arif Mia";
$designation = "Software Developer";
$department = "Software & IT";
define("COMPANY_NAME", "Supreme Supports");

$department = "Technical";


echo "Employee Name: $employee_name";
echo "\nDesignation: $designation";
echo "\nDepartment: $department";
echo "\nCompany name: ".COMPANY_NAME."\n";
echo constant("COMPANY_NAME");

?>