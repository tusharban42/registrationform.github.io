<?php include 'Connection/registration.php' ?>
<?php
$colname_Recordset1 = "-1";
if (isset($_GET['RegId'])) {
  $colname_Recordset1 = (get_magic_quotes_gpc()) ? $_GET['RegId'] : addslashes($_GET['RegId']);
}
mysql_select_db($database_registration, $registration);
$query_Recordset1 = sprintf("SELECT Firstname,Lastname,Gender,Address,Country,Mobile_No,Email FROM form where RegId='$_POST[name]'", $colname_Recordset1);
$Recordset1 = mysql_query($query_Recordset1, $registration) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<html>
<head>
<title>Registration Form</title>
<style>
  table {
    border-collapse: collapse;
  }
#rcorners2 {
    border-radius: 0px;
    border: 1px solid #333333;
    padding: 20px; 
    width: 80px;
    height: 80px;    
}
#rcorners3 {
    border-radius: 0px;
    border: 1px solid #333333;
    padding: 16px; 
    width: 150px;
    height: 10px;    
}
.style1 {
	font-size: 20px;
	font-weight: bold;
}
</style>
</head>
<body>
<table width="46%" border="1" align="center">
  <?php do { ?>
   <tr>
	     <td colspan="4"><div align="center" class="style1">Personal Details </div></td>
    </tr>
	   <tr>
	     <td width="19%"><strong>Full Name </strong></td>
      <td><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['Firstname']; ?>&nbsp;<?php echo $row_Recordset1['Lastname']; ?></div></td>
	  </tr>
	  <tr><td width="19%"><strong>Gender</strong></td>
      <td width="81%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['Gender']; ?></div></td>
    </tr>
	<tr><td width="19%"><b>Address</b></td>
      <td width="81%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['Address']; ?></div></td></tr>
	<tr><td width="19%"><b>Country</b></td>
      <td width="81%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['Country']; ?></div></td>
    </tr>
	<tr> <td width="19%"><b>Mobile No</b></td>
      <td width="81%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['Mobile_No']; ?></div></td></tr>
	<tr><td width="19%"><b>Email</b></td>
      <td width="81%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['Email']; ?></div></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>

<p>&nbsp;</p>
<div align="right">
  
</div>
<div align="right"></div>
<div align="left"></div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
