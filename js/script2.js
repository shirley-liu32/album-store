// function for email with two letters and 4 numbers
function validateEmail(){
  var email = document.customer.email;
  var first = email.value.substring(0,1);
  var second = email.value.substring(1,2);
  var last_four = email.value.substring(2,6);
    if (email.value.length != 6){
      window.alert("Please enter a valid NYU email address.");
      email.focus();
      return false;
    }
    if ((!isNaN(first)) || (!isNaN(second)) ) {
      window.alert("Please enter a valid NYU email address.");
      email.focus();
      return false;
    }
    if (isNaN(last_four)){
      window.alert("Please enter a valid NYU email address.");
      email.focus();
      return false;
    }

}

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
