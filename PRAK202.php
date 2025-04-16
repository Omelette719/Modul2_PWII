<!DOCTYPE html>
<html>
    <style>
        .error {color: #FF0000;}
    </style>

    <body>
        <?php
            $namaErr = $nimErr = $genderErr = "";
            $nama = $nim = $gender = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["nama"])) {
                    $namaErr = "nama tidak boleh kosong";
                } else {
                    $nama = test_input($_POST["nama"]);
                }
                
                if (empty($_POST["nim"])) {
                    $nimErr = "nim tidak boleh kosong";
                } else {
                    $nim = test_input($_POST["nim"]);
                }
            
                if (empty($_POST["gender"])) {
                    $genderErr = "jenis kelamin tidak boleh kosong";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><span class="error">* <?php echo $namaErr;?></span><br>
            Nim: <input type="text" name="nim" value="<?php echo $nim; ?>"><span class="error">* <?php echo $nimErr;?></span><br>
            Jenis Kelamin:<span class="error">* <?php echo $genderErr;?></span><br>
            <input type="radio" name="gender" value="Laki-laki" <?php if ($gender == "Laki-laki") echo "checked"; ?>>Laki-laki<br>
            <input type="radio" name="gender" value="Perempuan" <?php if ($gender == "Perempuan") echo "checked"; ?>>Perempuan<br>

            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && $namaErr == "" && $nimErr == "" && $genderErr == "") {
                echo "<h2>Output:</h2>";
                echo $nama . "<br>";
                echo $nim . "<br>";
                echo $gender . "<br>";
            }
        ?>
    </body>
</html>
