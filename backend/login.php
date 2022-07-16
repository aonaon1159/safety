<?php 
session_start();
if (isset($_SESSION['username'])) {
    header("location:index");
}
?>
<!DOCTYPE html>

<head>
    <title>Backend Safety In Thai</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet'
        type='text/css'>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="../img/logo/logo-1.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<style>
.input_password {
    position: relative;
}

.field-icon {
    right: 0;
    top: 40%;
    position: absolute;
}
</style>

<body class="app sidebar-mini">
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Safety In Thai - จัดการหลังบ้าน</h1>
        </div>
        <div class="login-box">
            <!-- check_login -->
            <form class="login-form" action="check_login" method="post">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" type="text" placeholder="username" name="UName" id="UName" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <div class="input_password">
                        <input class="form-control" type="password" id="password-field" name="Password"
                            placeholder="Password">
                        <span toggle="#password-field" class="mr-2 fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>
                                <input type="checkbox"><span class="label-text">Stay Signed in</span>
                            </label>
                        </div>
                        <p class="semibold-text mb-2"><a data-toggle="modal" href="#forget" data-toggle="flip">Forgot
                                Password ?</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button name="Login" type="submit" onclick="check();" class="btn btn-primary btn-block"><i
                            class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>
            </form>
            <form class="forget-form" action="index.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
                <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i>
                            Back to Login</a></p>
                </div>
            </form>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="forget" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ลืมรหัสผ่าน</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>กรุณาติดต่อผู้ดูแลระบบ</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>

    <!-- <script type="text/javascript" src="../js/jquery-ui.min.js"></script> -->

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    function check() {
        var elem = document.getElementById('UName').value;
        var elem2 = document.getElementById('password-field').value;

        if (!elem.match(/^([a-z0-9 @.])+$/i) || !elem2.match(/^([a-z0-9])+$/i)) {
            alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
            document.getElementById('UName').value = "";
            document.getElementById('password-field').value = "";
        }
    }
    </script>

</body>

</html>