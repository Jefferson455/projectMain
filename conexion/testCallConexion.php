<?php
    include('test.php');
    $query = "SELECT * FROM frases";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container--table">
        <div class="table--title">FRASE</div>
        <?php $frase = mysqli_query($conexion, $query);
        while ($row=mysqli_fetch_assoc($frase)){?>
        <div class="table--item">-<?php echo $row["name"];?></div>
        <?php } mysqli_free_result($frase )?>
    </div>
</body>
</html>