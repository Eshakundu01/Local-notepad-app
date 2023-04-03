$(function () {
  $("#id").on("change", function() {
    if ($(this).val().length < 8) {
      $("#id-error").html("The length of the id must be atleast 8");
      $('#save').prop("disabled",true);
    } else {
      if ($(this).val().length > 13) {
        $("#id-error").html("The maximum length accepted is 13");
        $('#save').prop("disabled",true);
      }
    }
  });

  $("#title").on("change", function() {

    if (validateinputs($(this).val())) {
      $("#title-error").html("");
      $('#save').prop("disabled",false);
    } else {
      $("#title-error").html("Only alphabets and space are allowed");
      $('#save').prop("disabled",true);
    }
  });

  $("#genre").on("change", function() {

    if (validateinputs($(this).val())) {
      $("#genre-error").html("");
      $('#save').prop("disabled",false);
    } else {
      $("#genre-error").html("Only alphabets and space are allowed");
      $('#save').prop("disabled",true);
    }
  });

  $("#author").on("change", function() {

    if (validateinputs($(this).val())) {
      $("#author-error").html("");
      $('#save').prop("disabled",false);
    } else {
      $("#author-error").html("Only alphabets and space are allowed");
      $('#save').prop("disabled",true);
    }
  });

  $("#category").on("change", function() {

    if (validateinputs($(this).val())) {
      $("#category-error").html("");
      $('#save').prop("disabled",false);
    } else {
      $("#category-error").html("Only alphabets and space are allowed");
      $('#save').prop("disabled",true);
    }
  });

  function validateinputs(value) {
    var pattern = /^[a-zA-Z-' ]+$/;

    return $.trim(value).match(pattern) ? true : false;
  }

  $("#rate").on("change", function() {
    if (validaterate($(this).val())) {
      $('#rate-error').html("");
      $('#save').prop("disabled",false);
    } else {
      $("#rate-error").html("Only numbers and a single period is allowed");
      $('#save').prop("disabled",true);
    }

    if ($(this).val().length > 5) {
      $("#rate-error").html("The maximum length accepted is 5 including period");
      $('#save').prop("disabled",true);
    }
  });

  function validaterate(value) {
    var pattern = /^[0-9]+[.][0-9]+$/;

    return $.trim(value).match(pattern) ? true : false;
  }
});
