<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Custom Theme">
    <!-- END META -->

    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        {{env('web_title')}}
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->

    <!-- END STYLESHEET-->
    <script type="text/javascript" src="js/jsencrypt.js">
    </script>
    <script type="text/javascript" src="js/ende.js">
    </script>
</head>
<body class="login-screen">


<!-- MODAL -->
<div  id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    忘记密码？
                </h4>
            </div>
            <form action="api/find">
            <div class="modal-body">
                <p >
                    输入您的账号，尝试联系管理员。
                </p>
                <input type="text" name="email" placeholder="账号" autocomplete="off" class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">
                    取消
                </button>
                <button class="btn btn-success" type="submit">
                    提交
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL -->

<!-- MODAL -->
<div  id="myModal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    警告
                </h4>
            </div>
            <form action="api/find">
                <div class="modal-body">
                    <h3 id="myc">
                        输入您的账号，尝试联系管理员。
                    </h3>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- END MODAL -->


<!-- BEGIN SECTION -->
<div class="container">
    <form class="form-signin" id="loginform" action="api/login">
        <h2 class="form-signin-heading">
            {{env('web_title')}}
        </h2>
        <!-- LOGIN WRAPPER  -->
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="账号" id="username" autofocus>
            <input type="password" class="form-control" placeholder="密码" id="password">
            <label class="checkbox">
                <input type="checkbox" value="remember-me" disabled checked="checked">
                自动登录
                <span class="pull-right">
              <a data-toggle="modal" href="#myModal">
                忘记密码?
              </a>
            </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="button" id="submit">
                登录
            </button>
            <p>
                全程双向非对称加密
            </p>

            <div class="registration">
                没有账号?
                <a id="apply" class="" href="#registration.html">
                    申请一个账号
                </a>
            </div>
        </div>
        <!-- END LOGIN WRAPPER -->

    </form>
</div>
<!-- END SECTION -->
<!-- BEGIN JS -->
<script src="/js/jquery.js" ></script><!-- BASIC JQUERY LIB. JS -->
<script src="/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
<!-- END JS -->
<script type="text/javascript">
    $(document).ready(function (){
        $('#apply').click(function () {
            $('#myc').text('请联系系统负责人');
            $('#myModal1').modal('show');
        });

        $('#submit').click(function (){
            $("#submit").attr('disabled',true);

            if ($('#username').val().length<5|$('#password').val().length<6){
                $('#myc').text('用户名大于五位。密码大于六位');
                $('#myModal1').modal('show');
                $("#submit").attr('disabled',false);
                return;
            }
            var enctool=new JSEncrypt();
            enctool.setPublicKey(publicKeyStr);
            var enuser=enctool.encryptLong($('#password').val());
            //window.location.replace("login/verify?username="+$('#username').val()+"&"+"password="+enuser)
            $.post('login/verify',{
                '_token' : '{{ csrf_token() }}'
                ,'username':   $('#username').val(),
                'password':   enuser
            },function (data) {
                if(data=='ok'){
                    window.location.replace("admin");
                }else if(data=='expire'){
                    $('#myc').text('密钥失效')
                    $('#myModal1').modal('show');
                }
                else {
                    $('#myc').text('账号或者密码错误')
                    $('#myModal1').modal('show');
                }
                $("#submit").attr('disabled',false);
            }).error(function (xhr,status,info){
                //只有失败才执行
                $('#myc').text('可能未知错误请刷新浏览器再尝试登录'+info)
                $('#myModal1').modal('show');
                $("#submit").attr('disabled',false);
            });;

        });
    });

</script>
</body>
</html>

