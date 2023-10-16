<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update and Where Clause in MySQL</title>
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
        <h1 class="fw-bolder">Update and Where Clause in MySQL</h1>

        <?php
        //! Connecting the Database 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "form_db";

        //! Creating a connection with the Database 
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) echo "Server failed to connect " . mysqli_connect_error();
        else {
            echo "Connection is successful !!! <br>";
            $fetchData = "SELECT * FROM `form` WHERE `sno` > 2";
            $result = mysqli_query($conn, $fetchData);

            if ($result) {
                //! Fetching the Data from the Database
                // To Find the number of rows in the table
                $num = mysqli_num_rows($result);
                echo "$num records were found !!! <br>";

                // Usage of WHERE Clause to fetch data from the DB
                $no = 1;
                if ($num > 0) {
                    echo "--- Here are the Data --- <br>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $no . " | " . $row["name"] . " | " . $row["email"] . " | " . $row["message"] . " | " . $row["date"] . "<br>";
                        $no++;
                    }
                }
            }
        }



        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>