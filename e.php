<?
include "b.php";


$updatedata=new DB();
$name=$_POST['user'];
$city=$_POST['town'];
$id=$_POST['num'];
$Usql=$updatedata->update($name,$city,$id);

if($Usql)
{
echo'Data Updated';
}
else
{
echo 'Data not Updated';
}


?>