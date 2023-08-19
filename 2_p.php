<!DOCTYPE html>
<html>
<head>
    <title>Area Calculator</title>
</head>
<body>
    <h1>Area Calculator</h1>
    <form method="post" action="">
        <label for="shape">Select a shape:</label>
        <select name="shape">
            <option value="circle">Circle</option>
            <option value="rectangle">Rectangle</option>
            <option value="triangle">Triangle</option>
            <option value="square">Square</option>
            <option value="trapezoid">Trapezoid</option>
            <option value="parallelogram">Parallelogram</option>
        </select><br>

        <label for="input1">Input 1:</label>
        <input type="number" name="input1" required><br>

        <label for="input2">Input 2:</label>
        <input type="number" name="input2"><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    function calculateCircleArea($radius) {
        return M_PI * $radius * $radius;
    }

    function calculateRectangleArea($length, $width) {
        return $length * $width;
    }

    function calculateTriangleArea($base, $height) {
        return 0.5 * $base * $height;
    }

    function calculateSquareArea($side) {
        return $side * $side;
    }

    function calculateTrapezoidArea($base1, $base2, $height) {
        return 0.5 * ($base1 + $base2) * $height;
    }

    function calculateParallelogramArea($base, $height) {
        return $base * $height;
    }

    if(isset($_POST['calculate'])) {
        $shape = $_POST['shape'];
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];

        echo "<h2>Results:</h2>";

        switch ($shape) {
            case 'circle':
                $area = calculateCircleArea($input1);
                echo "Area of Circle: $area";
                break;
            case 'rectangle':
                $area = calculateRectangleArea($input1, $input2);
                echo "Area of Rectangle: $area";
                break;
            case 'triangle':
                $area = calculateTriangleArea($input1, $input2);
                echo "Area of Triangle: $area";
                break;
            case 'square':
                $area = calculateSquareArea($input1);
                echo "Area of Square: $area";
                break;
            case 'trapezoid':
                $area = calculateTrapezoidArea($input1, $input2, $_POST['input3']);
                echo "Area of Trapezoid: $area";
                break;
            case 'parallelogram':
                $area = calculateParallelogramArea($input1, $input2);
                echo "Area of Parallelogram: $area";
                break;
            default:
                echo "Invalid shape selection.";
        }
    }
    ?>
</body>
</html>

