<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="bazy.php" method="post">
</form>

    <?php
    $server="localhost";
    $baza="baza123";
    $pass="";
    $user="root";
    $connection = mysqli_connect($server,$user,$pass,$baza);
    if($connection)
    {
        echo "Nie połączono z bazą";
    }
    else
    {
        echo "Połączono z bazą";
    }
    ?>
</body>
</html>
