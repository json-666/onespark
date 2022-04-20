(function(){

  var doc = document.documentElement;
  var w = window;

  var prevScroll = w.scrollY || doc.scrollTop;
  var curScroll;
  var direction = 0;
  var prevDirection = 0;

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

    if (direction !== prevDirection) {
      if(document.getElementsByClassName('component__menuWrapperHidden')[0].classList.contains("is-active")){
        return 0;
      }
      else{
        toggleHeader(direction, curScroll);
      }
    }

    prevScroll = curScroll;
  };

  var toggleHeader = function(direction, curScroll) {
    if (direction === 2 && curScroll > (0.5*document.getElementsByClassName('main-header')[0].offsetHeight)) { 
      document.getElementsByClassName('main-header')[0].style.top = '-'+document.getElementsByClassName('main-header')[0].offsetHeight+'px';
      prevDirection = direction;

    }
    else if (direction === 1) {
      document.getElementsByClassName('main-header')[0].style.top = '0';
      prevDirection = direction;
    }
  };

  window.addEventListener('scroll', checkScroll);

})();