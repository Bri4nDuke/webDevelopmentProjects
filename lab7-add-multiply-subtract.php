<!DOCTYPE html>
<html>
<!-- By: Brian Duke -->
<!-- Description: Using Functions to Perform Mathematical Operations -->

<head>
    <title>Using Functions to Perform Operations</title>
        <style>
        /* Form Styling */
		form {
            background-color: #f0f0f0;
            border: 1px solid #000;
            width: 50%;
            padding: 20px;
            margin: auto;
		}
		
		/* When In Text Box Darken Border */
        input[type=number]:focus, select:focus {
            border: 3px solid #555;
        }
    </style>
</head>
<body>
    <h1>Using Functions to Perform Operations</h1>
    <p>Programmed By: Brian Duke</p>
    <p>Please Fill in The Following Fields to Perform the Selected Operation:</p>

    <!-- Form for User Input -->
    <form action="" method="POST">
        <label for="num1">First Number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Second Number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="operation">Choose Operation:</label>
        <select id="operation" name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    // PHP Functions for each operation
    function add($num1, $num2) {
        return $num1 + $num2;
    }

    function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    function multiply($num1, $num2) {
        return $num1 * $num2;
    }

	// Check IF User Devided by Zero
    function divide($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: Devided by Zero, Please Try Again.";
        }
    }

    // Handling Form Submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Switch to Determine Which Function to Call
        switch ($operation) {
            case "add":
                $result = add($num1, $num2);
                break;
            case "subtract":
                $result = subtract($num1, $num2);
                break;
            case "multiply":
                $result = multiply($num1, $num2);
                break;
            case "divide":
                $result = divide($num1, $num2);
                break;
        }

		// Display Results
        echo "<p>The Result is: <strong>$result</strong></p>";
		echo "<p>Thank You for Using My Program!</p>";
    }
    ?>
</body>
</html>