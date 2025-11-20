<?php

declare(strict_types=1);

class PokerDice 
{
    public array $diceFaces =['As', 'K', 'Q', 'J', '7', '8'];
    private string $currentFace = '';

    private static int $totalRolls = 0;
    
    // 2. Constructor

    public function __construct()
    {
        $this->roll();
    }
    
    public function roll(): void {

        $randomFace = array_rand($this->diceFaces);
        $this->currentFace = $this->diceFaces[$randomFace];
        
        self::$totalRolls++;
    }

    public function getDiceFace(): string {
        return $this->currentFace;
    }

    public static function getTotalRolls(): int
    {
        return self::$totalRolls;
    }

    public function showFace(): void
    {
        echo "Current face: {$this->currentFace}\n";
    }
}

?>