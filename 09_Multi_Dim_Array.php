<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Multi Dimensional Array in PHP</title>
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
        <h1 class="fw-bolder">Multi Dimensional Array in PHP</h1>

        <?php
        // 2 Dimensional Array
        $multiDim = array(
            array(2, 5, 7, 8),
            array(1, 2, 3, 1),
        );

        // 3 Dimensional Array
        $threeDim = array(array(
            array(2, 5, 7, 8),
            array(1, 2, 3, 1),
            array(4, 5, 0, 1),
        ));

        for ($i = 0; $i < count($multiDim); $i++) {
            for ($j = 0; $j < count($multiDim[$i]); $j++) {
                echo $multiDim[$i][$j];
                echo " ";
            }
            echo "<br>";
        }
        echo "<br>";

        for ($i = 0; $i < count($threeDim); $i++) {
            for ($j = 0; $j < count($threeDim[$i]); $j++) {
                for ($k = 0; $k < count($threeDim[$i][$j]); $k++) {
                    echo $threeDim[$i][$j][$k];
                    echo " ";
                }
                echo "<br>";
            }   
        }

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>