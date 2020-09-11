console.log("The history page's JS is working");
$(() => {
  console.log("jQuery worked");
  $("[data-button]").click(()=>{
    let section = "[data-section=" + event.target.dataset.button + "]";
    let menuHeight = $(".mainMenuTopBttn").outerHeight() + $(".timelineBox").outerHeight();
    let totalTop = $(section).offset().top - menuHeight;
    $("html,body").animate({
      scrollTop: totalTop
    }, 800);
  });
});
