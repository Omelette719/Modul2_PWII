<!DOCTYPE html>
<html>

<body>
    <form method="post">
        Nilai : <input type="text" name="nilai" value="<?php if (isset($_POST['nilai'])) echo $_POST['nilai']; ?>"><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];

        if ($nilai >= 1000) {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        } else if ($nilai == 0) {
            $hasil = "Nol";
        } else if ($nilai >= 1 && $nilai <= 9) {
            $hasil = "Satuan";
        } else if ($nilai >= 11 && $nilai <= 19) {
            $hasil = "Belasan";
        } else if ($nilai == 10 || $nilai >= 20 && $nilai <= 99) {
            $hasil = "Puluhan";
        } else if ($nilai >= 100 && $nilai <= 999) {
            $hasil = "Ratusan";
        }

        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>

</html>