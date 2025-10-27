<?php
// -----------------------------------------------------------------
// ------------ Exercise 1: TAXABLE WAGE (OPP) ---------------------
//------------------------------------------------------------------

declare(strict_types=1);

// Class that represents an employee - (Attributes: name and salary).
class Employee 
{
    public string $name;
    public float $salary;
    
    //First Method (function) that receives name and salary as parameters. 
    public function setValue(string $name, float $salary) //: void -- can i use void and float at the same time , does not sound right?
    {
        $this->name  = $name;
        $this->salary = $salary;
    }
    
    // Second method that prints the name and taxable message (Yes/No - Salary > 6K) 
    public function getValue() {
    if ($this->salary > 6000) {
        $is_taxable = "YES";
    } elseif ($this->salary > 0) {
        $is_taxable = "NO";
    } else {
        $is_taxable = 'Invalid salary value (must be numeric and bigger than ZERO ("0"))';
    }
    
    // Display (print) the result
    
        echo "Employee Name:  $this->name<br>"; // "\n" altrenative to <br>
        echo "Employee Salary:  $this->salary<br>";
        echo "Employee Is Taxable:  <strong>$is_taxable</strong><br><hr>";
    }
}


//---------------------------------------------------
//------- Testing the Class and functions ------------
//---------------------------------------------------
echo "<hr>"; 
echo "<strong>Testing the Class and functions</strong><br>";
echo "<hr>"; 

$Ruben = new Employee; 
$Ruben->setValue('Ruben', 6000); // NOT TAXABLE
$Ruben->getValue(); // NO

$Clara = new Employee;
$Clara->setValue('Clara', 6000.01); // TAXABLE
$Clara->getValue();

$Teo = new Employee;
$Teo->setValue('Teo', -100); // INVALID
$Teo->getValue();

?>