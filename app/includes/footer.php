<section class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 footer__contacts">
                <div class="footer__contacts">
                    <span class="footer__phone">+7 (3852) 62-33-99</span>
                    <span class="footer__text">
                        E-mail:<a href="mailto:623344@mail.ru" class="link link_white"> 623344@mail.ru</a>
                    </span>
                    <span class="footer__text">
                        Адрес: Алтайский край, г. Барнаул, <br/>улица Южные Мастерские, д. 14 Б
                    </span>

                </div>

			</div>
			<div class="col-lg-4">
				<a href="/" class="footer__logo">
					<img src="images/logo_white.svg" alt="">
				</a>
			</div>
			<div class="col-lg-4">
                <div class="footer__contacts footer__contacts_right">
                    <span class="footer__zagolovok footer__zagolovok_right">1998–2019 &copy ООО «Типография Графика»</span>
                    <br>
                    <a href="/agreement/"><span>Согласие на обработку персональных данных</span></a>

                </div>
			</div>
		</div>


	</div>

</section>
</div>
<script src="common/scripts.min.js"></script>
<script src="common/modal.js"></script>
<script src="common/scroll.js"></script>
<script src="common/services/slick.min.js"></script>
<script src="common/services/jquery.fancybox.min.js"></script>
<script>
    "use strict";
    (function () {
        window.addEventListener('DOMContentLoaded', init);

        function init() {
            const bigImg = $('.slick__big-img_wrapper'),
                thumbImg = $('.slick__img-container');

            if(bigImg.length > 0){

            }
            $('.slick__big-img_wrapper').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: thumbImg,
                // autoplay: true
            });
            thumbImg.slick({
                slidesToShow: 3,
                asNavFor: bigImg,
                focusOnSelect: true,
                variableWidth:true,
                centerMode: true
            });
        }
    })();
</script>
</body>

</html>
