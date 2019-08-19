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

        .group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h3>All</h3>
        <div class="group">
            <button class="Button">Button</button>
            <button class="Button _secondary">Secondary</button>
            <button class="Button _outline">Outline</button>
            <button class="Button _rounded">Rounded</button>
            <button class="Button _upper">Upper</button>
        </div>

        <h3>Primary</h3>
        <div class="group">
            <a href="#" class="Button">Button</a>
            <button class="Button">Button</button>
            <input type="submit" class="Button">
            <input type="reset" class="Button">
        </div>

        <h3>Secondary</h3>
        <div class="group">
            <a href="#" class="Button _secondary">Button</a>
            <button class="Button _secondary">Button</button>
            <button class="Button _secondary _outline">Button</button>
            <button class="Button _secondary" disabled>Disabled</button>
            <input type="submit" class="Button _secondary">
            <input type="reset" class="Button _secondary">
        </div>

        <h3>Outline</h3>
        <div class="group">
            <a href="#" class="Button _outline">Button</a>
            <button class="Button _outline">Button</button>
            <input type="submit" class="Button _outline">
            <input type="reset" class="Button _outline">
        </div>

        <h3>Rounded</h3>
        <div class="group">
            <a href="#" class="Button _rounded">Button</a>
            <button class="Button _rounded">Button</button>
            <input type="submit" class="Button _rounded">
            <input type="reset" class="Button _rounded">
        </div>

        <h3>Disabled</h3>
        <div class="group">
            <a href="#" class="Button _disabled">Button</a>
            <button class="Button _disabled">Button</button>
            <button class="Button" disabled>Button</button>
            <button class="Button _secondary _outline" disabled>Outline</button>
            <input type="submit" class="Button" disabled>
            <input type="submit" class="Button _disabled">
            <input type="reset" class="Button _disabled">
        </div>

    </div>

</body>
</html>
