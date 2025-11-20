<?php
declare(strict_types=1);

class Employee 
{
    private string $name;
    private float $salary;
    
    public function __construct(string $name, float $salary) {
        if ($salary < 0) {
            throw new InvalidArgumentException("Salary must be greater than or equal to 0");
        }

        $this->name = $name;
        $this->salary = $salary;
    }
    
        public function isTaxable(): bool{
        return $this->salary > 6000;
    }

    public function printTaxInfo(): void
    {
        $taxStatus = $this->isTaxable() ? "YES" : "NO";
        
        echo "Name: {$this->name}\n";
        echo "Salary: {$this->salary}€\n";
        echo "Pays Taxes: {$taxStatus}\n";
        echo "-------------------\n";
    }
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> ce685505778db9ad1bfdd5d014a672a890474e77
