<html>
<head>
	<script type="text/javascript" >  
function validate() 
{  
	var msg;  
	if(document.myForm.userPass.value.length>5){  
    document.getElementById('ss').style.color="green";  
	  document.getElementById('ss').innerText="Good";   
	}  
	else{  
       document.getElementById('ss').style.color="red";  
	    document.getElementById('ss').innerText="poor";  
	}  
	
	 }  
	  
</script> 
</head> 
<body>
	<form name="myForm">  
	<input type="password" value="" name="userPass"
 onkeyup="validate()">  
	Strength:<span id="ss">no strength</span>  
	</form> 
</body> 
</html>
