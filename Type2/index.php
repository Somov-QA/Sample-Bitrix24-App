<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Наименование приложения</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="//api.bitrix24.com/api/v1"></script>
	<script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
	<h4>Шаблон приложения для Битрикс24</h4>
	<p>
		<datalist id="listData"></datalist>
		<label for="inputData">Введите путь к карте сайта: </label>
		<input id="inputData" name="inputData" placeholder="Введине данные" value="" list="listData" />
		<button id="buttonPerform">Выполнить</button>
	</p>
</body>
</html>