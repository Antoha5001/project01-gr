(function () {
    window.addEventListener('DOMContentLoaded', init);
    function init() {

        function ShowHidden(settings) {
            var self = this;
            this.element = settings.element;
            this.container = settings.container;
            this.slides = settings.slides;

            // console.log(this.element);

            window.addEventListener('scroll', function () {

                var docTop = document.documentElement.scrollTop,
                    containerTop = self.container.getBoundingClientRect().top,
                    docHeight = document.documentElement.clientHeight;

                // console.log(self.slides);

                if( containerTop + 200 < docHeight){

                    self.element.classList.add('is-scroll');
                    self.element.classList.remove(self.slides);

                }   else if(containerTop + 200 > docHeight) {

                    self.element.classList.remove('is-scroll');
                    self.element.classList.add(self.slides);

                }
            });

        }


        var title = document.querySelector('h1.zagolovok'),
        bitrixImage = document.querySelector('img.development-image');


        if(title !== null){
            
            var titleParent = title.parentNode;

            var titleScroll = {
                element: title,
                container: titleParent,
                slides: "scroll-effects_left",
            };

            var titleShow = new ShowHidden(titleScroll);
        }

        if(bitrixImage !== null){

            var bitrixParent = bitrixImage.parentNode;


            var bitrixScroll = {
                element: bitrixImage,
                container: bitrixParent,
                slides: "scroll-effects_left",
            };

            var bitrixShow = new ShowHidden(bitrixScroll);

        }

        var  bitrixTitle = document.querySelector('.development-content-wrapper');

        if(bitrixTitle !== null){

            var bitrixContentParent = document.querySelector('.development-box');

            var bitrixScroll = {
                element: bitrixTitle,
                container: bitrixContentParent,
                slides: "scroll-effects_right",
            };

            var bitrixContentShow = new ShowHidden(bitrixScroll);

        }


        // console.log(titleScroll);

    }
})();