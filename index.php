<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APAANTUH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('bg.jpg');
            background-size: cover;
            text-align: center;

        }

        h1 {
            color: lightgreen;
            font-weight: bold;
            font-size: 50px;
            text-shadow: 2px 2px black;
            -webkit-text-stroke-width: 0.5px;
            -webkit-text-stroke-color: black;
        }

        p {
            color: lightgreen;
            font-weight: bold;
            font-size: 20px;
            text-shadow: 2px 2px black;
            -webkit-text-stroke-width: 0.5px;
            -webkit-text-stroke-color: black;

        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;

        }

        form {
            display: flex;
            align-items: center;
        }

        input[type="text"],
        button {
            padding: 5px 10px;
            margin: 0 5px;
            font-size: 16px;

        }
    </style>
</head>

<body>


    <div class="container">
        <h1>APAANTUH BY TITON</h1>

        <form id="calculator-form" action="" method="post">
            <div class="input-group mb-3">
                <input name="a" type="text" id="angkaInput1" class="form-control" placeholder="Masukkan angka"
                    aria-label="Username">
                <span class="input-group-text">+</span>
                <input name="b" type="text" id="angkaInput2" class="form-control" placeholder="Masukkan angka"
                    aria-label="Server">
                <button onclick="handleButtonClick()" class="btn btn-primary" name="samadengan" type="submit">=</button>

            </div>
        </form>

        <br>

        <p>*KETIKNYA HARUS 1 + 1</p>
        <p>*Kalo mau nyoba selain 1 + 1 juga bwoleeeh</p>

        <br>

        <?php
        $hasilnya = "";

        if (isset($_POST['samadengan'])) {
            // Validasi input apakah merupakan angka atau bukan
            if (is_numeric($_POST['a']) && is_numeric($_POST['b'])) {
                $hasil = $_POST['a'] + $_POST['b'];
                if ($hasil == 2) {
                    $hasilnya = "GAPAPA SIH GAPAPA TERSUNTUK SUNTUK";
                } else {
                    header("Location:meme.php");
                }
            } else {
                // Jika input bukan angka, atur pesan kesalahan
                header("Location:meme.php");
            }
        }

        if (!empty($hasilnya)) {
            echo "<p>Hasilnya : " . $hasilnya . "</p>";
        }

        if (isset($_SESSION['hasilnya'])) {
            $hasilnya2 = $_SESSION['hasilnya'];
            echo "<p>" . $hasilnya2 . "</p>";
            unset($_SESSION['hasilnya']);
        } else {
            $hasilnya = "";
        }
        ?>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>