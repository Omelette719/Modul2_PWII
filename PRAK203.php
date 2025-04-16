<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        Nilai : <input type="text" name="nilai" value="<?php if (isset($_POST['nilai'])) echo $_POST['nilai']; ?>"><br>
        Dari : <br>
        <input type="radio" name="from" value="celcius" <?php if (isset($_POST['from']) && $_POST['from'] == "celcius") echo "checked"; ?>>Celcius<br>
        <input type="radio" name="from" value="fahrenheit" <?php if (isset($_POST['from']) && $_POST['from'] == "fahrenheit") echo "checked"; ?>>Fahrenheit<br>
        <input type="radio" name="from" value="reamur" <?php if (isset($_POST['from']) && $_POST['from'] == "reamur") echo "checked"; ?>>Rheamur<br>
        <input type="radio" name="from" value="kelvin" <?php if (isset($_POST['from']) && $_POST['from'] == "kelvin") echo "checked"; ?>>Kelvin<br>
        Ke : <br>
        <input type="radio" name="to" value="celcius" <?php if (isset($_POST['to']) && $_POST['to'] == "celcius") echo "checked"; ?>>Celcius<br>
        <input type="radio" name="to" value="fahrenheit" <?php if (isset($_POST['to']) && $_POST['to'] == "fahrenheit") echo "checked"; ?>>Fahrenheit<br>
        <input type="radio" name="to" value="reamur" <?php if (isset($_POST['to']) && $_POST['to'] == "reamur") echo "checked"; ?>>Rheamur<br>
        <input type="radio" name="to" value="kelvin" <?php if (isset($_POST['to']) && $_POST['to'] == "kelvin") echo "checked"; ?>>Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $from = $_POST['from'];
        $to = $_POST['to'];

        function toCelcius($value, $from)
        {
            switch ($from) {
                case 'celcius':
                    return $value;
                case 'fahrenheit':
                    return ($value - 32) * 5 / 9;
                case 'reamur':
                    return $value * 5 / 4;
                case 'kelvin':
                    return $value - 273.15;
                default:
                    return 0;
            }
        }

        function fromCelcius($value, $to)
        {
            switch ($to) {
                case 'celcius':
                    return $value;
                case 'fahrenheit':
                    return ($value * 9 / 5) + 32;
                case 'reamur':
                    return $value * 4 / 5;
                case 'kelvin':
                    return $value + 273.15;
                default:
                    return 0;
            }
        }

        if (is_numeric($nilai)) {
            $celcius = toCelcius($nilai, $from);
            $hasil = fromCelcius($celcius, $to);

            $satuan = [
                'celcius' => '°C',
                'fahrenheit' => '°F',
                'reamur' => '°R',
                'kelvin' => 'K'
            ];
            echo "<h2>Hasil Konversi: " . round($hasil, 1) . " {$satuan[$to]}</h2>";
        }
    }
    ?>
</body>

</html>