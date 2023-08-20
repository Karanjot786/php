<!DOCTYPE html>
<html>
<head>
    <title>String Reversal</title>
</head>
<body>
    <h1>String Reversal</h1>
    <form method="post" action="">
        <label for="input">Enter a string:</label>
        <input type="text" name="input" required><br>

        <input type="submit" name="reverse" value="Reverse">
    </form>

    <?php
    if(isset($_POST['reverse'])) {
        $input = $_POST['input'];
        $words = explode(" ", $input); // Split the input string into words
        $reversedWords = array_reverse($words); // Reverse the array of words
        $reversedString = implode(" ", $reversedWords); // Join the reversed words back into a string

        echo "<p>Original string: $input</p>";
        echo "<p>Reversed string: $reversedString</p>";
    }
    ?>
</body>
</html>
