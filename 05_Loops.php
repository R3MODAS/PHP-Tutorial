<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Loops in PHP</title>
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
        <h1 class="fw-bolder">Loops in PHP</h1>

        <?php
        // if else condition
        $a = 65;
        $b = 9;
        if ($a > $b) echo "A is greater than B";
        else echo "A is not greater than B";

        echo "<br>";

        // if else elseif ladder
        $age = 14;
        if ($age < 15) echo "You are not yet 18 so keep going";
        elseif ($age >= 18) echo "You are 18+ now you can drive";
        else echo "You cannot drive as you are not yet 18";

        echo "<br>";

        // Program
        $driverage = "26";
        if ($driverage >= 25 && $driverage <= 65) echo "You can drive safely";
        else echo "You cannot drive";

        echo "<br>";

        // Switch case
        $age = 18;
        switch ($age) {
            case 10:
                echo "You are still small so you can't drive yet";
                break;
            case 15:
                echo "You are close but still you cannot drive yet";
                break;
            case 18:
                echo "You are now 18 so you can drive";
                break;
            default:
                echo "Invalid age";
                break;
        }

        echo "<br>";

        // While Loop
        $count = 0;
        echo "Count : " . $count . "<br>";
        while ($count < 10) {
            $count++;
        }
        echo "Count : " . $count . "<br>";

        // For Loop
        for ($i = 0; $i < 10; $i++) {
            echo "The number is $i in for loop<br>";
        }

        // do-while Loop
        $a = 0;
        do {
            echo "The number is $a in do-while loop<br>";
            $a++;
        } while ($a < 10);

        // foreach loop
        $arr = array("Remo", "Harsh", "Shubham", "Harshit");
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . "<br>";
        }

        foreach ($arr as $value) {
            echo $value . "<br>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>