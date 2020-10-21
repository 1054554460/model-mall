
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>登录</title>
</head>

<body>
    <!-- 头部导航栏部分  start -->
    <header>
        <div class="inner">
            <div class="logo">
               <img src="../img/tubiao.png" width="120px" height="44px" alt="GUM 模型官网">
            </div>
            <ul class="nav">
                <li><a href="../main/index.php">首页</a></li>
                <li><a href="../main/search.php">模型</a></li>
                
            </ul>
            <ul class="join">
                <li><a href="../main/login.php">登录</a>/<a href="../main/register.html">注册</a></li>
                <li><a href="../PHP/viewgwc.php">购物车</a></li>
            </ul>
        </div>
    </header>

    <!-- 登录页中间部分  start -->
    <div class="login-background" style="height: 682px;">
        <div class="reg-content-box" style="width: 1200px; min-height: 216px;">
            <div class="form-login-box" style="right: 0px;">
                <div class="login-regi-title">
                    <h2 class="regi-user">登录</h2>
                </div>
                <form action="../php/cheackLogin.php" method="post">
                    <div class="form-content">
                        <ul class="reister-user">
                            <li>
                                <input type="text" name="username" autocomplete="off" autofocus="" maxlength="11"
                                    placeholder="请输入您的账号" id="username" tabindex="1">
                                <i></i>
                            </li>
                            <li>
                                <input type="password" name="password" autocomplete="off" maxlength="20"
                                    placeholder="输入密码" id="password" tabindex="2">
                                <i></i>
                            </li>
                            <div class="jvli"></div>
                            <li>
                                <input type="submit" class="login-button" value="登录" id="goRegister">
                            </li>
                        </ul>
                    </div>
                    <div class="reading-protocol">
                        <label>
                            <input type="checkbox" name="agree" checked>
                            &nbsp;记住账号
                        </label>
                        <p><a href="">忘记密码</a></p>
                        <p><a href="../main/register.html">去注册</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>