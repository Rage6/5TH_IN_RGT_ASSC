$(document).ready(() => {
  // console.log("Test 1");

  $('#mainMenuTopBttn').click(()=>{
    let topBttnHeight = $('.mainMenuTopBttn').outerHeight(true);
    if ($('.mainMenuBox').css('left') == '0px') {
      $('.mainMenuBox').css('animation-name','scrollMenuLeft').css('top',topBttnHeight);
      $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,0.8),rgba(0,100,0,0.8) 85%,rgba(0,0,0,0.8))');
    } else {
      $('.mainMenuBox').css('animation-name','scrollMenuRight').css('top',topBttnHeight);
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
