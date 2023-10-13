<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Datatypes in PHP</title>
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
            <a class="navbar-brand" href="#">Navbar</a>
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
        <h1>Datatypes in PHP</h1>

        <?php
        $name = "Remo"; // string
        $income = 400; // integer
        $deciNum = 50.50; // float
        $isHungry = true; // boolean
        $arr = array(10,20,"Remo",true); // array
        $blank = null;
        echo "String -> $name";
        echo "<br>";
        echo "Integer -> $income";
        echo "<br>";
        echo "Float -> $deciNum";
        echo "<br>";
        echo "Boolean -> ";
        echo var_dump($isHungry);
        echo "<br>";
        echo "Array ->";
        echo var_dump($arr);
        echo "<br>";
        echo "Accessing the Index of Array 0th position -> ";
        echo var_dump($arr[0]);
        echo "<br>";
        echo "Null -> ";
        echo var_dump($blank);
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>