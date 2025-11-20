<?php
require_once 's1_04_n2_e1.php';

echo "CREATE & ROLL #1\n";
$dice1 = new PokerDice();
$dice2 = new PokerDice();
$dice3 = new PokerDice();
$dice4 = new PokerDice();
$dice5 = new PokerDice();

echo "Dice 1: " . $dice1->getDiceFace() . "\n";
echo "Dice 2: " . $dice2->getDiceFace() . "\n";
echo "Dice 3: " . $dice3->getDiceFace() . "\n";
echo "Dice 4: " . $dice4->getDiceFace() . "\n";
echo "Dice 5: " . $dice5->getDiceFace() . "\n";

$dice1->roll();
$dice2->roll();
$dice3->roll();
$dice4->roll();
$dice5->roll();

echo "\n";
echo "ROLL #2". "\n";
echo "Dice 1: " . $dice1->getDiceFace() . "\n";
echo "Dice 2: " . $dice2->getDiceFace() . "\n";
echo "Dice 3: " . $dice3->getDiceFace() . "\n";
echo "Dice 4: " . $dice4->getDiceFace() . "\n";
echo "Dice 5: " . $dice5->getDiceFace() . "\n";

echo "\n";
echo "Total rolls performed: " . PokerDice::getTotalRolls() . "\n";

<<<<<<< HEAD
?>
=======
?>
>>>>>>> ce685505778db9ad1bfdd5d014a672a890474e77
