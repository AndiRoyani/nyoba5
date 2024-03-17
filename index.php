<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-success">
    <div class="andi1 bg-white ">
    <?php 
    @$a= $_POST['a'];
    @$b= $_POST['b'];
    
    if ($a > $b) { 
        $operator= ">";
        echo "<h5 class= 'operator'>$operator</h5>";
        echo "<h1>$a Lebih Besar Dari  $b</h1>";
    }else if ($a < $b){
        $operator="<";
        echo "<h5 class= 'operator'>$operator</h5>";
        echo "<h1>$a Lebih Kecil Dari $b</h1>";
    } else if ($a == $b) {
        $operator="==";
        echo "<h5 class= 'operator'>$operator</h5>";
        echo "<h1>$a Sama Dengan $b</h1>";
    } else if ($a != $b) {
        $operator="!=";
        echo "<h5 class= 'operator'>$operator</h5>";
        echo "<h1>$a Tidak Sama Dari $b</h1>";
    }

    ?>
    <h3>Cek Perbandingan Angka</h3>
        <form method="POST" action="perbandingan.php">
            <input type="number" id="a" placeholder= "Angka Pertama"class = "andi4" name="a" required>
            <input type="number" id="b" placeholder= "Angka Kedua" class = "andi5" name="b" required>
            <input type="submit" name="submit" class = "andi2" value="Kirim">
        </form>
    </div>
</body>
</html>