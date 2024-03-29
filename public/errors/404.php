<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>404 Page</title>
    <style type="text/css">
        body{
            font-family:Arial, Helvetica, sans-serif;
        }
        .wrap{
            width:1000px;
            margin:0 auto;
        }
        .logo{
            width:430px;
            position:absolute;
            top:25%;
            left:35%;
        }
        p a{
            color:#eee;
            font-size:13px;
            margin-left:30px;
            padding:5px;
            background:#FF3366;
            text-decoration:none;
            -webkit-border-radius:.3em;
            -moz-border-radius:.3em;
            border-radius:.3em;
        }
        p a:hover{
            color: #fff;
        }
        .footer{
            position:absolute;
            bottom:10px;
            right:10px;
            font-size:12px;
            color:#aaa;
        }
        .footer a{
            color:#666;
            text-decoration:none;
        }

    </style>
</head>
<body>
<div class="wrap">
    <div class="logo">
        <img src="/errors/images/404.png" alt="error image"  />
        <p><a href="<?=PATH;?>">Go back to Home page</a></p>
    </div>
</div>
<div class="footer">
    Design by - <a href="http://smarttsoft.com">STS</a>
</div>

</body>
</html>