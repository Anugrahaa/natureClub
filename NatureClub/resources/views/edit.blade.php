<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
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
                /*text-align: center;*/
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
           <!--  <div class="content">
                <div class="title">Laravel 5 edittt</div>
            </div> -->
            <form method="post">
                <table>
                    <tr>
                        <td>Pictureg</td>
                        <td><input type="file" name="picture"></td>
                    </tr>   
                    <tr>
                        <td>Common name</td>
                        <td><input type="text" name="commonName"></td>
                    </tr>
                    <tr>
                        <td>Scientific name</td>
                        <td><input type="text" name="scientificName"></td>
                    </tr>
                    <tr>
                        <td>Local Status</td>
                        <td><input type="text" name="localstatus"></td>
                    </tr>
                    <tr>
                        <td>General Description</td>
                        <td><input type="text" name="generaldesc"></td>
                    </tr>
                    <tr>
                        <td>diet</td>
                        <td><input type="text" name="diet"></td>
                    </tr>
                    <tr>
                        <td>Local Breeding</td>
                        <td><input type="text" name="localBreeding"></td>
                    </tr>
                    <tr>
                        <td>Trivia</td>
                        <td><input type="text" name="trivia"></td>
                    </tr>
                </table>    
            </form>
        </div>
    </body>
</html>
