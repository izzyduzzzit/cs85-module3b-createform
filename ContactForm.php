<?php

// Izarra Villareal

/* Assignment objectives
1.	Create an HTML form (self-processing, method="POST") with fields:
    a.	Full Name
    b.	Email Address
    c.	Topic of Message (something meaningful to you)
    d.	Message (textarea, 50–150 words required)
2.	Write PHP to:
    a.	Detect submission
    b.	Sanitize inputs using htmlspecialchars()
    c.	Validate inputs and show thank you message on success
3.	In comments, write:
    a.	Your output predictions
    b.	What you expect to see in $_POST
    c.	Post-test reflections: surprises, fixes, insights
*/

/* Example output
Thank you, Jordan! We received your message about: "Labrador training tips"
We'll get back to you at jordan@example.com.
*/

// Exploring superglobals with a survey example
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
  echo "<h3>Survey Results</h3>";
  echo "<p>Favorite Color: " . htmlspecialchars($_GET['color']) . "</p>";
  echo "<p>Favorite Movie: " . htmlspecialchars($_GET['movie']) . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="container">
    <form action="" method="GET">
        <label for="color">Favorite Color:</label>
        <input type="text" id="color" name="color" required><br>
        <label for="movie">Favorite Movie:</label>
        <input type="text" id="movie" name="movie" required><br>
        <input type="submit" value="Submit Survey">
    </form>
</div>
</body>
</html>