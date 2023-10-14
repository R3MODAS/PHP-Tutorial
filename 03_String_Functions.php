<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>String Functions in PHP</title>
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
        <h1 class="fw-bolder">String Functions in PHP</h1>

        <!-- *** <br> to provide newline as there is a html parser in our browser and it takes any text in the form of html *** -->

        <?php
        $name = "Remo is a Web Developer";
        echo "String -> '$name'";
        echo "<br>";
        echo "Length of the string -> " . strlen($name);
        echo "<br>";
        echo "Number of words -> " . str_word_count($name);
        echo "<br>";
        echo "Reverse of the string -> " . strrev($name);
        echo "<br>";
        echo "Position of the string is -> ".strpos($name, "is");
        echo "<br>";
        echo "Replaced string is -> ".str_replace("Remo", "Rimo", $name);
        echo "<br>";
        echo "Repeat the string -> ".str_repeat($name, 3);
        echo "<br>";
        echo "Trimmed string -> ".trim("    remo      ");
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>