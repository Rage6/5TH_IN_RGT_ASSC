$(document).ready(() => {
  console.log("This is a test of the admin.js file");

  // Open or close option to add a member
  // $(".addMemberBttn").click(()=>{
  //   if ($(".addMemberInfo").css('display') == 'block') {
  //     $(".addMemberInfo").css('display','none');
  //   } else {
  //     $(".addMemberInfo").css('display','block');
  //   };
  // });

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

  // Open and close 'add' boxes
  const addBttnTool = (bttnType) => {
    console.log("The function worked");
    if ($("[data-addbox='"+bttnType+"']").css('display') == 'block') {
      console.log($("[data-addbox='"+bttnType+"']").css('display'));
      $("[data-addbox='"+bttnType+"']").css('display','none');
      console.log($("[data-addbox='"+bttnType+"']").css('display'));
    } else {
      console.log($("[data-addbox='"+bttnType+"']").css('display'));
      $("[data-addbox='"+bttnType+"']").css('display','block');
    };
  };

  $("[data-addbttn='member']").click(()=>{
    console.log("The member click worked");
    addBttnTool('member');
  });

  $("[data-addbttn='recipient']").click(()=>{
    console.log("The recipient click worked");
    addBttnTool('recipient');
  });

  $("[data-addbttn='casualty']").click(()=>{
    console.log("The casualty click worked");
    addBttnTool('casualty');
  });

  $("[data-addbttn='conflict']").click(()=>{
    console.log("The conflict click worked");
    addBttnTool('conflict');
  });

  // Open or close a casualty's information
  $("[data-casualtybttn]").click(()=>{
    let casualtyId = event.target.dataset.casualtybttn;
    if ($("[data-casualtybox='" + casualtyId + "']").css('display') == 'none') {
      $("[data-casualtybox='" + casualtyId + "']").css('display','block');
    } else {
      $("[data-casualtybox='" + casualtyId + "']").css('display','none');
    };
  });

  // Opens the option for casualty deletion
  $("[data-delcasbttn]").click(()=>{
    console.log("This happened");
    let delCasId = event.target.dataset.delcasbttn;
    console.log(event.target.dataset.delcasbttn);
    if ($("[data-delcasbox='" + delCasId + "']").css('display') == 'none') {
      $("[data-delcasbox='" + delCasId + "']").css('display','block');
    };
  });

  // Closes the option for casualty deletion
  $("[data-cancelcasbttn]").click(()=>{
    let cancelId = event.target.dataset.cancelcasbttn;
    if ($("[data-delcasbox='" + cancelId + "']").css('display') == 'block') {
      $("[data-delcasbox='" + cancelId + "']").css('display','none');
    };
  });

  // Create slot to add links to casualty
  const makeAddLink = (linkTypePlural,linkTypeSingular,linkTypeShort) => {
    $("[data-linkbttn='" + linkTypePlural + "']").click(()=>{
      let currentList = $(".linkIdList").val();
      let newIdNum;
      if (currentList != '') {
        currentArray = currentList.split(',');
        let highestNum = 0;
        for (let listNum = 0; listNum < currentArray.length; listNum++) {
          let thisNum = parseInt(currentArray[listNum]);
          if (highestNum < thisNum) {
            highestNum = thisNum;
          };
        };
        newIdNum = highestNum + 1;
        newIdNumString = newIdNum.toString();
      } else {
        newIdNum = "1";
      };
      if (currentList == '') {
        currentList = newIdNum;
      } else {
        currentList = currentList.concat(",",newIdNumString);
      };
      $(".linkIdList").val(currentList);
      $(".linkBox").append("\
        <div data-linkboxtype='"+linkTypeSingular+"' data-linkboxnum='" + newIdNum + "'>\
          <input type='text' name='" + linkTypeShort + "_link_name_"+newIdNum+"' placeholder='Link Name' />\
          <input type='text' name='" + linkTypeSingular + "_link_"+newIdNum+"' placeholder='Link URL' />\
          <div data-deletetype='" + linkTypeSingular + "' data-deletenum='" + newIdNum + "' class='btn btn-danger'>X</div>\
        </div>");
      $('[data-deletetype][data-deletenum]').off('click');
      $('[data-deletetype][data-deletenum]').on('click',()=>{
        let deleteType = event.target.dataset.deletetype;
        let deleteNum = event.target.dataset.deletenum;
        // Removes the element
        $("[data-linkboxtype='" + deleteType + "'][data-linkboxnum='" + deleteNum + "']").remove();
        // Takes it off of the .linkIdList
        let removedFromList = $(".linkIdList").val();
        let cleanedArray = [];
        let cleanedList = "";
        let removedFromArray = removedFromList.split(',');
        for (let removalListNum = 0; removalListNum < removedFromArray.length; removalListNum++) {
          if (removedFromArray[removalListNum] != deleteNum) {
            cleanedArray.push(removedFromArray[removalListNum]);
            cleanedList = cleanedArray.join();
          };
        };
        $(".linkIdList").val(cleanedList);
        console.log($(".linkIdList").val());
      });
      console.log($(".linkIdList").val());
    });
  };

  makeAddLink("casualties","casualty","cas");
  makeAddLink("recipients","recipient","moh");

  // Open or close a MOH recipient's information
  $("[data-recipientbttn]").click(()=>{
    let recipientId = event.target.dataset.recipientbttn;
    if ($("[data-recipientbox='" + recipientId + "']").css('display') == 'none') {
      $("[data-recipientbox='" + recipientId + "']").css('display','block');
    } else {
      $("[data-recipientbox='" + recipientId + "']").css('display','none');
    };
  });

  // Opens the option for recipient deletion
  $("[data-delrecipientbttn]").click(()=>{
    console.log("This happened");
    let delRecipientId = event.target.dataset.delrecipientbttn;
    console.log(event.target.dataset.delcasbttn);
    if ($("[data-delrecipientbox='" + delRecipientId + "']").css('display') == 'none') {
      $("[data-delrecipientbox='" + delRecipientId + "']").css('display','block');
    };
  });

  // Closes the option for recipient deletion
  $("[data-cancelrecipientbttn]").click(()=>{
    let cancelRecipientId = event.target.dataset.cancelrecipientbttn;
    if ($("[data-delrecipientbox='" + cancelRecipientId + "']").css('display') == 'block') {
      $("[data-delrecipientbox='" + cancelRecipientId + "']").css('display','none');
    };
  });

  // Open or close connecting members to CMOH recipients
  $("[data-gotcmohbttn]").click(()=>{
    let recipientId = event.target.dataset.gotcmohbttn;
    if ($("[data-gotcmohbox='" + recipientId + "']").css('display') == 'none') {
      $("[data-gotcmohbox='" + recipientId + "']").css('display','block');
    } else {
      $("[data-gotcmohbox='" + recipientId + "']").css('display','none');
    };
  });

  // Open or close connecting members to casualties
  $("[data-gotkilledbttn]").click(()=>{
    let recipientId = event.target.dataset.gotkilledbttn;
    if ($("[data-gotkilledbox='" + recipientId + "']").css('display') == 'none') {
      $("[data-gotkilledbox='" + recipientId + "']").css('display','block');
    } else {
      $("[data-gotkilledbox='" + recipientId + "']").css('display','none');
    };
  });

  // Open or close connecting members to casualties
  $("[data-gotkilledbttn]").click(()=>{
    let recipientId = event.target.dataset.gotkilledbttn;
    if ($("[data-gotkilledbox='" + recipientId + "']").css('display') == 'none') {
      $("[data-gotkilledbox='" + recipientId + "']").css('display','block');
    } else {
      $("[data-gotkilledbox='" + recipientId + "']").css('display','none');
    };
  });

  // Open or close connecting casualty to a CMOH recipient
  $("[data-gotmedalbttn]").click(()=>{
    let medalId = event.target.dataset.gotmedalbttn;
    if ($("[data-gotmedalbox='" + medalId + "']").css('display') == 'none') {
      $("[data-gotmedalbox='" + medalId + "']").css('display','block');
    } else {
      $("[data-gotmedalbox='" + medalId + "']").css('display','none');
    };
  });

  // Open or close box for changing conflict
  $("[data-conflictbttn]").click(()=>{
    let conflictId = event.target.dataset.conflictbttn;
    if ($("[data-conflictbox='" + conflictId + "']").css('display') == 'none') {
      $("[data-conflictbox='" + conflictId + "']").css('display','block');
    } else {
      $("[data-conflictbox='" + conflictId + "']").css('display','none');
    };
  });

  // Open or close box to add war/conflict to member's record
  $("[data-addwarbttn]").click(()=>{
    let addWarId = event.target.dataset.addwarbttn;
    if ($("[data-addwarbox='" + addWarId + "']").css('display') == 'none') {
      $("[data-addwarbox='" + addWarId + "']").css('display','block');
    } else {
      $("[data-addwarbox='" + addWarId + "']").css('display','none');
    };
  });

});
