<html>
    <head>
	  <meta charset="utf-8">
        <title>Calculadora</title>  
        <link  href="css/bootstrap.css" rel="stylesheet" />
    </head>
<body>
 
	<form method="POST" action="CalculadoraRecebe.php">
		<center><h1>Calculadora</h1></center>
			<center> 
				<table border = 1 align = center>
				 Número 1: 
				 <input type=text name=numero1 size=4> <br/>  <br/>
				 Número 2 :
				 <input type=text name=numero2 size=4> <br/>
         </center>
	<br>  <br>
    <button type="submit" class="btn btn-primary" name=acao value=somar>SOMAR</button>
	<button type="submit" class="btn btn-danger" name=acao value=subtrair>SUBTRAIR</button>
	<button type="submit" class="btn btn-primary" name=acao value=multiplicar>MULTIPLICAR</button>
	<button type="submit" class="btn btn-danger" name=acao value=dividir>DIVIDIR</button>

	</center>
	
</body>
</html>