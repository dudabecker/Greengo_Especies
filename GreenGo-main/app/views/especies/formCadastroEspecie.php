<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Cadastro de especies</h2>

<form action="/greengoespecie/Greengo_Especies-main/GreenGo-main(4)/GreenGo-main/app/controllers/EspecieController.php?action=create" method="POST">
	Nome Popular: <input type="text" name="nomePop">
	<br>
	Nome Cientifico: <input type="text" name="nomeCie">
	<br>
	Descrição: <input type="text" name="descricao">
	Imagem: <input type="text" name="imagem">
	<br><br>

	Atributos Especiais: <br><br>
	Frutifera 	<input type="checkbox" name="frutifera" value="1"><br>
	Tóxica 		<input type="checkbox" name="toxidade" value="1"><br>
	Exótica	<input type="checkbox" name="exotica" value="1"><br>
	Rara		<input type="checkbox" name="raridade" value="1"><br>
	Medicinal	<input type="checkbox" name="medicinal" value="1">
	<br>

	<input type="submit" value="Registrar">
	<input type="reset" value="Limpar">
</form>		
</body>
</html>