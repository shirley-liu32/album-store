//final javascript file
function validateEmail(){
  var email = document.customer.email;
  var first = email.value.substring(0,1);
  var second = email.value.substring(1,2);
  var third = email.value.substring(2,3);
  var last_three = email.value.substring(3,6);
    if (email.value.length != 6){
      window.alert("Please enter a valid NYU email address.");
      email.focus();
      return false;
    }
    if ((!isNaN(first)) || (!isNaN(second) || (!isNaN(third)) )) {
      window.alert("Please enter a valid NYU email address.");
      email.focus();
      return false;
    }
    if (isNaN(last_three)){
      window.alert("Please enter a valid NYU email address.");
      email.focus();
      return false;
    }
} // end validateEmail -- used for netids with three letters and three numbers ex: abc123@nyu.edu


function buyAlbum(){
  var b1 = document.order.b1.value;
  var b2 = document.order.b2.value;
  var b3 = document.order.b3.value;
  var b4 = document.order.b4.value;
  var b5 = document.order.b5.value;
  var b6 = document.order.b6.value;
  var b7 = document.order.b7.value;
  var b8 = document.order.b8.value;

  if (b1 != "In Cart" && b2 != "In Cart" && b3 != "In Cart" && b4 != "In Cart"
  && b5 != "In Cart" && b6 != "In Cart" && b7 != "In Cart" && b8 != "In Cart"){
      window.alert("Please add at least one album to the cart.");
      return false;
    }


} // end buyAlbum() --- check if user buys at least one album


$(document).ready(function(){
    $("input[name = 'b1']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn1').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn1').val('false');
        }
    });
    $("input[name = 'b2']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn2').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn2').val('false');
        }
    });
    $("input[name = 'b3']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn3').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn3').val('false');
        }
    });
    $("input[name = 'b4']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn4').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn4').val('false');
        }
    });
    $("input[name = 'b5']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn5').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn5').val('false');
        }
    });
    $("input[name = 'b6']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn6').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn6').val('false');
        }
    });
    $("input[name = 'b7']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn7').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn7').val('false');
        }
    });
    $("input[name = 'b8']").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")) {
            $(this).val("In Cart");
            button_status = true;
             $('#btn8').val('true');
        }
        else{
          $(this).val("Order") ;
          button_status = false;
          $('#btn8').val('false');
        }
    });

});
