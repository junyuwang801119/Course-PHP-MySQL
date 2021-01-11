<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for loop2</title>
    <style>
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 0; $i <= 255; $i += 17) : ?>
            <tr>
                <?php for ($j = 0; $j <= 255; $j += 17) : ?>
                    <td style="background-color: #<?= sprintf("%'.06X", $i * 256 + $j) ?>"></td>
                <?php endfor ?>
            </tr>
            <tr>
                <?php for ($j = 0; $j <= 255; $j += 17) : ?>
                    <td style="background-color: #<?= sprintf("%'.02X%'.02X%'.02X", $i, 00, $j) ?>"></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

    <script>
        const table = document.querySelector('table');
        table.addEventListener('click', (event) => {
            const t = event.target; //target指的是點到的最裡面的元素
            console.log(t.style.backgroundColor)
        })
    </script>

</body>

</html>
