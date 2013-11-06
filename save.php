<?php

if($_POST["ver"])
{
  $uname=$_POST["manager"];
  $upass=$_POST["roomkey"];
  
 if((strcmp($uname,"cuic")==0) && (strcmp($upass,"cuic_au")==0))
{

include('arrcreator.php');
 ob_start();
 mysql_connect($host,$user,$pass);
 mysql_select_db($db_name);
 $sql = "SELECT * from basic_det";
 $res = mysql_query( $sql) or die();
 $count = mysql_num_fields($res);

 // fetch table header from database
 $header = '';
 for ($i = 0; $i < $count; $i++){
    $header .= mysql_field_name($res, $i).",";
    
    }

 // fetch data each row, store on tabular row data
 while($row = mysql_fetch_row($res)){
   $line = '';
   foreach($row as $value){
   if(!isset($value) || $value == ""){
     $value = ",";
   }else{
      
     $value = str_replace('"', '""', $value);
     $value = $value . ",";
     
   }
   $line .= $value;
   }
   $data .= trim($line)."\n";
   $data = str_replace("\r", "", $data);
  }
 
$name=date('d-m-y').'-list.xls';
header("Content-type:application/vnd.ms-excel;name='excel'");
 header("Content-Disposition: attachment; filename=$name");
 header("Pragma: no-cache");
 header("Expires: 0");

 // Output data
 echo $data;
}
else
{
 echo "Invalid username or password" ;
}
}

else
{
  include('forbidden.html');
}
 ?>
