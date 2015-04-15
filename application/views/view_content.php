<html>
<head>
	<title>Status</title>

	<script>  
	function DisEn(X){  
		document.A.T1.disabled=X;
		document.A.T2.disabled=X;
	}  
	</script>

</head>
<body>
	<h1> Status of EVERYONE </h1>
	<table border=1>
		<?php	foreach($records as $row):		?>
		<tr>
			<td><?php echo $row->id; ?> </td>
			<td><?php echo anchor("main/memberlogin?id=$row->name","$row->name"); ?></td>
			<td><img height=10px weight=10px src="<?php echo base_url()?>assets/images/on.png" ></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php 

$datestring = "%Y-%m-%d %h:%i:%s";
$time = time();

echo mdate($datestring, $time);


?>

<form name="A" >
	<span class="toggle-bg">
		<input type="radio" name="toggle" value="off" onClick="DisEn(false)">
		<input type="radio" name="toggle" value="on" onClick="DisEn(true)">
		<span class="switch"></span>
	</span>
	<input type="text" name="T1" value="A" disabled>  
	<input type="text" name="T2" value="B" disabled>  
</form>

</body>
</html>





