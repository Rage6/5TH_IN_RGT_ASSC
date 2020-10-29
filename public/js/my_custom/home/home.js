// console.log("This is a test of the home.js file");
$(()=>{
  $("#searchBttn").click(()=>{
    let searchValue = $("#searchBox").val().toLowerCase();
    if (searchValue != "") {
      $("[data-first]").css('display','none');
      $("[data-first='"+searchValue+"']").css('display','flex');
    } else {
      $("[data-first]").css('display','flex');
    };
  });
});
