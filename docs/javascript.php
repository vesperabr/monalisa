<? include '_header.php'; ?>
    <h1>JavaScript</h1>

    <h2>Toggle</h2>
    <a href="#" class="Button toggle" data-name="meutoggle" data-component="toggle" data-target="#lipsum">1</a>
    <a href="#" class="Button toggle" data-component="toggle" data-target="#lipsum2">2</a>
    <br>
    <br>

    <div id="lipsum" class="example">
        <h6>Example 1</h6> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis vel esse enim, quae nulla, consequuntur fugiat porro eveniet voluptatum ratione blanditiis quos quam nam quibusdam labore delectus ducimus dolorum commodi?</p>
    </div>

    <div id="lipsum2" class="example">
        <h6>Example 2</h6> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis vel esse enim, quae nulla, consequuntur fugiat porro eveniet voluptatum ratione blanditiis quos quam nam quibusdam labore delectus ducimus dolorum commodi?</p>
    </div>
    
    <br><hr>

    <h2>CEP</h2>

    <div class="example">
        <form method="post" action="" class="Form" data-component="masks">
            <div class="form-item">
                <label>CEP</label>
                <input type="text" id="meucep" data-component="autocomplete-cep" class="mask" data-type="cep">
            </div>
            <div class="form-item">
                <label>Endereço</label>
                <input type="text" data-autocomplete-address>
            </div>
            <div class="form-item">
                <label>Bairro</label>
                <input type="text" data-autocomplete-neighborhood>
            </div>
            <div class="form-item">
                <label>Cidade</label>
                <input type="text" data-autocomplete-city>
            </div>
            <div class="form-item">
                <label>Estado</label>
                <select data-autocomplete-state>
                    <option>Selecione</option>
                    <option>SP - São Paulo</option>
                    <option>RJ - Rio</option>
                    <option>MG - Minas</option>
                </select>
            </div>
        </form>
    </div>
    
    <br><hr>

    <h2>Tabs</h2>
    <div class="Tabs" data-component="tabs" id="tabsList">
        <ul class="list-tabs">
            <li><a href="#item1">Item1</a></li>
            <li><a href="#item2">Item2</a></li>
            <li><a href="#item3">Item3</a></li>
            <li><a href="#item4">Item4</a></li>
        </ul>

        <div class="content">
            <div id="item1">
                <h6>Item1</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid culpa modi vitae nam amet, sunt quas quidem sequi mollitia, eligendi eum officia, ipsum accusantium fugiat fugit reiciendis dolore perspiciatis, tempore.</p>
            </div>

            <div id="item2">
                <h6>Item2</h6>
                <p>Aliquid deserunt ipsa perspiciatis ad error laboriosam temporibus sunt at eius. Non eaque praesentium, fuga modi sed placeat inventore voluptatum quae aliquam illum mollitia omnis facere dolorum, nemo quam asperiores.</p>
            </div>

            <div id="item3">
                <h6>Item3</h6>
                <p>Suscipit nemo excepturi perspiciatis deleniti ad dolor inventore illo, explicabo ullam unde, reiciendis consectetur repellendus, omnis tempore voluptates quis itaque adipisci nisi id exercitationem repudiandae fuga. Dignissimos odio quis officiis.</p>
            </div>

            <div id="item4">
                <h6>Item4</h6>
                <p>Consequatur iusto magni voluptatibus qui deleniti, quaerat laborum odio maiores suscipit. Consectetur laboriosam, voluptates harum et maxime, impedit omnis temporibus repellat necessitatibus autem dolorum voluptatem, in dignissimos neque perferendis non?</p>
            </div>
        </div>
    </div>

    <br><hr>

    <h2>Dropdown</h2>

    <a href="#" class="Button" data-component="dropdown" data-name="dropdown1" data-target="#dropdown"> Dropdown </a>

    <ul id="dropdown" class="Dropdown _hide">
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Item 3</a></li>
        <li><a href="#">Item 4</a></li>
    </ul>

    <br>
    <br><hr>

    <h2>Alert</h2>

    <div class="example">
        <!-- <a onclick="$M['components']['message_error'].close();" class="Button">close error</a>
        <a onclick="$M['components']['message_error'].open();" class="Button">open error</a>
        <br>
        <br> -->
        <div class="Message _error" id="message_error" data-component="alert">
            <h6>Error</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid culpa modi vitae nam amet, sunt quas quidem sequi mollitia, eligendi eum officia, ipsum accusantium fugiat fugit reiciendis dolore perspiciatis.

            <div class="close"></div>
        </div>
        <div class="Message _success" id="message_success" data-component="alert">
            <h6>Success</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid culpa modi vitae nam amet, sunt quas quidem sequi mollitia, eligendi eum officia, ipsum accusantium fugiat fugit reiciendis dolore perspiciatis.</p>
            
            <div class="close"></div>
        </div>
        <div class="Message _warning" id="message_warning" data-component="alert">
            <h6>Warning</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid culpa modi vitae nam amet, sunt quas quidem sequi mollitia, eligendi eum officia, ipsum accusantium fugiat fugit reiciendis dolore perspiciatis.</p>
            
            <div class="close"></div>
        </div>
        <div class="Message _focus" id="message_focus" data-component="alert">
            <h6>Focus</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid culpa modi vitae nam amet, sunt quas quidem sequi mollitia, eligendi eum officia, ipsum accusantium fugiat fugit reiciendis dolore perspiciatis.</p>
            
            <div class="close"></div>
        </div>
    </div>

    <br><br><hr>

    <h2>Modal</h2>
    
    <a href="#modal" class="Button" data-component="modal" data-target="#modal">Open modal</a>
    <div id="modal" class="modal">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae optio repellat expedita, numquam labore odit omnis ipsum, mollitia nulla tempore. Aspernatur suscipit quos ea sapiente quas temporibus hic, deserunt necessitatibus?</p>
            <p>Est earum eos, a maxime labore aut explicabo illum vitae voluptatum, doloribus incidunt velit? Sed esse cupiditate itaque vero. Itaque voluptates delectus esse id quo recusandae alias sed architecto in?</p>
            <p>Deserunt delectus inventore labore aliquid voluptatum reprehenderit culpa dolores est ipsam eligendi? Veniam deleniti, debitis sunt reiciendis facere quos adipisci reprehenderit dignissimos culpa molestiae ducimus mollitia repudiandae velit possimus inventore!</p>
            <p>Aspernatur, nam amet eius nobis eveniet est, asperiores id saepe beatae vitae labore, quis? Enim molestiae at ab eligendi incidunt accusantium, veniam nemo, minus excepturi voluptatem porro similique deleniti quaerat!</p>
            <p>Natus commodi numquam similique praesentium accusantium facilis corrupti molestiae quo, ullam libero soluta magni totam iste nam. Aperiam fuga fugiat, esse vero cupiditate minus! Laudantium quasi ad esse saepe, id!</p>
            <p>Consectetur sunt illum id, distinctio ipsum molestiae commodi nam aspernatur assumenda nostrum magni voluptas dolor nobis odit suscipit quod quisquam cupiditate dicta perspiciatis laudantium sequi! Culpa facere, fugiat eum explicabo.</p>
            <p>Consequuntur possimus quam ratione necessitatibus. Est impedit modi amet soluta, quae necessitatibus velit quas porro, omnis debitis, commodi dolorem! Voluptatibus, officia eius? Consequatur, labore, aperiam. Aut consequatur, aspernatur ea blanditiis!</p>
            <p>Doloremque, ab? Rem quasi obcaecati recusandae cumque voluptatum unde quas numquam distinctio harum, aliquid nobis repudiandae doloribus consectetur quaerat aut aperiam sunt culpa placeat alias labore excepturi repellat tempora. Placeat.</p>
    </div>

    <a href="#modal1" class="Button" data-component="modal" data-name="meumodal" data-url="_header.php" data-target="#modal1">Open modal ajax</a>
    <div id="modal1" class="modal"></div>

    <br><br><hr>

    <h2>Checkbox all</h2>
    <div class="example demo-grid">
        <form class="Form">
            <div class="form-item" data-component="check_all">
                <label class="checkbox _strong"><input type="checkbox" data-type="all"> Check All</label>
                <label class="checkbox"><input type="checkbox" value="1"> Item 1</label>
                <label class="checkbox"><input type="checkbox" value="2"> Item 2</label>
                <label class="checkbox"><input type="checkbox" value="3"> Item 3</label>
            </div>
        </form>
    </div>

    <br><hr>

    <h2>Auto complete</h2>
    <div class="example demo-grid">
        <form class="Form">
            <div class="form-item">
                <input type="text" data-name="test" data-component="autocomplete" data-url="testAutocomplete">
            </div>
            <div class="form-item">
                <input type="text" data-name="test2" data-target="#mytarget" data-component="autocomplete">
            </div>

            <div id="mytarget"></div>
        </form>
    </div>
    <br><hr>

    <h2>Datepicker</h2>
    <div class="example demo-grid">
        <form class="Form">
            <div class="form-item">
                <input type="text" data-component="datepicker">
            </div>
            <div class="form-item">
                <label>Formato da data (ex.: 01 de janeiro de 2018)</label>
                <input type="text" data-component="datepicker" data-date-format="dd 'de' MM 'de' yy">
            </div>
        </form>
    </div>
    <br><hr>

    <h2>Mask</h2>
    <div class="example demo-grid">
        <form class="Form" data-name="mask">
            <div class="form-item" data-component="masks">
                <label>Data</label>
                <input type="text" class="mask" data-type="date">
            </div>
            <div class="form-item" data-component="masks">
                <label>Hora</label>
                <input type="text" class="mask" data-type="time">
            </div>
            <div class="form-item" data-component="masks">
                <label>Data e hora</label>
                <input type="text" class="mask" data-type="date_time">
            </div>
            <div class="form-item" data-component="masks">
                <label>CEP</label>
                <input type="text" class="mask" data-type="cep">
            </div>
            <div class="form-item" data-component="masks">
                <label>CPF</label>
                <input type="text" class="mask" data-type="cpf">
            </div>
            <div class="form-item" data-component="masks">
                <label>CNPJ</label>
                <input type="text" class="mask" data-type="cnpj">
            </div>
            <div class="form-item" data-component="masks">
                <label>Telefone</label>
                <input type="text" class="mask" data-type="telefone">
            </div>
            <div class="form-item" data-component="masks">
                <label>Phone US</label>
                <input type="text" class="mask" data-type="phone_us">
            </div>
        </form>
    </div>

    <br><hr>

    <h2>Number</h2>
    <div class="example demo-grid">
        <form class="Form">
            <div class="form-item">
                <label>Number 1</label>
                <div class="_number" data-component="number">
                    <input type="number" value="3">
                </div>
            </div>
            <div class="form-item">
                <label>Number 2</label>
                <div class="_number _up-down" data-component="number">
                    <input type="number" value="2">
                </div>
            </div>
        </form>
    </div>

    <br><hr>

    <h2>Tooltip</h2>
    <div class="example demo-grid">
        <div class="Row _gutters">
            <div class="col _col-4 _mb10"><a aria-label="bottom-right" class="Tooltip _bottom-right">bottom-right</a></div>
            <div class="col _col-4 _mb10"><a aria-label="bottom" class="Tooltip _bottom">bottom</a></div>
            <div class="col _col-4 _mb10"><a aria-label="bottom-left" class="Tooltip _bottom-left">bottom-left</a></div>
            <div class="col _col-4 _mb10"><a aria-label="right" class="Tooltip _right">right</a></div>
            <div class="col _col-4 _mb10"><a> </a></div>
            <div class="col _col-4 _mb10"><a aria-label="left" class="Tooltip _left">left</a></div>
            <div class="col _col-4 _mb10"><a aria-label="top-right" class="Tooltip _top-right">top-right</a></div>
            <div class="col _col-4 _mb10"><a aria-label="top" class="Tooltip _top">top</a></div>
            <div class="col _col-4 _mb10"><a aria-label="top-left" class="Tooltip _top-left">top-left</a></div>
        </div>
    </div>
    <br>

    <h4>Color Modifiers</h4>
    <a class="Tooltip Button _bottom-right _error" aria-label="This is an error tooltip">error</a>
    <a class="Tooltip Button _bottom-right _warning" aria-label="This is a warning tooltip">warning</a>
    <a class="Tooltip Button _bottom-left _info" aria-label="This is an info tooltip">info</a>
    <a class="Tooltip Button _bottom-right _success" aria-label="This is success tooltip">success</a>
    <br><br>

    <h4>Size variations</h4>
    <a class="Tooltip Button _top _small" data-hint="You can show very very long sentences inside tooltips by using various available size variation classes.">Small</a>
    <a class="Tooltip Button _top _medium" data-hint="You can show very very long sentences inside tooltips by using various available size variation classes.">Medium</a>
    <a class="Tooltip Button _top _large" data-hint="You can show very very long sentences inside tooltips by using various available size variation classes.">Large</a>


    <br><br><hr>

    <h2>Validate Form</h2>
    <div class="example demo-grid">

        <form class="Form" action="" method="get" data-component="validate">
            <div class="form-item">
                <label>Name</label>
                <input type="text" name="name" class="_w50" required>
            </div>
            <div class="form-item">
                <label>Email</label>
                <input type="email" name="email" class="_w50" required>
            </div>

            <div class="form-item">
                <label>Country</label>
                <select name="country" class="_w50" required>
                    <option value="">---</option>
                    <option value="us">USA</option>
                    <option value="de">Germany</option>
                    <option value="fi">Suomi</option>
                    <option value="se">Sweden</option>
                </select>
            </div>

            <div class="form-item">
                <label class="checkbox"><input type="checkbox" name="check"> Check me</label>
            </div>

            <div class="form-item">
                <textarea rows="6" name="about" required></textarea>
            </div>

            <div class="form-item">
                <button class="Button _secondary">Send</button>
            </div>
        </form>

    </div>

    <br><br><hr>

    <h2>Selector</h2>
    <div class="example demo-grid">

        <form class="Form" action="" method="get">
            <div class="form-item">
                <select data-component="selector">
                    <option value="#box-1">Box 1</option>
                    <option value="#box-2">Box 2</option>
                </select>
            </div>

            <div class="Message" id="box-1">Box 1</div>
            <div class="Message _hide" id="box-2">Box 2</div>

            <hr>

            <div class="form-item" data-component="selector">
                <label><input type="radio" name="checker" value="#box-3"> Box 3</label>
                <label><input type="radio" name="checker" value="#box-4" checked="true"> Box 4</label>
            </div>

            <div class="Message _hide" id="box-3">Box 3</div>
            <div class="Message" id="box-4">Box 4</div>

            <hr>

            <div class="form-item" data-component="selector">
                <label><input type="checkbox" name="checkbox" value="#box-5"> Box 5</label>
            </div>

            <div class="Message _hide" id="box-5">Box 5</div>
        </form>

    </div>

    <br><br><hr>

    <h2>Upload</h2>
    <div class="example demo-grid">
        <form action="">
            <div class="form-item" id="file1">
                <div class="Upload" data-component="upload" data-type="file" data-target="#my-upload-target" data-multiple="true"></div>

            <div id="my-upload-target" class="upload-target"></div>
            </div>
        </form>

        <form action="">
            <div class="form-item" id="file2">
                <div class="Upload _box" data-component="upload" data-type="image" data-multiple="true">
                    <div class="upload-item"></div>
                </div>
            </div>
        </form>
    </div>

    <br><br><hr>

<? include '_footer.php'; ?>

<script>
    $M["components"]["test2"]['settings']["json"] = [{"id": 1, "name": "Apple"},{"id": 2, "name": "Apricot"},{"id": 3, "name": "Avocado"},{"id": 4, "name": "Banana"},{"id": 5, "name": "Breadfruit"},{"id": 6, "name": "Bilberry"},{"id": 7, "name": "Blackberry"},{"id": 8, "name": "Blackcurrant"},{"id": 9, "name": "Blueberry"},{"id": 10, "name": "Boysenberry"}];
</script>