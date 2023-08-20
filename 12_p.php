<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
</head>
<body>
    <h1>Vowel Counter</h1>
    <p>Phrase: "Develop & Empower Individuals"</p>

    <?php
    if(isset($_POST['count'])) {
        $phrase = "Develop & Empower Individuals";
        $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');

        $count = 0;
        for ($i = 0; $i < strlen($phrase); $i++) {
            if (in_array($phrase[$i], $vowels)) {
                $count++;
            }
        }

        echo "<p>Total number of vowels: $count</p>";
    }
    ?>

    <form method="post" action="">
        <input type="submit" name="count" value="Count Vowels">
    </form>
</body>
</html>

