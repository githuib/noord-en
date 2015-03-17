(function () {

  // $('[role="navigation"] li').on('click', function (evt) {
  //   evt.preventDefault();

  //   window.location = $(this).find('a').attr('href'); 
  // });
  var navItems = document.querySelectorAll('.menu li');
  [].forEach.call(navItems, function(navItem) {
    navItem.addEventListener('click', function(evt) {
      evt.preventDefault();

      window.location = navItem.querySelector('a').getAttribute('href'); 
    });
  });

}());
