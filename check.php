<html>
<head>
</head>
<body>
<form name="reg" onsubmit="return valid()">
	Name: <input type="text" name="nam"><br>
	Email: <input type="email" name="email"><br>
	Contact: <input type="number" name="phone" min="7000000000" max="9999999999"><br>
	<button type="submit" ></button>
</form>
</body>
<script>
	function valid()
	{
		var name = document.reg.nam;
		var con = document.reg.phone;
		if(name.value == '')
		{
			alert("Name: " + name.value + " should not be null");
			name.focus();
			return false;			
		}
		else
		if(con.value == '')
		{
			alert("Con: " + con.value  + " should not be null");
			con.focus();
			return false;
		}
	}
</script>
