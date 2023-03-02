<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1b</title>
</head>
<body>
    <?php 
    $angka = "16"
    //menuliskan $angka = $angka * 5 lebih mudah dengan $angka *= 5
    //<p>Jika aku dikali 5, maka aku sekarang menjadi <?= <b>
    ?>
    <?php echo "Aku adalah angka <strong> $angka </strong>"; ?>
    <br>
    <?php 
    $angka = $angka * 5;
    ?>
    <?php echo "Jika aku dikali 5, maka aku sekarang menjadi <strong> $angka </strong>"; ?>
    <br>
    <?php 
    $angka = $angka / 2;
    ?>
    <?php echo "Jika aku dibagi 2, maka aku sekarang menjadi <strong> $angka </strong>"; ?>
    <br>
    <?php 
    $angka = $angka + 75;
    ?>
    <?php echo "Jika aku ditambah 75, maka aku sekarang menjadi <strong> $angka </strong>"; ?>
    <br>
    <?php  
    $angka = $angka - 20;
    ?>
    <?php echo "Jika aku dikurang 20, maka aku sekarang menjadi <strong> $angka </strong>"; ?>
</body>
</html>