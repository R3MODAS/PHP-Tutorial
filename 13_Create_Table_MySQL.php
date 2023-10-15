<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Creating Table in MySQL</title>
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
        <h1 class="fw-bolder">Creating Table in MySQL</h1>

        <?php

        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "remo";

        // Creating a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect : " . mysqli_connect_error());
        }
        echo "Connection was successful <br>";

        // Creating Table
        $table = "CREATE TABLE `employees` (`sno` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(20) NOT NULL, `role` VARCHAR(20) NOT NULL, PRIMARY KEY(`sno`))";
        $result = mysqli_query($conn, $table);

        // Checking the Table query
        if ($result) echo "Table has been created Successfully !!! <br>";
        else echo mysqli_error($conn) . "<br>";

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>