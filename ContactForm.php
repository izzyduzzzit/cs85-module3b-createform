<!DOCTYPE HTML>
<html>
<head>
    <title>Contact Izarra</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php
// Variable for whether the form upon submission passes validation and is considered submitted
$submitted = false;

// Variables that will hold the data entered by form user
$name = "";
$email = "";
$topic = "";
$message = "";

// PHP logic to check that the form method is post upon submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $topic = ($_POST['topic']);
    $message = ($_POST['message']);
	{
        $submitted = true;
    }
}
?>

<?php
// PHP form submission handling logic
if ($submitted == true) {
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
<form action="" method="POST">
    <label for="name">
        Full Name:
    </label>
    <input type="text" id="name" name="name" required>
    <br>
	<br>
    <label for="email">
        Email Address:
    </label>
    <input type="email" id="email" name="email" required>
    <br>
	<br>
    <label for="topic">
        Topic of Message:
    </label>
    <input type="text" id="topic" name="topic" required>
    <br>
	<br>
    <label for="message">
        Message:
    </label>
    <br>
    <textarea id="message" name="message" rows="6" cols="50" minlength="50" maxlength="150" required></textarea>
    <br>
	<br>
    <input type="submit" value="Submit">
</form>

<?php
}
?>

</body>
</html>
