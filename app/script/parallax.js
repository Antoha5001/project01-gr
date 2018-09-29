'use strict';
var production_box = document.getElementsByClassName('production-box');

$(document).ready(function () {

    setTimeout(function () {
        if (production_box[0] !== undefined) {
            var wScroll = $(window).scrollTop();
            if (!$('.production__item').hasClass('is-visibile') && wScroll > $('.production-box').offset().top - $(window).height()) {
                $('.production__item').each(function (e) {
                    setTimeout(function () {
                        $('.production__item').eq(e).addClass('is-visibile');
                    }, 350 * (e + 1))
                });
            }

        }
    }, 500);

    var footerLogo = $('.footer__logo');

    $(window).scroll(function () {

        var wScroll = $(window).scrollTop();
        if (wScroll > (footerLogo.offset().top - $(window).height() + 50)) {
            footerLogo.addClass('is-visibile');
        } else {
            footerLogo.removeClass('is-visibile');
        }
        if (production_box[0] !== undefined) {
            if (wScroll > $('.production-box').offset().top - $(window).height()) {
                $('.production__item').each(function (e) {
                    setTimeout(function () {
                        $('.production__item').eq(e).addClass('is-visibile');
                    }, 350 * (e + 1))
                });
            }
        }
    });

    function ShowHidden(element) {
        var self_my = this;
        this.element = element;


        this.scroll = function () {
            // console.log(self_my.element);
        };
        window.addEventListener('scroll', function () {

            // console.log(self_my);
            // console.log(self.element);
        });

    }

    var logo = new ShowHidden(footerLogo);
    logo.scroll();
});
