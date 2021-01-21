$(document).ready(() => {
  console.log("This is a test of the admin.js file");

  $("[data-addbttn]").click(()=>{
    eventId = event.target.dataset.addbttn;
    console.log("This worked. The id is " + eventId);
    if ($("[data-addbox='" + eventId + "']").css('display') == 'none') {
      $("[data-addbox='" + eventId + "']").css('display','block');
    } else {
      $("[data-addbox='" + eventId + "']").css('display','none');
    };
  });

});
