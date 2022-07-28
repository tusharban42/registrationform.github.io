
<html>
<head>
<style>
 .error{
   width: 93%;
   margin: 0px auto;
   padding: 10px;
   border:1px solid #66FF00  ;
   color: #FF0000;
   background: #CCFF66;
    border-radius: 10px;
	 text-align:center;
	 }
	 </style>
<title>Nongrang Softech</title>
<link rel="stylesheet" href="valid.css" type="text/css" />
 <script src="valid.js"></script> 
</head>
<body bgcolor="lightblue">
<div id="header" align="center"> Registration Form</div>
<div class="form-style">
  <h2>All Fields are Mandatory</h2>
  <?php include 'regform.php' ?>
<form name="form1" method="post" action="#" OnSubmit="return fncValidate();" autocomplete="off">
  <table align="center" width="400" border="0">
      <tr>
        <td width="125"> &nbsp;Firstname</td>
        <td width="180"><div class="input-group">
          <input type="text" name="fname" size="20"></div>
        </td>
      </tr> 
	  <tr>
        <td width="125"> &nbsp;Lastname</td>
        <td width="180"><div class="input-group">
          <input type="text" name="lname" size="20"></div>
        </td>
      </tr>
	  <tr><td>Gender:</td><td><span id="gen"><input type="radio" name="gender" value="male" id="male"> Male
	  <input type="radio" name="gender" value="female" id="female"> Female</span></td></tr>
	  <tr><td>Address:</td><td><textarea name="address" class="textarea-field"></textarea></td></tr>
	  <tr><td>Country: </td><td><div class="input-group">
<select name="country" id="country">
<option value="">Choose a country</option>
<option value="Australia">Australia</option>
<option value="Great Britian">Great Britain</option>
<option value="India">India</option>
</select>
</div></td></tr>
<tr>
        <td> &nbsp;Mobile No:</td> 
        <td><div  class="input-group"><input type="text" name="phone"></div>
        </td> 
      </tr>
	  <tr>
        <td> &nbsp;Email</td>
        <td><div  class="input-group"><input type="text" name="email"></div>
        </td>
      </tr>
	   <tr>
        <td> &nbsp;Password</td>
        <td><div  class="input-group"><input type="password" name="Password"></div>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><div  class="input-group"><input type="password"  name="ConPassword"></div>
        </td>
      </tr>
<tr><td></td><td><input type="submit" name="submit" value="Submit" class="btn">&nbsp&nbsp
<input type="reset" name="reset" value="Reset" class="btn"></td></tr>
  </table>
</form>
</div>
</body>
</html>