<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Form</title>
</head>
<body>
    <h1> FOOD ORDER </h1>
    <body bgcolor="#ADD8E6">
        <div><h2> Registration form </h2></div>
        <form action='connect.php' method="POST" onsubmit="return">
            <label for='user'> NAME </label><br>
            <input type='text' name='name' id="name" required><br> <br>

            <label for='email'> email </label><br>
            <input type='email' name='email' id="email" required><br> <br>

            <label for='food'> food </label><br>
            <input type='text' name='food' id="food" required><br> <br>

            <label for='phone'> PHONE NUMBER </label><br>
            <input type='text' name='phone' id="phone" required><br> <br>

            <label for='location'> LOCATION </label><br>
            <input type='text' name='location' id="location" required><br> <br>

            <input type='submit' name='submit' id="submit"><br> <br>
</form>
</body>
</html>