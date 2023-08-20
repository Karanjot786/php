<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <form method="post" action="">
        <label for="input">Enter a string:</label>
        <input type="text" name="input" required><br>

        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if(isset($_POST['check'])) {
        $input = strtolower($_POST['input']); // Convert to lowercase for case-insensitive check
        $input = preg_replace("/[^a-zA-Z0-9]/", "", $input); // Remove non-alphanumeric characters

        $reversed = strrev($input); // Reverse the string

        if ($input === $reversed) {
            echo "<p>The string \"$input\" is a palindrome.</p>";
        } else {
            echo "<p>The string \"$input\" is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>

