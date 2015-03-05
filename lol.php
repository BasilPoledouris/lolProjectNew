

<html>
<body>
	<h3>
		This is a program that tests your manhood. It compares your name with the word faget in your mother tongue and 
		retrieves the percentage of similarity. <br><br><br><br>
	</h3>
	<form action="lol.php" method="GET">
		<b>Insert your name (at least two names are required)</b><br>
		<input type="text" name='name' /><br>
		<b>Insert the word for faget in your mother tongue</b><br>
		<input type = "text" name='faget' /><br><br><hr/>
		<input type = "submit" value = "submit"/>
	<form>
</body>
</html>

<?php
if ( ( isset ($_GET['name'])&&!empty($_GET['name']) ) && ( isset ($_GET['faget'])&&!empty($_GET['faget']) ) ) {
	$name1 = $_GET['name'];
	$faget1 = $_GET['faget'];
	
	$name = strtolower ($name1);
	$faget = strtolower($faget1);
	
	if( $name != 'joão ferraz' && $name != 'joão pedro ferraz'&& $name != 'joão pedro ferreira ferraz' && $name != 'joão pedro ferreira abrantes ferraz'
	&& $name!= 'joão seco'&& $name != 'joão fazendeiro seco' && $name != 'ivan do carmo'){
		similar_text($name, $faget, $result);
		echo $result .'% Similarity between your name and '.$faget1.'.';
	}elseif ($name == 'joão seco' || $name == 'joão fazendeiro seco') {
		echo '99%';
	}elseif($name == 'ivan do carmo'){
		echo 'You have broken the scale! You are a faget queen!';
	}else{
		echo '0% Similarity between your name and faget. You are a true Macho Man!';
	};
}else{
echo 'All fields are requested. Please, fill them and retry.';
};

?>

