<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>2473021-Febrianus Leona Putra</title>
    <style>
        body {
            margin: 20px;
        }
        .login-box {
            border: 1px solid #777;
            width: 450px;
        }
        .header-login {
            background-color: #000099;
            color: white;
            font-size: 42px;
            text-align: center;
            padding: 10px 0;
            font-weight: normal;
        }
        .form-table {
            width: 100%;
            padding: 15px 10px;
        }
        .form-table td {
            padding: 5px;
            font-size: 16px;
        }
        .input-text {
            width: 90%;
            padding: 3px;
        }
        .btn-login {
            padding: 3px 15px;
            cursor: pointer;
        }
        .footer-text {
            border-top: 1px solid #ccc;
            padding: 10px;
            font-size: 14px;
            color: #333;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <div class="header-login">Login</div>
        
        <form action="prosesLogin.php" method="POST">
            <table class="form-table" border="0">
                <tr>
                    <td width="25%">Username</td>
                    <td><input type="text" name="txtusername" class="input-text" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txtpassword" class="input-text" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnlogin" value="login" class="btn-login"></td>
                </tr>
            </table>
        </form>
        
        <div class="footer-text">
            @UKM2014<br>
            Febrianus Leona Putra-2473021&copy;
        </div>
    </div>

</body>
</html>