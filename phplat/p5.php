<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Tempat Liburan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            max-width: 300px;
            margin: 0 auto;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        form {
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #555;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cari Tempat Liburan</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="Provinsi">Provinsi:</label>
            <select id="Provinsi" name="Provinsi">
                <option value="Kalimantan Timur">Kalimantan </option>
                <option value="Sumatera Utara">Sumatera</option>
                <option value="Papua">Papua</option>
            </select>
            <button type="submit">Cari</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Provinsi"])) {
            $Provinsi = $_POST["Provinsi"];
            $tempat = "";
            $gambar = "";

            if ($Provinsi == "Kalimantan Timur") {
                $tempat = "Pantai Melawai";
                $gambar = "pantai melawai.jpg";
            } elseif ($Provinsi == "Sumatera Utara") {
                $tempat = "Air Terjun Sipiso Piso";
                $gambar = "terjun.jpg";
            } elseif ($Provinsi == "Papua") {
                $tempat = "Raja Ampat";
                $gambar = "ampat.jpg";
            } else {
                $tempat = "Tempat Liburan Tidak Ditemukan";
                $gambar = "not-found.jpg";
            }

            echo '<h2>Hasil Pencarian</h2>';
            echo '<p>Provinsi Lengkap: ' . ucfirst($Provinsi) . '</p>';
            echo '<p>Nama Tempat: ' . $tempat . '</p>';
            echo '<img src="' . $gambar . '" alt="' . $tempat . '">';
        }
        ?>
    </div>
</body>
</html>
