<?
include "b.php";


$obj=new DB();
$id=$_POST['num'];

$sql=$obj->get_city($id);

	while($rowData = mysqli_fetch_assoc($sql))
	{
		echo $rowData['City'];
	}
// alert (a); in ajax


        // convert=JSON.parse(resp);
        // $('#name').val(convert.name);
        // $('#city').val(convert.city);

// 	in post file while($rowData = mysqli_fetch_assoc($sql))
// 	{
	
// 		$arr['name']=$rowData['Name'];
// 		$arr['city']=$rowData['City'];

//         echo json_encode($arr);
        
           
        

// }



?>