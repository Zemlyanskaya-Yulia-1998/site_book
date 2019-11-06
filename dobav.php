<?php
$link = mysqli_connect('localhost','root','','books_all');

if (mysqli_connect_errno())
{
echo 'Ошибка';
exit();
}?>
<?php
    require_once 'func.php';
?>




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
     
    </div>
  </nav> <br> <br><br><br>

<p><img src="image/6.jpg" alt="Иллюстрация" 
   width="200" height="272" class="rightpic" style=float:right;>
<p><img src="image/7.jpg" alt="Иллюстрация" 
   width="200" height="272" class="leftpic" style=float:left;>   
 <h4 class='zag'> <p style="font:italic 40px bold "Times New Roman", Times, serif" align="center"> Добавьте жанр:</p></h4> <br>
 <form method="POST" action="vivod.php">
 <p align="center">
	<small class="form-text text-muted">Введите название жанра</small>
	<input class="form-control" name="name_janr" type="text" style="width: 300px" style="center"/><br>
  <input class="btn btn-primary" href= 'vivod.php' type="submit" value="Добавить" style =background-color:#424242 /> </p>
 </form></div> <br>

<hr style='height: 4'>
    <h4 > <p style="font:italic 40px bold "Times New Roman", Times, serif" align="center"> Добавьте книгу:</p> </h4> <br>
      <?php 
	   $janr = get_janr($link);?> 
         
       <div>  
		<center> 
		  <form method="GET" action="vivod.php">
			      <p align="center"> <small id="emailHelp" class="form-text text-muted">Выберете жанр</small>
                     <div><select name="id_janr" class="form-control" style="width: 300px" style="center" > </p>
					 <?php foreach ($janr as $ja):?>   
                       <a> <option value="<?=$ja['id']?>"><?=$ja['name_janr']?></a></option>
                <?php endforeach; ?> 
                     </select>
					 </div><br>
					  
					<small class="form-text text-muted">ФИО</small>
					<input class="form-control" name="fio" type="text" style="width: 900px" style="center"/> <br>
					<small class="form-text text-muted">Название книги</small>
					<input class="form-control" name="name" type="text" style="width: 900px" style="center"/> <br>
					<small class="form-text text-muted">Количество страниц</small>
					<input class="form-control" name="kol" type="number" style="width: 300px" style="center" min = "0" max = "9000" maxlength="4"/> <br>
					<small class="form-text text-muted">Издание</small>
					<input class="form-control" name="izd" type="text" style="width: 900px" style="center" /> <br>
					<small class="form-text text-muted">Год издания</small>
					<input class="form-control" name="god" type="number" style="width: 300px" style="center" min = "1800" max = "2021" maxlength="4"/> <br>
					<input class="btn btn-primary" type="submit" value="Добавить" style =background-color:#424242 />
		 
           </form>
		   </center> 
       </div> 

 <center> 
<footer class="container">
    <p>© 2019 Kolesnikova Alina, Inc.</p>
  </footer>
  </center> 
</body>
</html>
