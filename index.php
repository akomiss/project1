<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
 function myFunction() {
 	return $_REQUEST["name"];
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
 	echo myFunction();
 }

 echo $_SERVER['SERVER_SIGNATURE']
 ?>
 </body>
 <body>
 	<?php $initSVal = 'abc'; ?>
 <form method='post' action = '<?php echo $_SERVER["PHP_SELF"]?>'>
 	Name: <input type='text' name='name'>
 	<input type='submit'>
 </form>
 </body>
</html>