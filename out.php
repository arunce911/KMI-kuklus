<?php
$kg = $_GET['kg'];
$cm = $_GET['cm'];
$m = $cm / 100;
$kmi = $kg / ($m * $m);

if ($kmi <= 18.5) {
    $output = "Per mazas svoris";
} else if ($kmi > 18.5 and $kmi <= 24.9) {
    $output = "Normalus svoris";
} else if ($kmi > 25.0 and $kmi <= 29.9) {
    $output = "Virssvoris";
} else if ($kmi > 30.0 and $kmi <= 34.9) {
    $output = "1 laipsnio nutukimas";
} else if ($kmi > 35.0 and $kmi <= 39.9) {
    $output = "2 laipsnio nutukimas";
} else if ($kmi > 40.0) {
    $output = "3 laipsnio nutukimas";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI skaiciuokle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
    <form action="new.php" method="get">
        <div id="main" class="container">
            <div>
                <div>
                    <h1>
                        <?php echo "Jusu kuno mases indeksas yra " . (round($kmi, PHP_ROUND_HALF_UP)) . "  : ";
                        echo "$output"; ?>
                    </h1>
                </div>
                <div>
                    <a class="btn" href="new.php">Atgal</a>
                </div>
            </div>
        </div>
    </form>


</body>

</html>