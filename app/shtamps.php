<?
include('includes/head.php');
?>


    <section class="breadcrumb-box">
        <div class="wrapper">
            <div class="row">
                <div class="col col-lg-12">
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
    <section class="content-box">
        <div class="wrapper">
            <div class="row">
                <div class="col col-lg-12 base-block">
                    <h1 class="zagolovok">Заголовок</h1>
                  <p>Изображения в векторном формате .svg. Вы можете сохранить их, и использовать для разработки макета.</p>
<div class="shtamp-wrapper">
	<div class="shtamp-box"><img src="images/shtamps/d45.svg" alt=""></div>
	<div class="shtamp-box"><img src="images/shtamps/d60.svg" alt=""></div>
	<div class="shtamp-box"><img src="images/shtamps/d60u.svg" alt=""></div>
	<div class="shtamp-box"><img src="images/shtamps/d70.svg" alt=""></div>
	<div class="shtamp-box"><img src="images/shtamps/d80.svg" alt=""></div>	<div class="shtamp-box"><img src="images/shtamps/d97.svg" alt=""></div>
	<div class="shtamp-box"><img src="images/shtamps/d110.svg" alt=""></div>
	<div class="shtamp-box"><img src="images/shtamps/80_90.svg" alt=""></div>
	<div class="shtamp-box shtamp-box_50"><img src="images/shtamps/oval140_67.svg" alt=""></div>
	<div class="shtamp-box shtamp-box_50"><img src="images/shtamps/oval95_65.svg" alt=""></div>
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
        <div class="wrapper">
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