function check(){
if(document.frm.fname.value.length<1){
alert("Enter the First Name");
document.frm.fname.focus();
return false;
}
if(document.frm.lname.value.length<1){
alert("Enter the Last Name");
document.frm.lname.focus();
return false;
}
if(document.frm.email.value.length<1){
alert("Enter the Email");
document.frm.email.focus();
return false;
}
if(document.frm.password.value.lenght<1){
alert("Enter the Password");
document.frm.password.focus();
return false;
}
if(document.frm.conps.value.length<1){
alert("Enter the Confirm Password");
document.frm.conps.focus();
return false;
}
if(document.frm.password.value!=document.frm.conps.value){
alert("Password and Confirm Password do not match");
document.frm.password.focus();
return false;
}
return true;
}