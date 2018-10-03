<? include '_header.php'; ?>
    <h1>JavaScript</h1>

    <h2>Toggle</h2>
    <a href="#" class="Button toggle" data-name="meutoggle" data-component="toggle" data-target="#lipsum">1</a>
    <a href="#" class="Button toggle" data-component="toggle" data-target="#lipsum2">2</a>
    <br>
    <br>
    <!-- <div data-component="toggle">2</div> -->

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
        <form method="post" action="" class="Form">
            <div class="form-item">
                <label>CEP</label>
                <input type="text" id="meucep" data-component="autocomplete-cep" autocomplete="nope">
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

    <span class="Button" data-component="dropdown" data-name="dropdown1" data-target="#dropdown"> Dropdown </span>

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
    <div class="Form">
        <div class="form-item" data-component="check_all">
            <label class="checkbox _strong"><input type="checkbox" data-type="all"> Check All</label>
            <label class="checkbox"><input type="checkbox" value="1"> Item 1</label>
            <label class="checkbox"><input type="checkbox" value="2"> Item 2</label>
            <label class="checkbox"><input type="checkbox" value="3"> Item 3</label>
        </div>
    </div>

    <br><hr>

    <h2>Auto complete</h2>
    <div class="Form">
        <div class="form-item">
            <input type="text" name="test" data-component="autocomplete" data-url="testAutocomplete">
        </div>
        <div class="form-item">
            <input type="text" name="test2" data-target="#mytarget" data-component="autocomplete" data-url="testAutocomplete">
        </div>

    <div id="mytarget"></div>
    <br><hr>

    <h2>Datepicker</h2>
    <div class="Form">
        <div class="form-item">
            <input type="text" data-component="datepicker">
        </div>
        <div class="form-item">
            <label>Formato da data (ex.: 12 de janeiro de 1992)</label>
            <input type="text" data-component="datepicker" data-date-format="dd 'de' MM 'de' yy">
        </div>
    </div>

    <br><hr>

<? include '_footer.php'; ?>