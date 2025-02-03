<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Kalkulator Sederhana</h2>
        <form method="post">
            <input type="number" name="angka1" required placeholder="Angka Pertama" step="any">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="angka2"required placeholder="Angka Kedua" step="any">
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $a = $_POST['angka1'];
            $b = $_POST['angka2'];
            $op = $_POST['operator'];
            $result = "Error!";

            if ($op == "+") $hasil = $a + $b;
            elseif ($op == "-") $hasil = $a - $b;
            elseif ($op == "*") $hasil = $a * $b;
            elseif ($op == "/" && $b != 0) $hasil = $a / $b;

            echo "<h3>Hasil: " . number_format($hasil, 2) . "<button onclick='resetForm()'>Reset</button></h3>";
        }
        ?>

        <script>
            function resetForm() {
                document.querySelector('form') . reset();
                document.querySelector('h3') .innerHTML = 'Hasil : ';
            }
        </script>
    </div>
</body>
</html>