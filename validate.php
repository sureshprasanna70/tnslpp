<?php
include('arrcreator.php');

$ver=$_POST["ver"];
if($ver)
{
$cname= mysql_real_escape_string($_POST["cname"]);
$reg=$_POST["unireg"];

$clg= $_POST["college"];
$clg_name=$clg_list[$clg];

$dept=mysql_real_escape_string($_POST["dept"]);
$dob= mysql_real_escape_string($_POST["dob"]);
$age=mysql_real_escape_string($_POST["age"]);
$resadd= mysql_real_escape_string($_POST["resadd"]);
$mob_no= $_POST["mobno"];
$email=mysql_real_escape_string($_POST["email"]);
$psslc= mysql_real_escape_string($_POST["psslc"]);
$pdip= mysql_real_escape_string($_POST["pdip"]);
$phsc =mysql_real_escape_string($_POST["phsc"]);
$pug= mysql_real_escape_string($_POST["pug"]);
$ppg= mysql_real_escape_string($_POST["ppg"]);
$ysslc= mysql_real_escape_string($_POST["ysslc"]);
$ydip= mysql_real_escape_string($_POST["ydip"]);

$yhsc=mysql_real_escape_string($_POST["yhsc"]);
$yug=mysql_real_escape_string($_POST["yug"]);
$ypg=mysql_real_escape_string($_POST["ypg"]);
$first=mysql_real_escape_string($_POST["first"]);
$y2=mysql_real_escape_string($_POST["y2"]);
$y3=mysql_real_escape_string($_POST["y3"]);
$y4=mysql_real_escape_string($_POST["y4"]);
$y5=mysql_real_escape_string($_POST["y5"]);
$y6=mysql_real_escape_string($_POST["y6"]);
$bname=mysql_escape_string($_POST["bname"]);
$other=mysql_escape_string($_POST["bname1"]);
$ddno=mysql_escape_string($_POST["ddno"]);
$dddate=mysql_escape_string($_POST["dop"]);
$service=mysql_connect($host,$user,$pass,$db_name);
$flag=1;
if($ysslc==NULL || $psslc==NULL  )
  {
  echo '<link rel="stylesheet" href="css/bootstrap.css"><div class="alert alert-error"> <b>Enter proper value for Diploma passing Year(or Percentage)<br> or zero if not applicable</b></div>';
  $flag=0;
}
if($ydip==NULL || $pdip==NULL  )
{
  echo '<link rel="stylesheet" href="css/bootstrap.css"><div class="alert alert-error"> <b>Enter proper value for Diploma passing Year(or Percentage)<br> or zero if not applicable</b></div>';
  $flag=0;
}
if($phsc==NULL || $yhsc==NULL) 
  {
    echo '<link rel="stylesheet" href="css/bootstrap.css"><div class="alert alert-error"> <b>Enter proper value for HSC  passing Year(or Percentage)<br> or zero if not applicable</b></div>';
    $flag=0;
  }
if($yug ==NULL || $pug==NULL ) 
{
  echo '<link rel="stylesheet" href="css/bootstrap.css"><div class="alert alert-error"> <b>Enter proper value for UG  passing Year(or Percentage)<br> or zero if not applicable</b></div>';
  $flag=0;
}
if($ypg==NULL || $ppg==NULL){
  echo '<link rel="stylesheet" href="css/bootstrap.css"><div class="alert alert-error"> <b>Enter proper value for PG passing Year(or Percentage)<br> or zero if not applicable</b></div>';
$flag=0;
}
if($flag)
{
mysql_select_db($db_name);
$result=mysql_query("SELECT * FROM basic_det");

$count=mysql_num_rows($result)+1;


$query="INSERT INTO basic_det
(id,name,uni_reg,college,dept,res_add,mobno,email_id,
  year_sslc,perc_sslc,ydip,pdip,year_hsc,perc_hsc,year_ug,
  perc_ug,ypg,pug,
  first,second,third,fourth,fifth,sixth,dob,age,BANK_NAME,OTHER,DD_NUMBER,DD_DATE)
VALUES($count,'$cname','$reg','$clg_name','$dept','$resadd','$mob_no','$email',
  $ysslc,$psslc,$ydip,$pdip,$yhsc,$phsc,$yug,$pug,$ypg,$ppg,
  $first,$y2,$y3,$y4,$y5,$y6,'$dob','$age','$bname','$other',$ddno,'$dddate')";
//echo $query;
$res=mysql_query($query);
}
if($res)
{

require('html2fpdf.php');
$mar=array(10, 10, 10, 10);
$pdf=new HTML2FPDF();

$pdf->AddPage();

$strContent = 
'
<!DOCTYPE HTML5>
<html>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<head>
<title>TNSLPP</title>
</head>

<body>

<h3 align="center">Anna University Chennai-25<br>Tamil Nadu State Level Placement Program-2013</h3>

<h4 align="left">PERSONAL DETAILS</h4>
<table>
<tr>
<td width="90%" align="right"><b><u>Affix your photo below</u></b> </td>
</tr>
</table>

<table width="60%" height="100%" border="3">
<tr>
 <td align="left" colspan="2"><b><u>Name:</u></b></td>
 <td align="left">'.$cname.'</td> 
 </tr>
DD DATE
 <tr>
  <td align="left" colspan="2"><b><u>University Register Number:</u></b></td>
  <td align="left" >'.$reg.'</td>
  </tr>
  
  <tr>

  <td align="left" colspan="2"><b><u>College</u></b></td>
  <td align="left">'.$clg_list[$_POST["college"]].'</td>
  </tr>
 
  <tr>
  <td align="left" colspan="2"><b><u>Department</u></b></td>
  <td align="left">
  '.strtoupper($dept).'
  </td>
  </tr>

  <tr>
  <td align="left" colspan="2"><b><u>Date Of Birth</u></b></td>
  <td align="left">'.$dob.'</td>
  </tr>

  <tr>
  <td align="left" colspan="2"><b><u>Age:</u></b></td>
  <td align="left">'.$age.'</td>
</tr>

<tr>
  <td align="left" colspan="2"><b><u>Residential Address</u></b></td>
  <td align="left">'.$resadd.'</td>
  </tr>

  <tr>
    <td align="left" colspan="2"><b><u>MOBILE NUMBER</u></b></td>
  <td align="left">'.$mob_no.'</td>
  </tr>

  <tr>
    <td align="left" colspan="2"><b><u>E-MAIL &nbsp;&nbsp;ID</u></b></td>
  <td align="left">'.$email.'</td>
  </tr>
  </table>

  </div>
  
  
  <h4 align="left">ACADEMICS</h4>
<table width="100%" height="100%" border="3">

    <tr>
  		<td><b><u>Course</u></b></td>
  		<td><b><u>SSLC</u></b></td>
      <td><b><u>DIPLOMA</u></b></td>
  		<td><b><u>HSC</u></b></td>
  		<td><b><u>UG</u></b></td>
      <td><b><u>PG</u></b></td>
  	</tr>
  	<tr>
  		<td><b><u>Percentage</u></b></td>
  		<td>'.$psslc.'</td>
  		<td>'.$pdip.'</td>
      <td>'.$phsc.'</td>
      <td>'.$pug.'</td>
      <td>'.$ppg.'</td>
  	</tr>
 

  	<tr>
  		<td><b><u>Year of passing</u></b></td>
  		<td>'.$ysslc.'</td>
      <td>'.$ydip.'</td>
  		<td>'.$yhsc.'</td>
  		<td>'.$yug.'</td>
      <td>'.$ypg.'</td>
  	</tr>
  
  </table>
  <br>
  <h4 align="left">SEMESTER WISE MARK</h4>
<table width="100%" height="100%" border="3">

      
  	<tr>
  	<td colspan="2"><b><u>Semester</u></b> </td>
  	<td colspan="2"><b><u>Percentage</u></b></td>
  	</tr>

  	<tr>
  		<td colspan="2">First</td>
  		<td colspan="2">'.$first.'</td>
  		
    </tr>
    <tr>
      <td colspan="2">Two</td>
      <td colspan="2">'.$y2.'</td>
    </tr>  
    <tr>
  		<td colspan="2">Third</td>
  		<td colspan="2">'.$y3.'</td>
  	</tr>
    	<tr>
    	<td colspan="2">Fourth</td>
    	<td colspan="2">'.$y4.'</td>
    	</tr>
  	<tr>
  	<td colspan="2">Fifth</td>
  	<td colspan="2">'.$y5.'</td>
  	</tr>
<tr><td colspan="2">Sixth</td><td colspan="3">'.$y6.'</td></tr>

</table>
 
  <h4 align="left">BANK DETAILS</h4>
<table width="100%" height="100%" border="3">
<tr>

<td>Bank Name</td>
<td>DD  NO</td>
<td>DD Date</td>
</tr>
<tr>

<td>'.mysql_real_escape_string($_POST["bname"]).'</td>
<td>'.mysql_real_escape_string($_POST["ddno"]).'</td>
<td>'.mysql_real_escape_string($_POST["dop"]).'</td>
</tr>
  </table>
  <br>
I hereby acknowledge that the above given data is true to my knowledge<br>
<br>
<br>
<table>
<tr>
<td width="75%">College Authority Signature</td>
<td>Student Signature</td>
</table>
</body>
</html>';
$pdf->WriteHTML($strContent);
$pdf->Output();
}
else
{
  //echo mysql_errno();
  //echo mysql_error();
$err="Duplicate entry '$reg' for key 'uni_reg'";
if(mysql_error()==$err)
{
  echo '<html>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <div class="alert alert-error">
  You have already submitted
  </div>
  
  </html>';

}
}
}
else
  include('forbidden.html');


?>
