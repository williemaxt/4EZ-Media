 // Getting inputs from the forms

var email_prompt =document.getElementById('email_prompt');
var first_name = document.getElementById('first_name');
var last_name = document.getElementById('last_name');
var email = document.getElementById('email');
var telephone = document.getElementById('telephone');
var comments = document.getElementById('comments');
var submit_btn = document.getElementById('submit');
var booking = document.getElementById('booking');

//XBCEL Event Listener for button
submit_btn.addEventListener('click', function(){
  submit_form();
});

//Function to validate form
function submit_form(){
  if(first_name.value == ""){
    email_prompt.innerHTML = "First Name Cannot Be Empty";
  } else if (last_name.value == "") {
    email_prompt.innerHTML = "Last Name Cannot Be Empty";
  } else if (email.value == "") {
    email_prompt.innerHTML = "Email Cannot Be Empty";
  } else if (telephone.value == "") {
    email_prompt.innerHTML = "Telephone Cannot Be Empty";
  } else if (comments.value == "") {
    email_prompt.innerHTML = "Comments Cannot Be Empty";
  } else {

    var ajax = new XMLHttpRequest();
    ajax.open('post', './send_form_email.php', true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send('first_name='+first_name.value+'&last_name='+last_name.value+"&email="+email.value+"&telephone="+telephone.value+"&comments="+comments.value);
    booking.innerHTML = this.responseText;
  }
  return false;
}
