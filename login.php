<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <title>欢迎登录</title>
</head>
<body>
    <div class="login-box">
        <h3>欢迎登录</h3>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="密码">
            </div>
            <a href="javascript:;" class="btn-block btn btn-success" id="loginBtn">登录</a>
        </form>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        (function () {
            var $loginBtn = $('#loginBtn'),
                $username = $('#username'),
                $password = $('#password');
            function postLogindata() {
                $.ajax({
                    url: 'Api/Login.php',
                    dataType: 'json',
                    data: {
                        username: $username.val(),
                        password: $password.val(),
                    },
                    method: 'POST',
                    success: function (res) {
                        if (res.success === '1') {
                            window.location.href = 'index.php';
                        } else {

                        }
                    }
                });
            }
            $loginBtn.on('click', postLogindata);
        })();
    </script>
</body>
</html>