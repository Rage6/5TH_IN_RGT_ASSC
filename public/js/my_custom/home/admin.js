$(document).ready(() => {
  console.log("This is a test of the admin.js file");

  $("[data-memberbttn]").click(()=>{
    let memberId = event.target.dataset.memberbttn;
    if ($("[data-memberbox='" + memberId + "']").css('display') == 'none') {
      $("[data-memberbox='" + memberId + "']").css('display','block');
    } else {
      $("[data-memberbox='" + memberId + "']").css('display','none');
    };
  });

  $("[data-addbttn]").click(()=>{
    let addId = event.target.dataset.addbttn;
    if ($("[data-addbox='" + addId + "']").css('display') == 'none') {
      $("[data-addbox='" + addId + "']").css('display','block');
    } else {
      $("[data-addbox='" + addId + "']").css('display','none');
    };
  });

});
