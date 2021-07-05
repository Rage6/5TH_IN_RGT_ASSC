console.log("The memorial page's JS is working...");
$(() => {
  console.log("...and the jQuery works too.");
  let initGetString = location.search.substring(1);
  let initGetArray = initGetString.split("&");
  for (let initNum = 0; initNum < initGetArray.length; initNum++) {
    let currentGetKey = initGetArray[initNum].split("=")[0];
    if (currentGetKey == "selected") {
      let windowTop = $(window).scrollTop();
      let resultTop = $("#rightSearchColumn").offset().top;
      let menuHeight = Math.trunc($('.mainMenuTopBttn').outerHeight(true));
      let heightDifference = resultTop - windowTop - menuHeight;
      $("html,body").animate({scrollTop:heightDifference},1000);
    };
  };
});
