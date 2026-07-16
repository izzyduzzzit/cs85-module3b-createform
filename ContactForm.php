<!DOCTYPE HTML>
<html>

<head>
    <title>Contact Izarra</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<?php
// Name: Izarra Villareal
// Github URL: https://github.com/izzyduzzzit/cs85-module3b-createform

/* My prediction is that if I enter the following:
    Izzy
    villareal_izarra@student.smc.edu
    Rock Climbing
    Hello, I am interested in the rock climbing trip next weekend.

That my form will respond by displaying the following once I click submit:
    Thank you, Izzy!
    We received your messaged about: Rock Climbing
    We will get back to you at villareal_izarra@student.smc.edu

Results:
    I ended up running into issues with trying to get a word count to work so I settled for a character minimum.
    This character minimum ended up causing me issues with my initial message. I also tested using a bad email address
    and that responded correctly by telling me to correct the format of the text entered. I am correctly prompted
    to correct mistakes when I leave fields empty and my sticky form behavior is working. I also ran into issues
    trying to submit this form within Laravel so I had to use php -S localhost:8000 to test my page out. I am happy with
    my results. I learned a lot trying to put this together, I would just like to know how to get word count working.
    I will save that for another day.
*/

// Variable for holding whether the form passes validation
$submitted = false;

// Variable for holding form validation errors
$errorMessage = "";

// Variables that will hold the data entered by the user
$name = "";
$email = "";
$topic = "";
$message = "";

// Check whether the form was submitted using POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize user input to help prevent XSS attacks
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $topic = htmlspecialchars(trim($_POST['topic']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate all inputs
    if (
        !empty($name) &&
		
		// Added email format validation using filter_var
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        !empty($topic) &&
        !empty($message)
    ) {
        $submitted = true;
    } else {
		
		// Error message if data input does not pass the form validation check
        $errorMessage = "Please complete all fields and enter a valid email address.";
    }
}
?>

<?php

// Display a thank you message if the form is submitted properly
if ($submitted) {
?>
<h2>Thank you, <?php echo $name; ?>!</h2>
<p>
    We received your message about:
    "<?php echo $topic; ?>"
</p>
<p>
    We'll get back to you at
    <?php echo $email; ?>.
</p>

<?php
} else {
?>

<h2>Contact Izarra</h2>

<?php

// Display the error message if form validation does not pass
if (!empty($errorMessage)) {
?>
<p><strong><?php echo $errorMessage; ?></strong></p>

<?php
}
?>

<!-- Added htmlspecialchars as a security best practice when posting the form back to itself -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="name">Full Name:</label>
	<!-- Added sticky form behavior using value= parameter on form inputs -->
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
    <label for="topic">Topic of Message:</label>
    <input type="text" id="topic" name="topic" value="<?php echo $topic; ?>" required>
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="6" minlength="150" maxlength="750" required><?php echo $message; ?></textarea>
    <input type="submit" value="Submit">
</form>

<?php
}
?>

</body>
</html>
