<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Array in PHP</title>
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
        <h1 class="fw-bolder">Array in PHP</h1>

        <?php
        $arr = array(10, 20, 30);
        // echo "Array -> ";
        // echo var_dump($arr);
        // echo "<br>";
        // echo $arr[0] . "<br>";
        // echo $arr[1] . "<br>";
        // echo $arr[2] . "<br>";

        // Associative arrays
        $favColors = array(
            "Remo" => "black",
            "Rohan" => "red",
            "Harsh" => "yellow",
            100 => "random"
        );
        // echo var_dump($favColors) . "<br>";
        // echo $favColors["Remo"] . "<br>";
        // echo $favColors["Rohan"] . "<br>";
        // echo $favColors[100] . "<br>";

        foreach($favColors as $key => $value){
            echo "Favourite color of $key is $value <br>";
        }

        echo "<br>";

        foreach ($arr as $key => $value) {
            echo "Array item at index[$key] is $value <br>";
        }


        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>