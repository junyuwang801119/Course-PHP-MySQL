<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box {
            width: 600px;
            height: 1200px;
            background-color: #9fcdff;
        }

        #info {
            position: fixed;
            top: 0px;
            left: 50%;
        }
    </style>
</head>

<body>
    <div id="info">
        <a href="#aaa">aaa</a><br>
        <a href="#bbb">bbb</a><br>
        <a href="#ccc">ccc</a><br>
    </div>
    <div id="aaa" class="box">aaa</div>
    <div id="bbb" class="box" style="background-color: #71eac6">bbb</div>
    <div id="ccc" class="box" style="background-color: #e393ea">ccc</div>


    <script>
        window.addEventListener('hashchange', function(event) {
            console.log(location.hash);
        });
    </script>

</body>

</html>
