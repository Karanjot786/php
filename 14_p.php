<!DOCTYPE html>
<html>
<head>
    <title>Alphabetical Sorting</title>
</head>
<body>
    <h1>Alphabetical Sorting</h1>
    <form method="post" action="">
        <label for="input">Enter a word:</label>
        <input type="text" name="input" required><br>

        <input type="submit" name="sort" value="Sort">
    </form>

    <?php
    if(isset($_POST['sort'])) {
        $input = $_POST['input'];
        $sorted = str_split($input); // Split the string into an array of characters
        sort($sorted); // Sort the array in alphabetical order
        $sortedString = implode("", $sorted); // Convert the sorted array back to a string

        echo "<p>Original word: $input</p>";
        echo "<p>Word after sorting: $sortedString</p>";
    }
    ?>
</body>
</html>
