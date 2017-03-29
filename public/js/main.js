var navHeight = $('nav').outerHeight(true);

function mainPaddingTop (value) {
  if ($('.alert').length > 0) {
    $('.alert').css({'margin-top': value + 'px'});
  }
  if ($('.jumbotron').length > 0) {
    $('.jumbotron').css({'margin-top': value + 'px'});
  } else {
    $('#main-container').css({'margin-top': value + 'px'});
  }
}

mainPaddingTop(navHeight);
