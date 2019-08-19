<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monalisa</title>

    <base href="http://localhost/monalisa-v2/">
    <link rel="stylesheet" href="dist/css/Monalisa.min.css">
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

        <h3>Form</h3>
        <form class="Form">
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
                <label><input type="radio" name="sim_nao"> Sim</label>
                <label><input type="radio" name="sim_nao"> Não</label>
            </div>

            <div class="form-item">
                <label><input type="checkbox"> A</label>
                <label><input type="checkbox"> B</label>
                <label><input type="checkbox"> C</label>
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

            <button class="Button">Enviar</button>
        </form>

        <hr>

        <h3>Inputs</h3>
        <form class="Form">
            <div class="form-item">
                <input type="button" value="Button">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>

            <div class="form-item">
                <input type="file">
            </div>

            <div class="form-item">
                <input type="date" placeholder="date">
                <input type="datetime-local" placeholder="datetime-local">
                <input type="email" placeholder="email">
                <input type="hidden" placeholder="hidden">
                <input type="month" placeholder="month">
                <input type="number" placeholder="number">
                <input type="password" placeholder="password">
                <input type="search" placeholder="search">
                <input type="tel" placeholder="tel">
                <input type="text" placeholder="text">
                <input type="time" placeholder="time">
                <input type="url" placeholder="url">
                <input type="week" placeholder="week">
                <input type="color">
            </div>

            <div class="form-item">
                <input type="range">
            </div>
        </form>
        <hr>

        <h3>Search</h3>
        <form class="Form">
            <div class="form-item">
                <input type="search">
            </div>
        </form>
        <hr>

        <h3>Checkbox & radio</h3>
        <form class="Form">
            <div class="form-item">
                <label><input type="radio" name="sim_nao"> Sim</label>
                <label><input type="radio" name="sim_nao"> Não</label>
            </div>

            <div class="form-item">
                <label><input type="checkbox"> A</label>
                <label><input type="checkbox"> B</label>
                <label><input type="checkbox"> C</label>
            </div>
        </form>
        <hr>

        <h3>Textarea</h3>
        <div class="Form">
            <div class="form-item">
                <textarea></textarea>
            </div>
        </div>
        <hr>

        <h3>Select</h3>
        <form class="Form">
            <div class="Row _gutters">
                <div class="col">
                    <div class="form-item">
                        <select name="cores">
                            <option>Selecione</option>
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Cinza</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <select name="refri">
                            <option>Selecione</option>
                            <option>Coca-Cola</option>
                            <option>Guaraná</option>
                            <option>Fanta</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-item">
                        <select name="cores" multiple>
                            <option>Selecione</option>
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Cinza</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
        <hr>

        <h3>Width</h3>
        <h3>Form</h3>
        <form class="Form">
            <div class="form-item _w25">
                <div>
                    <input type="text" placeholder="_w25">
                </div>
            </div>

            <div class="form-item _w50">
                <div>
                    <input type="text" placeholder="_w50">
                </div>
            </div>
        </form>
        <hr>

        <h3>States</h3>
            <div class="Row _gutters">
                <div class="col">
                    <form class="Form">
                        <div class="form-item">
                            <input class="_error" type="text" placeholder="error">
                        </div>

                        <div class="form-item">
                            <input class="_success" type="text" placeholder="success">
                        </div>
                    </form>
                </div>
            </div>
        <hr>

        <h3>Disabled</h3>
            <form class="Form">
                <div class="form-item">
                    <input type="text" placeholder="disabled" disabled>
                    <input class="_disabled" type="text" placeholder="disabled" value="dd">
                </div>

                <div class="form-item">
                    <select disabled>
                        <option>Selecione</option>
                    </select>

                    <select class="_disabled">
                        <option>Selecione</option>
                    </select>
                </div>

                <div class="form-item">
                    <textarea disabled>disabled</textarea>
                    <textarea class="_disabled">disabled</textarea>
                </div>
            </form>
        <hr>

        <h3>Horizontal</h3>
        <form class="Form _horizontal">
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
        <hr>

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

            <div class="form-buttons">
                <div>
                    <button class="Button">Enviar</button>
                </div>
            </div>
        </form>

    </div>

</body>
</html>
