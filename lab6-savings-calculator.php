<!DOCTYPE html>
<html>
<!-- By: Brian Duke -->
<!-- Description: Savings Calculator -->

<head>
    <title>PHP Loops - Savings Calculator</title>
</head>
<body>
    <h1>PHP Loops - Savings Calculator</h1>
    <p>Programmed By: Brian Duke</p>
    <p>Please Fill in The Following Fields to Calculate your Monthly Savings:</p>

    <!-- Form for User Input -->
    <form action="lab6-response.php" method="POST">
        <label for="initial_amount">Initial Amount:</label>
        <input type="number" id="initial_amount" name="initial_amount" required><br><br>
        <label for="monthly_saving">Monthly Savings Amount:</label>
        <input type="number" id="monthly_saving" name="monthly_saving" required><br><br>
        <label for="months">Number of Months:</label>
        <input type="number" id="months" name="months" required><br><br>
        <input type="submit" value="Calculate Savings">
    </form>
</body>
</html>
