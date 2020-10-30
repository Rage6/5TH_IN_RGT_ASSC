// console.log("This is a test of the home.js file");
$(()=>{
  $("#searchBttn").click(()=>{
    $("[data-first]").css('display','flex');
    let searchValue = $("#searchBox").val().toLowerCase();
    let splitFullName = searchValue.split(" ");
    let firstName = splitFullName[0];
    let lastName = splitFullName[1];
    if (searchValue != "") {
      $("[data-first]").css('display','none');
      console.log(searchValue.split(" ").length);
      if (searchValue.split(" ").length > 1) {
        $("[data-first='"+firstName+"'][data-last='"+lastName+"']").css('display','flex');
      } else {
        $("[data-first='"+searchValue+"']").css('display','flex');
        $("[data-last='"+searchValue+"']").css('display','flex');
      };
      // $("[data-nickname='"+searchValue+"']").css('display','flex');
    };
  });
});
