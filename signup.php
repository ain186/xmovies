<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script src="./js/myjs.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>

<body>
    <?php
    include("modules/backtotop.php");
    include("modules/header.php");
    ?>
    <div id="main-content">
        <div class="container">
            <div class="form-area">
                <div class="login">
                    <div class="login-title">
                        <h3>Đăng ký</h3>
                    </div>
                    <div class="inner">
                        <div class="form-group">
                            <input type="text" value="" placeholder="Điện thoại" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="" placeholder="Mật khẩu" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="" placeholder="Nhập lại mật khẩu" class="form-control">
                        </div>
                        <button class="btn btn-login">Đăng kí</button>
                        <div class="text-area">
                            <p>Hoặc</p>
                        </div>
                        <div class="bt-group">
                            <button class="btn btn-facebook">Facebook</button>
                            <button class="btn btn-google">Google</button>
                        </div>
                        <div class="text-area">
                            Đã có tài khoản? <a href="#">Đăng nhập ngay.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("modules/footer.php");
    ?>
</body>

</html>