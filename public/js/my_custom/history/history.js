console.log("The history page's JS is working");
$(() => {
  console.log("jQuery worked");
  $("[data-button]").click(()=>{
    let section = "[data-section=" + event.target.dataset.button + "]";
    let menuHeight = $(".mainMenuTopBttn").outerHeight();
    console.log(menuHeight);
    $("html,body").animate({
      scrollTop: $(section).offset().top
    }, 800);
  });
});
