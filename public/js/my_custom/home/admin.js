$(document).ready(() => {
  console.log("This is a test of the admin.js file");

  // Open or close option to add a member
  $(".addMemberBttn").click(()=>{
    if ($(".addMemberInfo").css('display') == 'block') {
      $(".addMemberInfo").css('display','none');
    } else {
      $(".addMemberInfo").css('display','block');
    };
  });

  // Open or close a member's information
  $("[data-memberbttn]").click(()=>{
    let memberId = event.target.dataset.memberbttn;
    if ($("[data-memberbox='" + memberId + "']").css('display') == 'none') {
      $("[data-memberbox='" + memberId + "']").css('display','block');
    } else {
      $("[data-memberbox='" + memberId + "']").css('display','none');
    };
  });

  // Open or close the option to add a new time span
  $("[data-addbttn]").click(()=>{
    let addId = event.target.dataset.addbttn;
    if ($("[data-addbox='" + addId + "']").css('display') == 'none') {
      $("[data-addbox='" + addId + "']").css('display','block');
    } else {
      $("[data-addbox='" + addId + "']").css('display','none');
    };
  });

  // Opens the option for member deletion
  $("[data-delbttn]").click(()=>{
    let delId = event.target.dataset.delbttn;
    if ($("[data-delbox='" + delId + "']").css('display') == 'none') {
      $("[data-delbox='" + delId + "']").css('display','block');
    };
  });

  // Closes the option for member deletion
  $("[data-cancelbttn]").click(()=>{
    let cancelId = event.target.dataset.cancelbttn;
    if ($("[data-delbox='" + cancelId + "']").css('display') == 'block') {
      $("[data-delbox='" + cancelId + "']").css('display','none');
    };
  });

});
