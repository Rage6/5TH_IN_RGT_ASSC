$(document).ready(() => {
  // console.log("Test 1");

  $('#mainMenuTopBttn').click(()=>{
    let topBttnHeight = $('.mainMenuTopBttn').outerHeight(true);
    if ($('.mainMenuBox').css('left') == '0px') {
      $('.mainMenuBox').css('left','-100vw').css('top',topBttnHeight);
      $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,0.7),rgba(0,100,0,0.7) 85%,rgba(0,0,0,0.8))');
    } else {
      $('.mainMenuBox').css('left','0vw').css('top',topBttnHeight);
      $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,1),rgba(0,100,0,1) 85%,rgba(0,0,0,0.8))');
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

  // $('[data-bttn]').click(()=>{
  //   console.log(event);
  // });

});
