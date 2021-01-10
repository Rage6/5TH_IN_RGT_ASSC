console.log("The history page's JS is working");
$(() => {
  console.log("jQuery worked");
  $("[data-button]").click(()=>{
    let section = "[data-section=" + event.target.dataset.button + "]";
    let menuHeight = null;
    if (window.innerWidth <= 768) {
      menuHeight = $(".mainMenuTopBttn").outerHeight() + $(".timelineBox").outerHeight();
    } else {
      menuHeight = $(".mainMenuTopBttn").outerHeight();
    };
    let totalTop = $(section).offset().top - menuHeight;
    $("html,body").animate({
      scrollTop: totalTop
    }, 800);
  });

  // Used this to change the tags in the original source code to avoid some of the repetiion
  // let originalText = ``;
  //
  // let newText = ``;
  //
  // const removeFromOld = (element) => {
  //   newText = originalText.split(element).join('');
  //   originalText = newText;
  // };
  //
  // const replaceOnOld = (oldElement,newElement) => {
  //   newText = originalText.replace(oldElement,newElement);
  //   originalText = newText;
  // };
  //
  // removeFromOld('<br>&nbsp;&nbsp;&nbsp;&nbsp;');
  // removeFromOld('<span class="style2">');
  // replaceOnOld(/<\/span><span class="style3">/gi,'</p><p><span>');
  // removeFromOld('<br>&nbsp;&nbsp;&nbsp;');
  // removeFromOld('<br> &nbsp;&nbsp;&nbsp;');
  // removeFromOld('<p> &nbsp;&nbsp;&nbsp;</p>');
  // removeFromOld('&nbsp;&nbsp;&nbsp;');
  //
  // console.log(newText);

});
