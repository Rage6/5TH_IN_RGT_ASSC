$(document).ready(() => {
  // console.log("Testing");

  $('#mainMenuTopBttn').click(()=>{
    let windowWidth = window.outerWidth + "px";
    let topBttnHeight = $('.mainMenuTopBttn').outerHeight(true);
    if ($('.mainMenuBox').css('left') != windowWidth) {
      if (window.outerWidth < 768) {
        $('.mainMenuBox').css('animation-name','scrollMenuAllLeft').css('top',topBttnHeight);
      } else {
        $('.mainMenuBox').css('animation-name','scrollMenuHalfLeft').css('top',topBttnHeight);
      };
      $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,0.8),rgba(0,100,0,0.8) 85%,rgba(0,0,0,0.8))');
    } else {
      if (window.outerWidth < 768) {
        $('.mainMenuBox').css('animation-name','scrollMenuAllRight').css('top',topBttnHeight);
      } else {
        $('.mainMenuBox').css('animation-name','scrollMenuHalfRight').css('top',topBttnHeight);
      };
      $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,1),rgba(0,100,0,1) 85%,rgba(0,0,0,1))');
    };
  });

  $('[data-bttn-num]').click(()=>{
    let bttnNum = event.target.dataset.bttnNum;
    let currentDisplay = $('[data-box-num="' + bttnNum + '"]').css('display');
    $('[data-box-num]').css('display','none');
    if (currentDisplay == 'none') {
      $('[data-box-num="' + bttnNum + '"]').css('display','block');
    } else {
      $('[data-box-num="' + bttnNum + '"]').css('display','none');
    };
  });

  $('#bottomView').click(()=>{
    let marginHeight = $(".lowerBody").outerHeight(true) - $(".lowerBody").outerHeight();
    $("html,body").animate({scrollTop:marginHeight},800);
  });

});
