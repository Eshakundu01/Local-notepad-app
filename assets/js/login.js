$(function () {
  $("#display").on("click", function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
    $("#pass").attr("type", type);
  });

  $("#user_name").on("change", function() {
    var input = $(this).val();
    if (input != "") {
      $.ajax ({
        url:'/login/authenticate',
        method:'POST',
        data:{name:input},
        dataType:'json',

        success:function(data) {
          if (data.error) {
            $('#name').html(data.error);
            $('#name').css("display", "block");
            $('#submit').prop("disabled", true);
          } else {
            $('#name').html("");
            $('#name').css("display", "block");
            $('#submit').prop("disabled", false);
          }
        }
      });
    } else {
      $('#name').css("display", "none");
    }
  });


  $("#pass").on("keyup", debounce(function() {
    var input = $(this).val();
    if (input != "") {
      $.ajax ({
        url:'/login/authenticate',
        method:'POST',
        data:{key:input},
        dataType:'json',

        success:function(data) {
          if (data.error) {
            $('#code').html(data.error);
            $('#code').css("display", "block");
            $('#submit').prop("disabled", true);
          } else {
            $('#code').html("");
            $('#code').css("display", "block");
            $('#submit').prop("disabled", false);
          }
        }
      });
    } else {
      $('#code').css("display", "none");
    }
  }, 900));

  function debounce(callback, interval, immediate) {
    var timeout;
  
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) callback.apply(context, args);
      };          
  
      var callNow = immediate && !timeout;
  
      clearTimeout(timeout);
      timeout = setTimeout(later, interval);
  
      if (callNow) callback.apply(context, args);
    };
  }
});
