<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <h1>Fibonacci Series</h1>
    <form method="post" action="">
        <label for="n">Enter the number of terms:</label>
        <input type="number" name="n" required><br>

        <input type="submit" name="generate" value="Generate">
    </form>

    <?php
    if(isset($_POST['generate'])) {
        $n = $_POST['n'];

        // Initialize the first two terms of the Fibonacci series
        $term1 = 0;
        $term2 = 1;

        echo "<p>Fibonacci Series up to $n terms:</p>";
        echo "$term1 $term2 ";

        // Generate and print the remaining terms
        for($i = 3; $i <= $n; $i++) {
            $nextTerm = $term1 + $term2;
            echo "$nextTerm ";
            $term1 = $term2;
            $term2 = $nextTerm;
        }
    }
    ?>
</body>
</html>
