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
        <input type="number" name="number" id="">
        <br>
        <button type="submit" name="save">Simpan</button>
    </form>
    <br>
    <?php
    if (isset($_POST['save'])) {
        $number = $_POST['number'];
    ?>
        <form action="" method="post">
        
        <input type="number" name="binary[]" id="">
        </form>

    <?php
    }
    ?>

</body>
</html>