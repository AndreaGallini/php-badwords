<?php
$testo = $_POST['testo'];
$parolaCensurata = $_POST['parolaCensurata'];
echo $testo;
echo $parolaCensurata;
$lunghezzatesto = strlen($testo);
$testoCensurato = str_replace($parolaCensurata, "***", $testo);
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
    <h2>Il tuo testo :</h2>
    <p><?php echo $testo?></p>
    <h2>Lunghezza del testo <?php echo $lunghezzatesto ?> caratteri</h2>
    <h2>Parola censurata : <?php echo $parolaCensurata?></h2>
    <h2>Testo censurato:</h2>
    <p><?php echo $testoCensurato?></p>
</body>
</html>