<!DOCTYPE html>
<html>
<!-- By: Brian Duke -->
<!-- Description: Displays a List of Movies to choose a Quote from -->

<head>
	<title>Movie Quotes</title>
</head>
<body>
	<h1>Movie Quote Selector</h1>
	<p>By: Brian Duke</p>
    <!-- Form with Radio Buttons for Movies -->
    <form action="lab5-response.php" method="POST">
        <p>Please Select a Movie for a Quote:</p>
        <input type="radio" id="movie1" name="movie_choice" value="Cars">
        <label for="movie1">Cars</label><br>
        <input type="radio" id="movie2" name="movie_choice" value="Cars 2">
        <label for="movie2">Cars 2</label><br>
        <input type="radio" id="movie3" name="movie_choice" value="Cars 3">
        <label for="movie3">Cars 3</label><br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>