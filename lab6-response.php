<!DOCTYPE html>
<html>
<!-- By: Brian Duke -->
<!-- Description: Savings Calculator Results -->

<head>
    <title>Savings Calculation Results</title>
</head>
<body>
    <h1>Savings Calculation Results</h1>

	<!-- Using Loop for Amount of Months to Gradually Increase Month Number -->
    <?php
    // Get form info
    $initial_amount = $_POST['initial_amount'];
    $monthly_saving = $_POST['monthly_saving'];
    $months = $_POST['months'];

    // Output initial amount
    echo "<p>Initial amount: $" . $initial_amount . "</p>";

    // Calculate savings for each month then output to User
    for ($i = 1; $i <= $months; $i++) {
        $total_savings = $initial_amount + ($monthly_saving * $i);
        echo "<p>Month $i: $" . $total_savings . "</p>";
    }
    ?>

</body>
</html>
