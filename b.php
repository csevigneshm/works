<?php

define('HOST','localhost');
define('USER','root');
define('PASS' ,'');
define('DBNAME', 'Office');
class DB
{
 function __construct()
 {
$con  = mysqli_connect(HOST,USER,PASS,DBNAME);
$this->connection=$con;
 }
 public function exec_query($qry)
 {
     $query="select * from $qry";
     $result=mysqli_query($this->connection,$query);
     return $result;
 }
  public function fetch($fetch)
 {
     $Fsql=mysqli_fetch_array($fetch);
     return $Fsql;
    
 }
function fetch_next($fetch){
     	$i=0;
     	while($rows = $this->fetch($fetch)){
     		$cont[$i]['id']=$rows['id'];
     		$cont[$i]['Name']=$rows['Name'];
     		$cont[$i]['City']=$rows['City'];
     		$i++;
     	}
        return $cont;
     }
  public function get_namecity($id)
  {
     $sql=mysqli_query($this->connection,"SELECT Name,City FROM Employees WHERE id=$id"); 
     return $sql;
    
  }    

  //      public function get_city($id)
  // {
  //    $sql=mysqli_query($this->connection,"SELECT City FROM Employees WHERE id=$id"); 
  //    return $sql;
    
  // }    

   public function update($name,$city,$id){
    $update = "UPDATE Employees SET Name = '$name', City = '$city' WHERE id = $id ";
    $res=mysqli_query($this->connection,$update);
    return $res;
 } 
     


}