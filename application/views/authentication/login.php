<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SMS | Log in</title>



    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <style type="text/css">
        html,body{height:100%; width:100%}

        body{background-image:url('<?php echo base_url()?>assets/template/dist/img/bg.jpeg'); background-position:center; background-size:cover; font-family: 'Montserrat', sans-serif; height:100%;


    }

    .login-form{margin-top:180px; background:rgba(255, 255, 255,0.8); padding-bottom:20px; box-shadow:0 1px 3px rgba(0,0,0,.2); border-radius:4px}

    .input-group-addon{border-radius:3px 0 0 3px; background:#337ab7; border:none; color:#fff}

    .form-control{border-radius:0 3px 3px 0; border:none; color:black; outline:none !important; box-shadow:none !important; background:#ffffff; border: 1px solid #3c8dbc;
    }

    .input-group{margin-bottom:15px}

    .btn{border-radius:3px; border:none; padding:8px; outline:none !important; box-shadow:0 1px 3px rgba(0,0,0,.2); width: 80px;}

    .logo-g{    height: 95px;
        width: 107px;
        border: solid 5px #3c8dbc;
        margin: 15px 0;
        padding: 0;
        display: inline-block;
        color: #3c8dbc;
        font-size: 60px;
        line-height: 70px;
        border-radius: 50%;
        padding-top: 12px;}

        @media(max-width:728px){

            .login-form{margin-top:100px}
        }
    </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
            </div><!-- /.login-logo -->
            <div class="login-box-body">
               <form method="post" action="<?php echo base_url('authentication/auth/login'); ?>" role="login">
                  <?php
                      //menampilkan error menggunakan alert javascript
                  if(isset($error)){
                    echo '<script>
                    alert("'.$error.'");
                    </script>';
                }
                ?>
                <div class="col-md-4 col-md-offset-4 login-form text-center" style="padding-left: 50px; padding-right: 50px;">
                    <p class="logo-g"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" placeholder="username" type="text" name="username" autocomplete="off" required /> 
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" placeholder="Password" type="password" autocomplete="off" name="password" required />
                    </div>
                    <button type="submit" name="submit" value="login" class="btn btn-primary">Log In</button>
                </form>
            </div>
        </form>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url()?>assets/template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url()?>assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/template/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
    });
</script>
</body>
</html>