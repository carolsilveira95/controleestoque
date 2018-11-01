<?php
if(isset($_POST['submit'])){
	$fullname = $_POST['fullname'];
}
?>

<html>
<head>
	<meta charset="utf-8">

	<title>Controlestoque</title>
</head>
<body>
	<form method="POST" action="recebe.php">
		<label>ID</label></br>
			<input type="text" name="id"><br>
		<label>Nome</label></br>
			<input type="text" name="nome"><br>
		<label>Descição</label><br>
			<input type="text" name="descricao"><br><br><br>

		<input type="submit" name="submit" value="Submit">

	</form>
</body>
</html>

