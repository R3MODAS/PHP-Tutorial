<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Operators in PHP</title>
    <style>
        h1 {
            font-size: 1.7rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Operators in PHP</h1>

        <?php
        $a = 10;
        $b = 6;

        // Arithmetic Operators
        echo "Result of a + b -> " . ($a + $b) . "<br>";
        echo "Result of a - b -> " . ($a - $b) . "<br>";
        echo "Result of a * b -> " . ($a * $b) . "<br>";
        echo "Result of a / b -> " . ($a / $b) . "<br>";
        echo "Result of a % b -> " . ($a % $b) . "<br>";
        echo "Result of a ** b -> " . ($a ** $b) . "<br>";
        echo "<br><br>";

        // Assignment Operators
        $x = $a;
        echo "Value of x (before) -> " . $x . "<br>";
        $x += 10;
        echo "Value of x (after) -> " . $x  . "<br>";
        echo "<br><br>";

        // Comparison Operators
        $num1 = 10;
        $num2 = 20;
        echo "Equals Operator -> ";
        echo var_dump($num1 == $num2);
        echo "<br>";
        echo "Not Equals Operator -> ";
        echo var_dump($num1 <> $num2);
        echo "<br><br>";
        
        // Logical Operators
        $val1 = true;
        $val2 = false;
        echo "Result -> ";
        echo var_dump($val1 and $val2);
        echo var_dump($val1 or $val2);
        echo var_dump(!$val1);
        echo "<br>";

        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>