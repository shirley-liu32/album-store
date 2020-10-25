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


$(document).ready(function(){
    $("a.button").click(function(){
        var button_status = false;
        $(this).toggleClass("down");
        if ($(this).hasClass("down")){
            $(this).text("In Cart");
            button_status = true;
            console.log(button_status);
        }
        else{
          $(this).text("Order") ;
          button_status = false;
          console.log(button_status);
        }
    });
});


function setCookie(){
  var b1class = document.getElementsByTagName('a')[0].className;
    var date = new Date("February 10, 2021");
    var dateString = date.toGMTString();
    var cookieString = "blclass: " + b1class;
    document.cookie = cookieString;
    var b2class = document.getElementsByTagName('a')[1].className;
    var cookieString2 = "b2class: " + b2class;
    document.cookie = cookieString2;

}
