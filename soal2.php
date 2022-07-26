<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Input:
        <input type="array" name="input[]" id="">
        <br>
        <button type="submit" name="save">Simpan</button>
    </form>

    <?php
    if (isset($_POST['save'])) {
        $input = $_POST['input'];
        
        function tampil($input, $indeks = 1) {
            if ($indeks < $input) {
                tampil($input, $indeks+1);
            }
            echo "Output : " . $indeks;
        }
    }
    ?>
</body>
</html>