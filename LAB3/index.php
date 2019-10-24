<?php
require "vendor/autoload.php";
$v = new  Valitron\Validator($_POST );
$v->rules([
    'requiredWithout' => [
        ['token', ['email', 'password'], true]
    ],
    'requiredWith' => [
        ['password', ['email']]
    ],
    'email' => [
        ['email']
    ],
    'optional' => [
    ['email']
]
]);
if ( $v-> validate ()) {
echo " Ух! У нас все хорошо! " ; } else {
    print_r($v->errors());
}
?>

<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Date personale</title>
	</head>
	<body>
	<form action="" method="POST">
		Nume<imput type="text" name="name">
			<br>
		email<imput type="email" name="mail">
			<br>
		Telefon<imput type="tel" name="phone">
			<br>
		Virsta<imput type="number" min="0" name="age">
			<br>
		Data nasterii<imput type="date" name="date">
			<br>
		Parola<imput type="password" name="">
			<button> Confirm</button>

		
	</form>
	</body>
	</html>