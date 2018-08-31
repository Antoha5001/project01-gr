<nav class="menu d-flex">
    <input type="checkbox" name="toggle" id="menu" class="menu__toggle"/>
    <label for="menu" class="menu__toggle"><i class="fa fa-bars"></i>Меню</label>
    <ul>
        <li>
            <a href="#">
<!--                <i class="fa fa-home">                    -->
                </i>Главная</a>
        </li>

        <li>
            <input type="checkbox" name="toggle" class="submenu__toggle" id="sub_m1"/>
            <a href="#">Продукция</a>
            <label for="sub_m1" class="submenu__toggle">
                <i class="fa"></i>
            </label>
            <ul>
                <li><a href="#">Одежда</a></li>
                <li>
                    <input type="checkbox" name="toggle" class="submenu__toggle" id="sub_m1-1"/>
                    <span class=" fa icon"></span>
                    <a href="#">Электроника</a>
                    <label for="sub_m1-1" class="submenu__toggle"><i class="fa"></i></label>
                    <ul>
                        <li><a href="#">Кофеварки</a></li>
                        <li>
                            <input type="checkbox" name="toggle" class="submenu__toggle" id="sub_m1-1-1"/>

                            <span class=" fa icon"></span>
                            <a href="#">Чайники</a>
                            <label for="sub_m1-1-1" class="submenu__toggle"><i class="fa"></i></label>
                            <ul>
                                <li><a href="#">Rowenta</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Philips</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Мультиварки</a></li>
                    </ul>
                </li>
                <li><a href="#">Продукты питания</a></li>
                <li><a href="#">Инструменты</a></li>
                <li><a href="#">Быт. химия</a></li>
            </ul>
        </li>

        <li>
            <input type="checkbox" name="toggle" class="submenu__toggle" id="sub_m2"/>
            <a href="#">Услуги</a>
            <label for="sub_m2" class="submenu__toggle"><i class="fa"></i></label>
            <ul>
                <li><a href="#">Услуга 1</a></li>
                <li><a href="#">Услуга 2</a></li>
                <li><a href="#">Услуга 3</a></li>
            </ul>
        </li>

        <li><a href="#"> Новости</a></li>
        <li><a href="#"> Контакты</a></li>
    </ul>
</nav>