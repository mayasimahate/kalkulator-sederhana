<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana | Desain Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f2f2f2;
        /* Abu-abu terang */
        color: #333;
        padding: 20px;
    }

    .calculator {
        max-width: 500px;
        margin: 50px auto;
        background: #ffffff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 30px;
    }

    .calculator h2 {
        text-align: center;
        margin-bottom: 20px;
        font-weight: 700;
        color: #6c6c6c;
        /* Abu-abu gelap */
    }

    .calculator .form-group {
        margin-bottom: 20px;
    }

    .calculator input {
        font-size: 1rem;
        height: 45px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        padding: 0 10px;
        box-shadow: none;
        background-color: #ffffff;
    }

    .calculator input:focus {
        border-color: #6c6c6c;
        /* Abu-abu gelap */
        outline: none;
        box-shadow: 0 0 5px rgba(108, 108, 108, 0.5);
        /* Bayangan abu-abu */
    }

    .calculator button {
        background-color: #6c6c6c;
        /* Abu-abu gelap */
        border: none;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        width: 100%;
        height: 45px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .calculator button:hover {
        background-color: #4f4f4f;
        /* Abu-abu lebih gelap */
    }

    .results {
        margin-top: 30px;
        padding: 20px;
        background: #e6e6e6;
        /* Abu-abu terang */
        border-radius: 10px;
    }

    .results label {
        font-weight: 600;
        color: #555;
        /* Abu-abu medium */
    }

    .results input {
        border: none;
        background: #fff;
        font-weight: 600;
        text-align: center;
        color: #333;
    }

    .results input[readonly] {
        background-color: #d9d9d9;
        /* Abu-abu terang */
    }
    </style>

</head>

<body>
    <div class="calculator">
        <h2>KALKULATOR SEDERHANA</h2>
        <form method="post" action="">
            <div class="form-group">
                <input type="number" name="bil1" placeholder="Masukkan bilangan pertama" required>
            </div>
            <div class="form-group">
                <input type="number" name="bil2" placeholder="Masukkan bilangan kedua" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Hitung</button>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            function penjumlahan($bil1, $bil2) {
                return $bil1 + $bil2;
            }
            function pengurangan($bil1, $bil2) {
                return $bil1 - $bil2;
            }
            function perkalian($bil1, $bil2) {
                return $bil1 * $bil2;
            }
            function pembagian($bil1, $bil2) {
                return $bil2 != 0 ? $bil1 / $bil2 : "Tidak dapat dibagi nol";
            }

            $bila1 = $_POST['bil1'];
            $bila2 = $_POST['bil2'];
        ?>
        <div class="results">
            <div class="row">
                <div class="col-md-6">
                    <label>Hasil Penjumlahan</label>
                    <input type="text" readonly value="<?php echo penjumlahan($bila1, $bila2); ?>">
                </div>
                <div class="col-md-6">
                    <label>Hasil Pengurangan</label>
                    <input type="text" readonly value="<?php echo pengurangan($bila1, $bila2); ?>">
                </div>
                <div class="col-md-6">
                    <label>Hasil Perkalian</label>
                    <input type="text" readonly value="<?php echo perkalian($bila1, $bila2); ?>">
                </div>
                <div class="col-md-6">
                    <label>Hasil Pembagian</label>
                    <input type="text" readonly value="<?php echo pembagian($bila1, $bila2); ?>">
                </div>
            </div>
        </div>

        <!-- Tombol Kembali ke Halaman Utama -->
        <div class="form-group" style="margin-top: 20px; text-align: center;">
            <a href="index.php" class="btn"
                style="text-decoration: none; padding: 10px 20px; background-color: #6c6c6c; color: white; border-radius: 5px;">Kembali
                ke Halaman Utama</a>
        </div>
        <?php } ?>
    </div>
</body>


</html>