<!DOCTYPE html>
<html>
<!-- By: Brian Duke -->
<!-- Description: Displays a quote from the user's chosen movie-->

<head>
    <title>Movie Quote</title>
</head>
<body>

<!-- Using IF Statements to select where to direct the User based on User Input -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie = $_POST['movie_choice'];

    switch ($movie) {
        case "Cars":
            echo "<h1>Quote from Cars</h1>";
            echo "<p>'Speed. I am speed.' - Lightning McQueen</p>";
            break;
        case "Cars 2":
            echo "<h1>Quote from Cars 2</h1>";
            echo "<p>'Mater, I am not a spy!' - Lightning McQueen</p>";
            break;
        case "Cars 3":
            echo "<h1>Quote from Cars 3</h1>";
            echo "<p>'The racing is the reward, not the stuff.' - Lightning McQueen</p>";
            break;
        default:
            echo "<h1>No quote found</h1>";
            break;
    }
}
?>

</body>
</html>