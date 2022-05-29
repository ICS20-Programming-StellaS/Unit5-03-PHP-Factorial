<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Factorial, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Factorial in PHP</title>
  </head>
  <body>

	  
    <h1>Factorial in PHP</h1>
	<table>
		<tr align = "center">
			<td valign="top" align="right">					
				<form action="./results.php" method="post" target="result">
					<label for="userNum">Enter in a Number:</label>
					<input type="number" name="userNum" id="userNum"><br><br>	
					
					<input type="submit" value="Display Numbers">
				</form>
			</td>
			<td valign="top" align="left">
				<img src="./images/Numbers_1.jpg" alt="numbers" width="20%">
			</td>
		</tr>
	</table>	
	
	<!-- Iframe for results -->
	<iframe id="result" name="result">
	</iframe>
	
  </body>
</html>