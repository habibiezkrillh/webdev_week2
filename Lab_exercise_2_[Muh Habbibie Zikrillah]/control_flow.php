<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adult or Minor?</title>
</head>
<body>
    <form method="post" action="">
        <label for="age">Input your Age in here:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "<p>You are an adult.</p>";
        } else {
            echo "<p>You are a minor.</p>";
        }
    }
    ?>
</body>
</html>
