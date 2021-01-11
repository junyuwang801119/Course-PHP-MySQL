<?php
$accounts = [
    'race' => [
        'pwd' => '1234',
        'name' => '小新',
    ],
    'Toby' => [
        'pwd' => '4567',
        'name' => '小名',
    ],

];

// 有沒有送出表單的 account 欄位資料
if (isset($_POST['account'])) {
    echo 1; //echo在這為除錯用
    // 輸入的帳號若有對應該到陣列
    if (!empty($accounts[$_POST['account']])) {
        echo 2;
        $a = $accounts[$_POST['account']];
        // 輸入的密碼如果和對應的陣列裡的密碼相同
        if ($_POST['password'] == $a['pwd']) {
            echo 3;
            $_SESSION['user'] = [
                'account' => $_POST['account'],
                'name' => $a['name']
            ];
        }
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>login</title>
</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION['user'])) : ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-info" role="alert">
                        <?= $_SESSION['user']['name'] ?> 您好<br>
                        <a href="23.logout.php">登出</a>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="row">
                <div class="col-lg-6">
                    <form method="post">
                        <div class="form-group">
                            <label for="account">Account</label>
                            <input type="text" class="form-control" id="account" name="account">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
