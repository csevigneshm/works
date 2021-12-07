<?
include "b.php";


$obj=new DB();
$id=$_POST['num'];

$sql=$obj->get_namecity($id);


while($rowData = mysqli_fetch_assoc($sql)){

	echo $rowData['Name']."#".$rowData['City'];
}





?>
