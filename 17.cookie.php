<?php
setcookie('mycookie', 2); //activate cookie

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>

<body>
    <?php
    echo $_COOKIE['mycookie'];
    ?>
</body>

</html>
