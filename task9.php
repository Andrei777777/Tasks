//task9//


<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP - Calculate Electricity Bill</title>
</head>

<?php

$resultStr = $result = '';

if (isset($_POST['unit-submit'])) {

    if (empty($_POST['units'])) {
        echo "You need to fill units";

        die();
    }

    $units = $_POST['units'];
    $result = calculateElectricityBillPerUnitCost($units);
    $resultStr = "Total amount of {$units}  -  {$result}. ";
}

function calculateElectricityBillPerUnitCost($units): string
{
    $firstUnitCost = 3.50;
    $secondUnitCost = 4.00;
    $thirdUnitCost = 5.20;
    $fourthUnitCost = 6.50;

    if ($units <= 50) {
        $bill = $units * $firstUnitCost;
    } else if ($units <= 100) {
        $temp = 50 * $firstUnitCost;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $secondUnitCost);
    } else if ($units <= 200) {
        $temp = (50 * 3.5) + (100 * $secondUnitCost);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $thirdUnitCost);
    } else {
        $temp = (50 * 3.5) + (100 * $secondUnitCost) + (100 * $thirdUnitCost);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourthUnitCost);
    }

    return number_format($bill, 2, '.', '');
}

?>


<body>
<div id="page-wrap">
    <h1>Php - Calculate Electricity Bill</h1>

    <form action="" method="post" id="quiz-form">
        <input type="number" name="units" id="units" placeholder="Please enter no. of Units"/>
        <input type="submit" name="unit-submit" id="unit-submit" value="Submit"/>
    </form>

    <div>
        <br/>
        <?= $resultStr ?>
    </div>
</div>
</body>
</html>

