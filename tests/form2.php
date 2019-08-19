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

        .Row {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Append & Prepend</h3>
        <form class="Form">
            <div class="form-group">
                <div>
                    <span class="prepend">R$</span>
                    <input type="text">
                    <span class="append">,00</span>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <span class="prepend">R$</span>
                    <input type="text">
                </div>
            </div>

            <div class="form-buttons">
                <div>
                    <button class="Button _w100-xs">Enviar</button>
                </div>
            </div>
        </form>
        <hr>

        <h3>Checkbox & Radio</h3>
        <form class="Form">
            <div class="form-item">
                <label for="nome">Nome</label>
                <div><input type="text" id="nome"></div>
            </div>

            <div class="form-item">
                <label><input type="radio" name="sim_nao"> Sim</label>
                <label><input type="radio" name="sim_nao"> Não</label>
            </div>

            <div class="form-item">
                <label><input type="checkbox"> A</label>
                <label><input type="checkbox"> B</label>
            </div>

            <div class="form-item">
                <label>Checkbox</label>
                <div>
                    <label><input type="checkbox"> Esse</label>
                    <label><input type="checkbox"> Outro</label>
                </div>
            </div>

            <div class="form-item">
                <label>Radio</label>
                <div>
                    <label><input type="radio"> Sim</label>
                    <label><input type="radio"> Não</label>
                </div>
            </div>

            <div class="form-buttons">
                <div>
                    <button class="Button">Enviar</button>
                </div>
            </div>
        </form>

        <h3>Horizontal</h3>
        <form class="Form _horizontal">
            <div class="form-item">
                <label for="nome">Nome</label>
                <div>
                    <input type="text" id="nome">
                </div>
            </div>

            <div class="form-item">
                <label>Checkbox</label>
                <div>
                    <label><input type="checkbox"> Esse</label>
                    <label><input type="checkbox"> Outro</label>
                    <label><input type="checkbox"> Também</label>
                </div>
            </div>

            <div class="form-item">
                <label>Radio</label>
                <div>
                    <label><input type="radio"> Sim</label>
                    <label><input type="radio"> Não</label>
                </div>
            </div>

            <div class="form-buttons">
                <div>
                    <button class="Button">Enviar</button>
                </div>
            </div>
        </form>

        <h3>Inline</h3>
        <form class="Form _inline">
            <div class="form-item">
                <label for="nome">Nome</label>
                <div>
                    <input type="text" id="nome">
                </div>
            </div>

            <div class="form-item">
                <label for="email">E-mail</label>
                <div>
                    <input type="email" id="email">
                </div>
            </div>

            <div class="form-item">
                <label for="senha">Senha</label>
                <div>
                    <input type="password" id="senha">
                </div>
            </div>

            <div class="form-item">
                <label>Checkbox</label>
                <div>
                    <label><input type="checkbox"> Esse</label>
                    <label><input type="checkbox"> Outro</label>
                </div>
            </div>

            <div class="form-buttons">
                <div>
                    <button class="Button _w100-xs">Enviar</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
