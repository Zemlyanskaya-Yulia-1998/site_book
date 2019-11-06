<?php
$link = mysqli_connect('localhost','root','','books_all');

if (mysqli_connect_errno())
{
echo 'Ошибка';
exit();
}?>
<!DOCTIPE html>
<html lang='ru'>
<head>
  <meta charset = 'UFT-8'>
  <meta name='viewport' content = 'width=device-width, initial - scale=1.0'>
  <meta http-equiv='X-UA-Copatible' content='ie=edge'>
  <link rel="SHORTCUT ICON" href="image/icon.png" type="image/x-icon">
  <link rel='stylesheet' href ='style.css'>
  <link rel='stylesheet' href ='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<title> Книжный сайт </title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Книжный сайт</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dobav.php">Добавить книгу и жанр</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aja.php">Поиск</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav> <br> <br><br><br>
<?php 
if (isset($_POST['name_janr'])){

    // Переменные с формы
    $name_janr = $_POST['name_janr'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'books_all'; // Имя БД
    $db_table = "janr"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
   $sel = "SELECT * FROM janr WHERE name_janr = '$name_janr'";
	$res = mysqli_query($mysqli,$sel);
	$num = mysqli_num_rows($res);
	if ($num ==0){
		$result = $mysqli->query("INSERT INTO ".$db_table." (name_janr) VALUES ('$name_janr')");
	
		if ($result == true){
			echo '<div style="text-align: center;"><font size="6" color="green" style="vertical-align: inherit;"> Жанр добавлен <font style="vertical-align: inherit;"> </font></font></div><br>';
		}else{
			echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Жанр не добавлен <font style="vertical-align: inherit;"> </font></font></div><br>';
		}
				}
	else { echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Жанр уже существует <font style="vertical-align: inherit;"> </font></font></div><br>';}
}?>
<hr style='height: 4'>  
<?php
if (isset($_GET['id_janr']) && isset($_GET['fio']) && isset($_GET['name'])&& isset($_GET['kol'])&& isset($_GET['izd']) && isset($_GET['god'])){

    // Переменные с формы
    $id_janr = (INT)$_GET['id_janr'];
    $fio = $_GET['fio'];
    $name = $_GET['name'];
	$kol = $_GET['kol'];
    $izd = $_GET['izd'];
	$god = $_GET['god'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'books_all'; // Имя БД
    $db_table = "book"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

    $result = $mysqli->query("INSERT INTO ".$db_table." (id_janr,fio,name,kol,izd,god) VALUES ('$id_janr','$fio','$name','$kol','$izd','$god')");
    
    if ($result == true){
    	echo '<div style="text-align: center;"><font size="6" color="green" style="vertical-align: inherit;"> Книга добавлена <font style="vertical-align: inherit;"> </font></font></div><br>';
    }else{
    	echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Книга не добавлена <font style="vertical-align: inherit;"> </font></font></div><br>';
    }
}?>  
  
 <center> 
<footer class="container">

    <p>© 2019 Kolesnikova Alina, Inc.</p>
  </footer>
  </center> 
</body>
</html>