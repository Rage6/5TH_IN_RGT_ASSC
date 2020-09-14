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
});
