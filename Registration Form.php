<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <H2>Registration Form</H2>
    <form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="name" name="name">
        </label><br>
        <label for="email">
            Email: <input type="email" name="email">
        </label><br>
        <label for="date of birth">
            Date of Birth (DD-MM-YYYY): <input type="dob" name="dob">
        </label><br>
        <label for="gender">
            Gender: <input type="gender" name="gender">
        </label><br>
        <label for="country">
            Country: <input type="country" name="country">
        </label><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>