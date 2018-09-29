(function () {
    window.addEventListener('DOMContentLoaded', init);
    function init() {

        function ShowHidden(settings) {
            var mySelf = this;
            this.element = settings.element;
            this.container = settings.container;


            window.addEventListener('scroll', function () {

                var elemCoords = mySelf.element.getBoundingClientRect().top,
                    docTop = document.documentElement.scrollTop,
                    containerTop = mySelf.container.getBoundingClientRect().top,
                    docHeight = document.documentElement.clientHeight;


                if( containerTop + 200 < docHeight){

                    mySelf.element.classList.add('is-visible');

                }   else if(containerTop + 200 > docHeight) {

                    mySelf.element.classList.remove('is-visible');

                }
            });

        }


        var title = document.querySelector('h1.zagolovok'),
            titleParent = title.parentNode;

        var titleScroll = {
            element: title,
            container: titleParent,
        };

        var titleShow = new ShowHidden(title);


        // console.log(title.element.getBoundingClientRect().top);

    }
})();