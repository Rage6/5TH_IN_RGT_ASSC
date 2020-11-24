$(document).ready(() => {
  // console.log("This is a test of the home.js file");

  $(".categoryBox").css('display','none');

  const showCategorySearch = (category) => {
    $(".categoryBox").css('display','none');
    let thisCategory = event.target.dataset.category;
    if (thisCategory == 'first') {
      $("#firstBox").css('display','flex');
    } else if (thisCategory == 'last') {
      $("#lastBox").css('display','flex');
    } else if (thisCategory == 'year') {
      $("#yearBox").css('display','flex');
    } else {

    };
  };

  $("[data-category='first']").click(()=>{
    showCategorySearch('first');
  });

  $("[data-category='last']").click(()=>{
    showCategorySearch('first');
  });

  $("[data-category='year']").click(()=>{
    showCategorySearch('first');
  });

  const findByName = (inputName,category) => {
    $("[data-first]").css('display','none');
    let searchValue = $(inputName).val().toLowerCase();
    if (searchValue != "") {
      $("[data-" + category + "='" + searchValue + "']").css('display','flex');
    } else {
      $("[data-first]").css('display','flex');
    };
  };

  $("#searchFirstBttn").click(()=>{
    findByName("#searchByFirst","first");
  });

  $("#searchLastBttn").click(()=>{
    findByName("#searchByLast","last");
  });

  const findByYear = (inputYear) => {
    $("[data-first]").css('display','none');
    let searchYear = $(inputYear).val();
    if (searchYear != "") {
      intSearchYear = parseInt(searchYear);
      let idArray = $("[data-start]").map(function() {
          return $(this).data("parent");
        }).get();
      let startArray = $("[data-start]").map(function() {
          return $(this).data("start");
        }).get();
      let endArray = $("[data-end]").map(function() {
          return $(this).data("end");
        }).get();
      for (let spanNum = 0; spanNum < idArray.length; spanNum++) {
        if (startArray[spanNum] <= intSearchYear && endArray[spanNum] >= intSearchYear) {
          $("[data-user='" + idArray[spanNum] + "']").css('display','flex');
        };
      };
    } else {
      $("[data-first]").css('display','flex');
    };
  };

  $("#searchYearBttn").click(()=>{
    findByYear("#searchByYear");
  });

});
