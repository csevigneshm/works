<?php
include_once("b.php");
$fetchdata=new DB();
$qry="Employees";
$fetch=$fetchdata->exec_query($qry);
$data=$fetchdata->fetch_next($fetch);
?>


<!DOCTYPE html>
<html>
<head>
  <title>GET TEXT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background: linear-gradient(to left,lightyellow,lightblue)" >

   
<p> Choose User ID
<select id="id" onchange="change()" >
  <?php
  foreach ($data as $key => $value) {
    $num=$value['id'];
  ?>
<option value="<?php echo $num;?>" > <?php echo $num; ?> 
</option>
   <?php
   }
   ?>

</select>

</p>
 Name  : <input id="name" type="text" name="name" value=""/>
<br/><br/>
City : <input id="city" type="text" name="City" />
<br/>
<br/>
<button onclick="june()" >Update</button>
<script>
  function change(){
  
  var id=$("#id").val();

  if(id!='')
     $.ajax(
     {
     type:"POST",
     url: "c.php",
     data:'num='+id,

     success: function(resp)
       {
        
        

        var a=resp.split("#");
        $('#name').val(a[0]);
        $('#city').val(a[1]);
        
  

    
       }
     });
 };

function june()
  {
  var id=$("#id").val();
  var name=$("#name").val();
  var city=$("#city").val();


  if(id,name,city!='')
     $.ajax(
     {
     type:"POST",
     url: "e.php",
     data:'user='+name+'&town='+city+'&num='+id,

     success: function(resp)
       {


      alert(resp);
    
       }
     });
 };

</script>


</body>

</html>
