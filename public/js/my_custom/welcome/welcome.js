$(document).ready(() => {
  // console.log("Test 1");

  $('#mainMenuTopBttn').click(()=>{
    if ($('.mainMenuBox').css('display') == 'none') {
      $('.mainMenuBox').css('display','block');
    } else {
      $('.mainMenuBox').css('display','none');
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
