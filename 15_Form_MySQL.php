<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Submit in MySQL</title>
    <style>
        h1 {
            font-size: 1.7rem;
        }

        .btn {
            width: 120px !important;
            height: 50px !important;
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
        <h1 class="fw-bolder">Form Submit in MySQL</h1>

        <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "form_db";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if (!$conn) {
                die("Sorry we failed to connect : " . mysqli_connect_error());
            } else {
                $insertData = "INSERT INTO `form` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', current_timestamp())";
                $result = mysqli_query($conn, $insertData);

                if ($result) {
                    echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Data has been sent Successfully !!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
                } else {
                    echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> There is something wrong with our Server ! Sorry for the Inconvinience !!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
                }
            }
        }

        ?>

        <form class="pt-4 pb-4" action="/php-tutorial/15_Form_MySQL.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingName" placeholder="name">
                <label for="floatingName">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating">
                <textarea name="message" class="form-control" id="floatingMessage" cols="50" rows="40" placeholder="Message"></textarea>
                <label for="floatingMessage">Message</label>
            </div>
            <div class="mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>