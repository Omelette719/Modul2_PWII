<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Nama 1: <input type="text" name="nama1" value="<?php if(isset($_POST['nama1'])) echo $_POST['nama1']; ?>"><br>
        Nama 2: <input type="text" name="nama2" value="<?php if(isset($_POST['nama2'])) echo $_POST['nama2']; ?>"><br>
        Nama 3: <input type="text" name="nama3" value="<?php if(isset($_POST['nama3'])) echo $_POST['nama3']; ?>"><br>
        <button type="submit" name="urut">Urutkan</button>
    </form>

    <?php
        if (isset($_POST['urut'])) {
            $nama1 = $_POST['nama1'];
            $nama2 = $_POST['nama2'];
            $nama3 = $_POST['nama3'];

            $namaArray = [$nama1, $nama2, $nama3];

            sort($namaArray); 

            foreach ($namaArray as $nama) {
                echo "$nama<br>";
            }
        }
    ?>
</body>
</html>
