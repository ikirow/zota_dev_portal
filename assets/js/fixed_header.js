(function(){

    var doc = document.documentElement;
    var w = window;

    var prevScroll = w.scrollY || doc.scrollTop;
    var curScroll;
    var direction = 0;
    var prevDirection = 0;

    var header = document.getElementById('masthead');

    var headerHeight = header.offsetHeight;


    var checkScroll = function() {

        /*
        ** Find the direction of scroll
        ** 0 - initial, 1 - up, 2 - down
        */

        curScroll = w.scrollY || doc.scrollTop;
        if (curScroll > prevScroll) {
            //scrolled up
            direction = 2;
        }
        else if (curScroll < prevScroll) {
            //scrolled down
            direction = 1;
        }

        toggleHeader(direction, curScroll);

        prevScroll = curScroll;

    };

    var toggleHeader = function(direction, curScroll) {

        //Show/hode
        if (direction === 2 && curScroll > headerHeight ) {

            header.classList.add('header-hide');
            prevDirection = direction;
        }
        else if (direction === 1) {
            header.classList.remove('header-hide');
            prevDirection = direction;

            //Change the BG
            if(curScroll > 0){
                header.classList.add('not-on-top');
            }else{
                header.classList.remove('not-on-top');
            }

        }

    };

    window.addEventListener('scroll', checkScroll,{ passive: true });

})();
