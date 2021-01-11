<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array-shuffle</title>
</head>

<body>
    <?php
    $ar = [];

    for ($i = 1; $i <= 49; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            if ($j == 1) :
                $j = 'H';
            else:
                if(j==2):
                $j = 'S';
                else:
                    if(j==3):
                        $j = 'C';
                    else:                 
                        $j = 'B';

                    endif;
                        
        }
                $ar[] = $i+$j;    
    }

    shuffle($ar);
    print_r($ar);
    ?>


</body>

</html>
