<?
include('includes/head.php');
?>
<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="\">Главная</a>
                    </li>
                    \
                    <li class="breadcrumb__active active">Новости</li>
                </ol>
            </div>
        </div>

    </div>
</section>
<section class="content-box container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 base-block__one-column">

                <h2 class="zagolovok">Заголовок</h2>

                <div class="row news__block">
                    <div class="col-12 col-md-4 ">
                        <a href="#" class="">
                            <img src="images/opening.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-md-8">
                        <h3 class="news__title">
                            <a href=""> Наш сайт открылся. Добро пожаловать!</a>
                        </h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, porro soluta.
                            Ab commodi corporis dolor eius enim et inventore maxime nulla odit officiis, perspiciatis porro velit
                            voluptatem! Autem consectetur, cupiditate eaque facere impedit itaque maiores necessitatibus repellat saepe temporibus,
                            velit veritatis! Asperiores aspernatur dolorem, esse exercitationem facilis fuga id illum ipsam, iure iusto
                            magnam minima molestiae molestias mollitia natus possimus quis quisquam repudiandae rerum sapiente suscipit vel
                            veritatis vero voluptates.</p>
                        <div class="news__button">
                            <a class="news__link" href="#">Узнать больше...</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="news__data">Дата размещения новости: 05 января 2011</span>
                        <div class="hr"></div>
                    </div>
                </div>

                <h3 class="news__title">
                    <a href=""> Наш сайт открылся. Добро пожаловать!</a>
                </h3>
                <div class="news__content">
                    <div class="news__big-image"></div>
                    <p class="news__paragraph">Дорогой посетитель, мы рады сообщить вам об открытии нашего нового сайта!

                        Все вопросы и пожелания, которые могут возникнуть в процессе использования нашего веб-сайта,
                        просим
                        направлять нам на емайл, либо с помощью специальной формы из раздела "Контакты".</p></div>
                <span class="news__data">Дата размещения новости: 05 января 2011</span>
                <div class="news__button">
                    <a class="news__link" href="#">Узнать больше...</a>
                </div>
                <h2 class="production-page-items__zagolovok"><a class="link_orange"
                                                                href="[[~[[+id]]]]">[[+pagetitle]]</a>
                </h2>
                <div class="news__content">
                    <a href="#" class="news__big-image">
                        <img src="images/opening.jpg" alt="">
                    </a>
                    <p class="news__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum
                        quisquam in et illum dolore ut blanditiis natus eaque voluptatem, voluptas dicta quis expedita
                        doloremque sint. Laborum earum placeat neque voluptas, et vel, impedit suscipit nobis facere
                        tenetur
                        repellat unde itaque illo voluptatem facilis cupiditate cum quibusdam quam reprehenderit?
                        Nesciunt
                        itaque libero optio, error ducimus maiores ea amet, esse obcaecati quis cumque id nihil! Quia
                        illo
                        inventore, maiores ut quisquam. Voluptatem fugiat illo odio ex!</p></div>
                <div class="news__button">
                    <a class="news__link" href="#">Узнать больше...</a>
                </div>
                <div class="pagination">
                    <ul class="pagination">
                        <li class="disabled">
                            <span>Первая</span>
                        </li>
                        <li class="disabled">
                            <span>«</span>
                        </li>
                        <li class="active">
                            <a href="index.php?id=5">1</a>
                        </li>
                        <li>
                            <a href="index.php?id=5&amp;page=2">2</a>
                        </li>
                        <li class="control">
                            <a href="index.php?id=5&amp;page=2">»</a>
                        </li>
                        <li class="control"><a href="index.php?id=5&amp;page=2">Последняя</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


</div>
</div>
<section class="form-box-bottom__block">
    <div class="content">
        <h2 class="podzagolovok color_white wow fadeInLeft" data-wow-offset="100" data-wow-duration="1.3s">Отправьте
            заявку на расчет стоимости Вашего тиража</h2>
        <div class="form-box__bottom wow fadeIn" data-wow-delay="1s" data-wow-duration="1.3s">
            <form class="form-box-bottom__form validate" action="" method="post" id="bottom_form">

                <div class="form-box-bottom__pole">
                    <span class="form-box-bottom__input-name">Ваше имя</span>
                    <input class="form-box-bottom__input" type="text" placeholder="" name="name" required/>
                </div>
                <div class="form-box-bottom__pole">
                    <span class="form-box-bottom__input-name">Номер телефона</span>
                    <input class="form-box-bottom__input" type="tel" placeholder="" name="tel" required/>
                </div>
                <div class="form-box-bottom__pole">
                    <span class="form-box-bottom__input-name">E-mail</span>
                    <input class="form-box-bottom__input" type="email" placeholder="" name="email" required/>
                </div>
                <div class="form-box-bottom__pole_big">
                    <span class="form-box-bottom__input-name">Сообщение</span>
                    <textarea class="form-box-bottom__textarea" name="comment" rows="3"></textarea>
                </div>

                <input class="form-box__submit" type="submit" value="Отправить!" name="submit"/>
            </form>
        </div>
    </div>
</section>
<?
include('includes/footer.php');
?>
