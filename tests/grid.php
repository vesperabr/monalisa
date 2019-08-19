<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monalisa</title>

    <link rel="stylesheet" href="../dist/css/Monalisa.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
            padding: 40px;
            background: #eaeaea;
        }

        .container {
            padding: 40px;
            background: #fff;
        }

        .Row .col {
            padding: 5px;
            background: #eaeaea;
            text-align: center;
        }

        .Row .col .col {
            background: #ccc;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Row auto</h3>
        <div class="Row _mb40">
            <div class="col">auto</div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <h3>Row auto with inner row auto</h3>
        <div class="Row _mb40">
            <div class="col">
                <div class="Row">
                    <div class="col">auto</div>
                    <div class="col">auto</div>
                </div>
            </div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <h3>Row auto with inner row</h3>
        <div class="Row _mb40">
            <div class="col">
                <div class="Row">
                    <div class="col _col-3">col 3</div>
                    <div class="col _col-9">col 9</div>
                </div>
            </div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <hr>

        <h3>Row</h3>
        <div class="Row _mb40">
            <div class="col _col-6">col 6</div>
            <div class="col _col-3">col 3</div>
            <div class="col _col-3">col 3</div>
        </div>

        <h3>Row with inner row</h3>
        <div class="Row _mb40">
            <div class="col _col-6">
                <div class="Row">
                    <div class="col _col-9">9</div>
                    <div class="col _col-3">3</div>
                </div>
            </div>
            <div class="col _col-3">col 3</div>
            <div class="col _col-3">col 3</div>
        </div>

        <h3>Row with inner row auto</h3>
        <div class="Row _mb40">
            <div class="col _col-6">
                <div class="Row">
                    <div class="col">auto</div>
                    <div class="col">auto</div>
                </div>
            </div>
            <div class="col _col-3">col 3</div>
            <div class="col _col-3">col 3</div>
        </div>

        <hr>

        <h3>Row gutters auto</h3>
        <div class="Row _gutters _mb40">
            <div class="col">auto</div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <h3>Row gutters auto with inner row auto</h3>
        <div class="Row _gutters _mb40">
            <div class="col">
                <div class="Row">
                    <div class="col">auto</div>
                    <div class="col">auto</div>
                </div>
            </div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <h3>Row gutters auto with inner row</h3>
        <div class="Row _gutters _mb40">
            <div class="col">
                <div class="Row">
                    <div class="col _col-3">col 3</div>
                    <div class="col _col-9">col 9</div>
                </div>
            </div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <h3>Row gutters auto with inner row gutters auto</h3>
        <div class="Row _gutters _mb40">
            <div class="col">
                <div class="Row _gutters">
                    <div class="col">auto</div>
                    <div class="col">auto</div>
                </div>
            </div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <h3>Row gutters auto with inner row gutters</h3>
        <div class="Row _gutters _mb40">
            <div class="col">
                <div class="Row _gutters">
                    <div class="col _col-3">col 3</div>
                    <div class="col _col-9">col 9</div>
                </div>
            </div>
            <div class="col">auto</div>
            <div class="col">auto</div>
        </div>

        <hr>

        <h3>Row auto offset</h3>
        <div class="Row _mb40">
            <div class="col">auto</div>
            <div class="col _offset-6">auto</div>
        </div>

        <h3>Row offset</h3>
        <div class="Row _mb40">
            <div class="col _col-4">col 4</div>
            <div class="col _col-3 _offset-2">col 3</div>
        </div>

        <h3>Row auto with row offset</h3>
        <div class="Row _mb40">
            <div class="col">auto</div>
            <div class="col">
                <div class="Row">
                    <div class="col">auto</div>
                    <div class="col _offset-6">auto</div>
                </div>
            </div>
        </div>

        <h3>Row auto gutters with row auto offset</h3>
        <div class="Row _gutters _mb40">
            <div class="col">auto</div>
            <div class="col">
                <div class="Row">
                    <div class="col">auto</div>
                    <div class="col _offset-6">auto</div>
                </div>
            </div>
        </div>

        <h3>Row gutters with row offset</h3>
        <div class="Row _gutters _mb40">
            <div class="col">auto</div>
            <div class="col">
                <div class="Row _gutters">
                    <div class="col _col-3">col 3</div>
                    <div class="col _col-3 _offset-3">col 3</div>
                    <div class="col _col-3">col 3</div>
                </div>
            </div>
        </div>

        <hr>

        <h3>Row custom gutters</h3>
        <div class="Row _gutters-x _mb40">
            <div class="col _col-3">col 3</div>
            <div class="col _col-3">col 3</div>
            <div class="col _col-6">col 6</div>
        </div>

        <h3>Row gutters and custom gutters</h3>
        <div class="Row _gutters _mb40">
            <div class="col _col-2">col 3</div>
            <div class="col _col-2">col 3</div>
            <div class="col _col-8">
                <div class="Row _gutters-x">
                    <div class="col">auto</div>
                    <div class="col">auto</div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
