<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background-image: url('https://awesomewallpapers.files.wordpress.com/2016/04/1920x1080-20.jpg');
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
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
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Practice 2</div>
                <h2>DOWNLOAD VIDEOS FROM YOUTUBE</h2>
                <form method="post" action="/pasteUrl">
                {{ csrf_field() }}

                <label>Link: <input type="text" placeholder="Paste link here" name="link"></label>
                <input type="submit" value="DOWNLOAD">
               
                </form>
            </div>
        </div>
    </body>
</html>
