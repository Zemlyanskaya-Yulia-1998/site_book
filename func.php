<?php
function get_janr(){
	global $link;
    $sql= 'SELECT * FROM janr';
    $result = mysqli_query($link,$sql);
    $janr = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo mysqli_error($link);
    return $janr;
}
?>




