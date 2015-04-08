<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url(); ?>main/display"  onsubmit="return checkPassword()">
		<p>Members Login</p>
    <p style="color: #888">nothing</p>
		<input type="password" name="username"  autofocus required placeholder="Password" id="password">

		<input type="submit" value="Submit" >
	</form>


  <script type="text/javascript">
  function checkPassword()
  {
    var pass= document.getElementById("password").value;

    if(pass === " " || pass != "nothing")
    {
      alert("Incorrect");
      return false;
    }
    return true;

  }


  </script>


</body>
</html>