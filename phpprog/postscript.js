function check(){
	if(document.frm.name.value.length<1)
		alert("Please enter your name");
	if(document.frm.location.value.length<1)
		alert("Please enter the link of the location");
	if(document.frm.ncity.value.length<1)
		alert("Please enter the nearest city from the location");
	if(document.frm.dis.value.length<1)
		alert("Please Enter the district");
	if(document.frm.prov.value.length<1)
		alert("Please enter the province");
	if(document.frm.distance.value.length<1)
		alert("Enter the distance");
	if(document.frm.description.value.length<1)
		alert("Description is empty");
	
}