<!DOCTYPE html>
<html>
    <head>
        <title>Acceso restringido.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }.back{
              color:gray;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src="http://download.seaicons.com/download/i87099/graphicloads/colorful-long-shadow/graphicloads-colorful-long-shadow-lock.ico" alt="" />
                <div class="title">Acceso no autorizado para tu tipo de usuario <br/>:( </div>
            </div>
            <p>
              <a class="back"href="<?php echo e(route('front.index')); ?>">Ir a página principal</a>
            </p>

        </div>
    </body>
</html>
