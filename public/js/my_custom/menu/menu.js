$(document).ready(() => {
  // console.log("Testing");
  console.log("screen width: " + window.screen.width);
  console.log("screen height: " + window.screen.height);
  console.log("device pixel ration: " + window.devicePixelRatio);
  console.log(window);

  $('#mainMenuTopBttn').click(()=>{
    // console.log(window.outerWidth);
    // console.log(window.screen.width / window.devicePixelRatio);
    // console.log(window.devicePixelRatio);

    let windowWidth = window.outerWidth + "px";
    // let windowWidth = window.outerWidth / window.devicePixelRatio + "px";
    let topBttnHeight = $('.mainMenuTopBttn').outerHeight(true);
    // if (window.outerWidth <= 1920) {
    if (window.screen.width / window.devicePixelRatio <= 1920) {
      if ($('.mainMenuBox').css('left') != windowWidth) {
        // if (window.outerWidth <= 768) {
        if (window.screen.width / window.devicePixelRatio <= 768) {
          $('.mainMenuBox').css('animation-name','scrollMenuAllLeft').css('top',topBttnHeight);
        // } else if (window.outerWidth >= 768 && window.outerWidth <= 1366) {
        } else if (window.screen.width / window.devicePixelRatio >= 768 && window.screen.width / window.devicePixelRatio <= 1366) {
          $('.mainMenuBox').css('animation-name','scrollMenuHalfLeft').css('top',topBttnHeight);
        // } else if (window.outerWidth > 1366 && window.outerWidth <= 1920) {
        } else if (window.screen.width / window.devicePixelRatio > 1366 && window.screen.width / window.devicePixelRatio <= 1920) {
          $('.mainMenuBox').css('animation-name','scrollMenuThirdLeft').css('top',topBttnHeight);
        };
        $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,0.8),rgba(0,100,0,0.8) 85%,rgba(0,0,0,0.8))');
      } else {
        // if (window.outerWidth <= 768) {
        if (window.screen.width / window.devicePixelRatio <= 768) {
          $('.mainMenuBox').css('animation-name','scrollMenuAllRight').css('top',topBttnHeight);
        // } else if (window.outerWidth >= 768 && window.outerWidth <= 1366) {
        } else if (window.screen.width / window.devicePixelRatio >= 768 && window.screen.width / window.devicePixelRatio <= 1366) {
          $('.mainMenuBox').css('animation-name','scrollMenuHalfRight').css('top',topBttnHeight);
        } else {
          $('.mainMenuBox').css('animation-name','scrollMenuThirdRight').css('top',topBttnHeight);
        };
        $('.mainMenuTopBttn').css('background','linear-gradient(rgba(0,100,0,1),rgba(0,100,0,1) 85%,rgba(0,0,0,1))');
      };
    } else {
      console.log($('.mainMenuTopBttn').css('left'));
      // let newLeft = (window.outerWidth / 2) + 320;
      let newLeft = ((window.screen.width / window.devicePixelRatio) / 2) + 320;
      let newTop = $('.mainMenuTopBttn').outerHeight(true);
      if ($('.mainMenuBox').css('display') == 'block') {
        $('.mainMenuBox').css('display','none').css('left',newLeft).css('top',newTop);
      } else {
        $('.mainMenuBox').css('display','block').css('left',newLeft).css('top',newTop);
      };
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

});
