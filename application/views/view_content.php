<html>
<head>
	<title>Status</title>
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


<?php 

$datestring = "%Y-%m-%d %h:%i:%s";
$time = time();

echo mdate($datestring, $time);


?>

</body>
</html>