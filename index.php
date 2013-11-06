<!DOCTYPE HTML5>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<head>  
 <script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'pt-EN'
    });
  });
    $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'pt-EN'
    });
  });
     function safety()
    {
      
   if(document.tnslpp.cname.value == "" )
   {
     alert( "Provide your name!" );
     document.tnslpp.cname.focus() ;
     return false;
   }
   if(document.tnslpp.unireg.value.length=""||document.tnslpp.unireg.value.length>10)
   {
    alert('Provide proper university register number');
    
    document.tnslpp.unireg.focus();
    return false;
   }
   if( document.tnslpp.college.value == "-1" )
   {
     alert( "Provide your College!" );
     ocument.tnslpp.college.focus();
     return false;
   }
   if( document.tnslpp.dept.value == "-1" )
   {
     alert( "Provide your Department!" );
     ocument.tnslpp.dept.focus();
     return false;
   }
   if(document.tnslpp.mobno.value.length<10 || document.tnslpp.mobno.value.length>10)
   {
    alert('Proper Mobile number');
    document.tnslpp.mobno.focus();
    return false;
   }
   if( document.tnslpp.email.value === "" )
   {
   
   alert('Provide a valid email address');
   document.tnslpp.email.focus(); 
    return false;
   }
   if((document.tnslpp.email.value))
   {
     var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Provide a valid email address');
    email.focus;
    return false;
   }
 }
   if(document.tnslpp.ysslc.value.length<4)
   {
    alert('Provide proper year of SSLC passing');
    document.tnslpp.ysslc.focus();
    return false;
   }
   if(document.tnslpp.yhsc.value.length<4)
   {
    alert('Provide proper year of HSC passing or enter Zero if not applicable');
    document.tnslpp.yhsc.focus();
    return false;
   }
   if(document.tnslpp.ydip.value.length<4)
   {
    alert('Provide proper year for Diploma passing or enter Zero if not applicable');
    document.tnslpp.ydip.focus();
    return false;
   }
   if(document.tnslpp.yug.value.length<4)
   {
    alert('Provide proper year of UG passing');
    document.tnslpp.yug.focus();
    return false;
   }
   if(document.tnslpp.ypg.value.length<4)
   {
    alert('Provide proper year of UG passing');
    document.tnslpp.ypg.focus();
    return false;
   }
      
   if(document.tnslpp.psslc.value.length<4)
   {
    alert('Provide proper year of SSLC passing');
    document.tnslpp.ysslc.focus();
    return false;
   }
   if(document.tnslpp.phsc.value.length<4)
   {
    alert('Provide proper percentage for HSC passing or enter Zero if not applicable');
    document.tnslpp.phsc.focus();
    return false;
   }

  if(document.tnslpp.pdip.value.length<4)
   {
    alert('Provide proper percentage for Diploma passing or enter Zero if not applicable');
    document.tnslpp.pdip.focus();
    return false;
   }
   if(document.tnslpp.pug.value.length<5)
   {
    alert('Provide proper percentage of UG passing');
    document.tnslpp.pug.focus();
    return false;
   }
    if(document.tnslpp.ppg.value.length<5)
   {
    alert('Provide proper percentage of UG passing');
    document.tnslpp.ppg.focus();
    return false;
   }
   if(document.tnslpp.first.value.length<5)
   {
    alert('Provide proper percentage of first year');
    document.tnslpp.first.focus();
    return false;
   
  }
  if(document.tnslpp.y2.value.length<5)
   {
    alert('Provide proper percentage of third sem');
    document.tnslpp.y2.focus();
    return false;
   }
   if(document.tnslpp.y3.value.length<5)
   {
    alert('Provide proper percentage of third sem');
    document.tnslpp.y3.focus();
    return false;
   }
   if(document.tnslpp.y4.value.length<5)
   {
    alert('Provide proper percentage of fourth sem');
    document.tnslpp.y4.focus();
    return false;
   }
   if(document.tnslpp.y5.value.length<5)
   {
    alert('Provide proper percentage of fifth sem');
    document.tnslpp.y5.focus();
    return false;
   }
   if(document.tnslpp.y6.value.length<5)
   {
    alert('Provide proper percentage of fifth sem');
    document.tnslpp.y6.focus();
    return false;
   }
   
   
   if(document.tnslpp.ddno.value.length==="")
   {
    alert('Provide proper DD no');
    document.tnslpp.ddno.focus();
    return false;
   }
   if(document.tnslpp.dop.value.length==="")
   {
    alert('Provide proper date of purchase');
    document.tnslpp.dop.focus();
    return false;
   }
   return( true );

  }// your code goes here

</script>


<title>TNSLPP</title>
</head>
<body>
<?php include('arrcreator.php');?>
<div id="container">
  <br>
  <br>
  <br>
<div class="banner">
	Tamilnadu State Level Placement Program<br>
  Center For University Industry Collaboration<br>
  Anna University,Chennai-25
</div>
<br>
<div class="alert alert-error">
  All fields marked (*) are mandatory<br>
  If not applicable please enter '0'(zero)<br>
  Important:Bring the PDF in printed format that will be generated after successful form  submission
</div>
<form name="tnslpp" method="post" class="reg"  action="validate.php"  onsubmit="return(safety());">
	<fieldset>
  
	
  <label>Name:*</label><input class="size" type="text" name="cname" size="50"/>
  
  <label>University Register Number:*</label>
  <input type="text" name="unireg" size="50"/>
  <br>
  
  <label>College</label>
  <select name="college">
    <option value="-1">Select your college:*</option>
    <?php for($i=0;$i<sizeof($clg_list);$i++){?>
    <option value='<?php echo $i;?>'><?php echo $clg_list[$i];}?></option>
  </select>
   
  
  
	<label>Department</label>
  <select name="dept">
    <option value="-1">Select your department:*</option>
    <option value="cse">CSE</option>
    <option value="ece">ECE</option>
    <option value="eee">EEE</option>
    <option value="ei">E&I</option>
    <option value="ice">ICE</option>
    <option value="it">IT</option>
    <option value="mca">MCA</option>
  </select>
  
  
  
	
  
  <label>Date Of Birth:*</label>
  
  <div id="datetimepicker1" class="input-append date">
  <input name="dob" data-format="dd/MM/yyyy" type="text"/>
  <span class="add-on">
    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
  </span>
  </div>
<label>Age:*</label>
  <input type="text" name="age" size="2"/>

  <label>Residential Address:*(max 100 char length)</label><textarea name="resadd" rows="10" cols="100"></textarea>
  
  <div class="row-fluid">
  
  <div class="span4">
  <label>MOBILE NUMBER:*</label><input type="text" name="mobno" size="10"/>
  </div>
  
  <div class="span4 offset2">
  <label>E-mail id:*</label><input type="text" name="email" size="50"/>
  </div>

  <br><br><br>
  <table class="table table-bordered table-striped">
    <th align="center">
      <td colspan="3">
       <label>Educational Qualification</label> 
      </td>
    </th>
  	<tr>
  		<td>Course</td>
  		<td>SSLC:*</td>
  		<td>HSC</td>
      <td>DIPLOMA</td>
  		<td>UG:*</td>
      <td>PG</td>
  	</tr>
  	<tr>
  		<td>Percentage</td>
  		<td><input class="input-small" type="text" name="psslc"></td>
  		<td><input class="input-small" type="text" name="phsc"></td>
      <td><input  class="input-small" type="text" name="pdip"></td>
  		<td><input  class="input-small" type="text" name="pug"></td>
      <td><input  class="input-small" type="text" name="ppg"></td>
  	</tr>
  	<tr>
  		<td>Year of passing</td>
  		<td><input  class="input-small" type="text" name="ysslc"></td>
  		<td><input  class="input-small" type="text" name="yhsc"></td>
      <td><input  class="input-small" type="text" name="ydip"></td>
  		<td><input  class="input-small" type="text" name="yug"></td>
      <td><input  class="input-small" type="text" name="ypg"></td>
  	</tr>
  </table>
  

   <table class="table table-bordered table-striped">
    <th align="center">
      <td colspan="3">
       <label>Semester wise Mark(With 2 digits after the decimal point):*</label> 
      </td>
    </th>
  	<tr>
    	<td>Semester </td>
  	<td>Percentage</td>
  	</tr>

  	<tr>
  		<td>1</td>
  		<td><input class="input-mini" type="text" name="first" size="2"/></td>
  		
    </tr>
    <?php for($i=2;$i<7;$i++){?>
    <tr>
  		<td><?php echo $i;?></td>
  		<td><input class="input-mini" type="text" size="2" name="y<?php echo $i;?>"/></td>
  	</tr>
    	<?}?>
  	

  </table>
 
<div class="row-fluid">
  <div class="span2">
    <label>DD NO</label><input type="text" name="ddno" size="20" />
  </div>
  <div class="span2 offset2">
    <label>Bank:(If others mention below):</label><select name="bname">
    <option value="State Bank Of India">State Bank of India</option>
    <option value="Indian Bank">Indian bank</option>
      <option value="Punjab National Bank">Punjab National Bank</option>>
      <option value="Indian Overseas Bank">Indian Overseas Bank</option>
      <option value="icici">ICICI</option>
      <option value="hdfc">HDFC</option>
      <option value="stdchar">Standard Chartered</option>
      <option value="KVB">Karur Vysya Bank</option>
      <option value="Other">Other</option>
    
    </select>
    <input type="text" name="bname1" length="50"/>
  
  </div>
  <div class="span2 offset2">
    <label>Date</label>
    <div id="datetimepicker2" class="input-append date">
  <input name="dop" data-format="dd/MM/yyyy" type="text"/>
  <span class="add-on">
    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
  </span>
  </div>
  </div>
</div>
  <div class="form-controls">
    <div class="controls">
    <input type="submit" class="btn-success" value="Submit" onclick='Javascript:return safety()'/>
    <input type="reset" class="btn-danger" value="Reset"/>
  </div>
  </div>
</div>

<input type="hidden" name="ver" value="correct"/>
</fieldset>
</form>
</body>
</html>