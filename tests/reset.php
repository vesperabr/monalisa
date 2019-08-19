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
            padding-bottom: 40px;
            background: #eaeaea;
        }

        .d-section,
        .d-section * {
            box-sizing: border-box;
        }

        .d-section {
            position: relative;
            display: flex;
        }

        .d-section::before {
            position: absolute;
            content: '';
            top: 0;
            left: 35%;
            bottom: 0;
            display: none;
            width: 1px;
            margin-left: 40px;
            background: #00FDFF;
            z-index: 1;
        }

        .d-content {
            width: 35%;
            padding: 40px 40px 0 40px;
        }

        .d-tag {
            position: relative;
            margin-top: 0;
            margin-bottom: 5px;
            font-family: 'Roboto', sans-serif;
            font-size: 22px;
            font-weight: bold;
            line-height: 1;
        }

        .d-text {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
        }

        .d-example {
            position: relative;
            width: 65%;
            padding: 40px;
            background: #fff;
        }

        .d-example::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
            display: none;
            height: 1px;
            background: #00FDFF;
        }

        .d-example::after {
            content: '';
            position: absolute;
            bottom: 40px;
            left: 0;
            right: 0;
            display: none;
            height: 1px;
            background: #00FDFF;
        }

        .with-grid .d-section::before,
        .with-grid .d-example::before,
        .with-grid .d-example::after {
            display: block;
        }
    </style>
</head>

<body class="">

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">h1, h2, h3, h4, h5, h6</div>
        </div>
        <div class="d-example">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">p</div>
        </div>
        <div class="d-example">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis erat tincidunt, tincidunt urna eget, aliquet sem. Suspendisse laoreet lacus ultricies erat mattis varius. Nullam eleifend, eros non mollis malesuada, mi ex placerat neque, a commodo purus ligula et nulla. Vestibulum quam ante, sollicitudin iaculis aliquam non, dapibus vel dui. Morbi in libero id eros vulputate viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam convallis ornare mauris id facilisis. Maecenas ullamcorper euismod malesuada. Nam non lacus in elit sollicitudin dapibus quis eget metus. Nullam gravida scelerisque sollicitudin. Pellentesque quis commodo erat. Nulla facilisi. Integer ultricies nulla sed dui aliquam ornare a vel velit. Ut luctus malesuada finibus. Donec dapibus faucibus libero, et mattis lorem pharetra ut. Nunc dignissim ante quam, a rhoncus enim pretium a.</p>
            <p>Cras sit amet enim at ex egestas consectetur vel vel magna. Nullam viverra viverra sem, id congue elit molestie et. Fusce placerat ligula quis accumsan dignissim. Aliquam eu fringilla turpis. Morbi posuere, lorem eu lobortis elementum, tellus leo hendrerit dui, vel feugiat tortor turpis id dolor. Nulla facilisi. Quisque ante nisi, ultricies et fringilla et, efficitur eu diam. Maecenas leo felis, varius nec tristique sed, aliquet id mauris. Vivamus tortor velit, pellentesque quis imperdiet id, tempus eget dui. Vivamus nec fringilla dui. Integer tincidunt quis turpis id lacinia.</p>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">abbr</div>
        </div>
        <div class="d-example">
            O <abbr title="Cascate Style Sheet">CSS</abbr> permite que você crie bonitas páginas web.
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">b</div>
        </div>
        <div class="d-example">
            Defines <b>bold</b> text.
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">address</div>
        </div>
        <div class="d-example">
            <address>
                Rua das Árvores, 100<br>
                São Paulo - SP
            </address>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">blockquote</div>
        </div>
        <div class="d-example">
            <blockquote>
                For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
            </blockquote>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">q</div>
        </div>
        <div class="d-example">
            WWF's goal is to: <q>Build a future where people live in harmony with nature.</q> We hope they succeed.
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">cite</div>
        </div>
        <div class="d-example">
            <cite>Ser ou não ser.</cite>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">code</div>
        </div>
        <div class="d-example">
            Para copiar aperte <code>CTRL + C</code>!
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">del</div>
        </div>
        <div class="d-example">
            Manda um <del>nudes</del> recado.
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">dfn</div>
        </div>
        <div class="d-example">
            <dfn>HTML</dfn> is the standard markup language for creating web pages.
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">em</div>
        </div>
        <div class="d-example">
            Defines <em>emphasized</em> text
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">i</div>
        </div>
        <div class="d-example">
            Defines a part of text in an <i>alternate voice or mood</i>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">ins</div>
        </div>
        <div class="d-example">
            <ins>Defines a text that has been inserted into a document</ins>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">kbd</div>
        </div>
        <div class="d-example">
            <kbd>COMMAND</kbd>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">mark</div>
        </div>
        <div class="d-example">
            Defines <mark>marked/highlighted</mark> text
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">pre</div>
        </div>
        <div class="d-example">
            <pre>$foo = "foo";
echo $foo;</pre>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">s</div>
        </div>
        <div class="d-example">
            Defines text that is no <s>longer correct</s>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">samp</div>
        </div>
        <div class="d-example">
            Defines sample <samp>output</samp> from a computer program
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">small</div>
        </div>
        <div class="d-example">
            Defines <small>smaller</small> text
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">strong</div>
        </div>
        <div class="d-example">
            Defines <strong>important</strong> text
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">sub</div>
        </div>
        <div class="d-example">
            Defines <sub>subscripted</sub> text
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">sup</div>
        </div>
        <div class="d-example">
            Defines <sup>superscripted</sup> text
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">time</div>
        </div>
        <div class="d-example">
            Hoje é <time>10/08/2019</time>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">u</div>
        </div>
        <div class="d-example">
            Defines text that should be <u>stylistically different</u> from normal text
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">var</div>
        </div>
        <div class="d-example">
            Defines a <var>variable</var>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">form</div>
        </div>
        <div class="d-example">
            <form action="">
                <input type="text">
            </form>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">input</div>
        </div>
        <div class="d-example">
            <input type="text" placeholder="text">
            <input type="password" placeholder="password"><br>
            <input type="search" placeholder="search">
            <input type="email" placeholder="email"><br>
            <input type="file"><br>
            <input type="submit"><input type="reset"><br>

            <label><input type="radio"> Radio</label>
            <label><input type="checkbox"> Checkbox</label>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">textarea</div>
        </div>
        <div class="d-example">
            <textarea></textarea>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">button</div>
        </div>
        <div class="d-example">
            <button>Enviar</button>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">select</div>
        </div>
        <div class="d-example">
            <select>
                <option></option>
                <option>Branco</option>
                <option>Preto</option>
                <option>Cinza</option>
            </select>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">label</div>
        </div>
        <div class="d-example">
            <label>Digite seu nome</label>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">fieldset/legend</div>
        </div>
        <div class="d-example">
            <form>
                <fieldset>
                    <legend>Dados gerais</legend>
                    <input type="text" placeholder="Nome">
                </fieldset>
            </form>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">img</div>
        </div>
        <div class="d-example">
            <img src="https://almeidajunior1.s3.amazonaws.com/prod/media_cache/news_logo_site_default_index/5cfe63632cee4.png" alt="Bob Esponja">
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">figure</div>
        </div>
        <div class="d-example">
            <figure>
                <img src="https://almeidajunior1.s3.amazonaws.com/prod/media_cache/news_logo_site_default_index/5cfe63632cee4.png" alt="Bob Esponja">
            </figure>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">a</div>
        </div>
        <div class="d-example">
            <a href="https://google.com">Google</a>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">hr</div>
        </div>
        <div class="d-example">
            <hr>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">nav</div>
        </div>
        <div class="d-example">
            <nav>
                <a href="/html/">HTML</a> |
                <a href="/css/">CSS</a> |
                <a href="/js/">JavaScript</a> |
                <a href="/jquery/">jQuery</a>
            </nav>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">ul</div>
        </div>
        <div class="d-example">
            <ul>
                <li>Item A</li>
                <li>
                    Item B
                    <ul>
                        <li>Item B1</li>
                        <li>
                            Item B2
                            <ul>
                                <li>a</li>
                                <li>b</li>
                                <li>c</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Item C</li>
            </ul>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">ol</div>
        </div>
        <div class="d-example">
            <ol>
                <li>Item A</li>
                <li>
                    Item B
                    <ol>
                        <li>Item B1</li>
                        <li>
                            Item B2
                            <ol>
                                <li>a</li>
                                <li>b</li>
                                <li>c</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Item C</li>
            </ol>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">dl</div>
        </div>
        <div class="d-example">
            <dl>
                <dt>Coffee</dt>
                <dd>Black hot drink</dd>
                <dt>Milk</dt>
                <dd>White cold drink</dd>
            </dl>
        </div>
    </div>

    <div class="d-section">
        <div class="d-content">
            <div class="d-tag">table</div>
        </div>
        <div class="d-example">
            <table style="width: 50%">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Savings</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>January</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td>February</td>
                        <td>$80</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td>Sum</td>
                        <td>$180</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</body>
</html>
