<?php
$connect = mysqli_connect("localhost", "root", "", "books_all");
$output = '';
if(isset($_POST["query"]))
		 
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM janr 
	WHERE name_janr LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM janr ORDER BY name_janr";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Название жанра</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["name_janr"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>