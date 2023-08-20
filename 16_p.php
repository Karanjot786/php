<!DOCTYPE html>
<html>
<head>
    <title>Letter Case Counter</title>
</head>
<body>
    <h1>Letter Case Counter</h1>
    <form method="post" action="">
        <label for="input">Enter a string:</label>
        <input type="text" name="input" required><br>

        <input type="submit" name="count" value="Count">
    </form>

    <?php
    if(isset($_POST['count'])) {
        $input = $_POST['input'];

        $uppercaseCount = 0;
        $lowercaseCount = 0;

        for ($i = 0; $i < strlen($input); $i++) {
            if (ctype_upper($input[$i])) {
                $uppercaseCount++;
            } elseif (ctype_lower($input[$i])) {
                $lowercaseCount++;
            }
        }

        echo "<p>Input string: $input</p>";
        echo "<p>Uppercase letters count: $uppercaseCount</p>";
        echo "<p>Lowercase letters count: $lowercaseCount</p>";
    }
    ?>
</body>
</html>
