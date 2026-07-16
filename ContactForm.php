<!DOCTYPE HTML>
<html>
<head>
    <title>Contact Izarra</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
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
</body>
</html>
