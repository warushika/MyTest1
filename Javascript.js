function check1(){
	var x=document.forms["login"]["name"].value;
	var y=document.forms["login"]["password"].value;
	if(x == "")
		{
		alert("Please enter the name");	
		return false;
		}
	if(y == "")
		{
		alert("Please enter the password");	
		return false;
		}
}