<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    <pre><?php
                            print_r($_POST);
                            ?>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <form method="POST">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tick" value="ticked">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="swim" name="sport[]">
                            <label class="form-check-label" for="inlineCheckbox1">swim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="jugging" name="sport[]">
                            <label class="form-check-label" for="inlineCheckbox2">jugging</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="climbing" name="sport[]">
                            <label class="form-check-label" for="inlineCheckbox3">climbing</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="aaa">
                            <label class="form-check-label" for="inlineRadio1">aaa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="bbb">
                            <label class="form-check-label" for="inlineRadio2">bbb</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="ccc">
                            <label class="form-check-label" for="inlineRadio3">ccc</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        function checkbox() {
            document.querySelectorAll('[name=sport\\[\\]]').forEach((el) => {
                console.log(el.value, el.checked);
            })
        }
    </script>
</body>

</html>
