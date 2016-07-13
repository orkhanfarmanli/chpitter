function openWindow() {
  document.getElementById("image_src").click
}
$(document).ready(function() {
//twit middleside twitRight area js
  $("#twit_input_one").focus(function() {
    $("#twitwrite").removeClass("i_twitWrite").addClass(
      "i_twitWrite_onfocus")
  });

  
   $("#twit_input_one").focusout(function() {
    if ($("#twit_input_one").val() == "") {
      $("#twitwrite").addClass(
        "i_twitWrite").removeClass(
        "i_twitWrite_onfocus")

    }

  })

//twitright area camera icon js for open input type file 
  $("#kamera-main").click(function() {
    $("#image_src").click();
  });
//cover section open input file for cover image
  $("#kamra-cover-profile").click(function() {
    $("#cover_photo").click();
  });
//profile section open input file for profile image
  $("#profile_kamera").click(function() {
    console.log("nese");
    $("#profile_photo").click();
  });

 
  var a = true;
  $("#egg").click(function() {
    if (a) {
      $("#header_droptown").css("display", "block");
      a = false;
    } else {
      $("#header_droptown").css("display", "none");
      a = true;
    }
  })

  $("#F_drpdown").click(function() {
    $("#header_droptown").css("display", "none");
  })

  //popup scripts
  $("#pop_open").click(function() {
    $(".pop_back").css("display", "block");
    $(".pop").css("display", "block");
  })

  $(".pop_back").click(function() {
    if ($("#twit_input").val() == "") {
      $(".pop_back").css("display", "none");
      $(".pop").css("display", "none");
    }
  })


})
