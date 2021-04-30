!DOCTYPE html>
<html>
<head>
<title>Faculty Registeration</title>
<meta charset="utf-8">
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<script>
function validate()
{
if(document.getElementById("password").value != document.getElementById("confirm_password").value)
{
alert('Passwords Do Not Match');     
return false;
}  
return document.getElementById("password").value==document.getElementById("confirm_password").value;
return false;
}
</script>

</head>
<body>
<center><img src="images/logo.JPG" width="1100"></center> <br>
<center>        <font color='RED' size='8px'>Faculty Registration</font><br><br>
<form action="signup.php" method="POST" onSubmit="return validate()" name="main">
<table>
<tr><td>
Title : </td><td><select name="title" id="title">
<option>Dr.</option>
<option>Prof.</option>
</select></td>
<td>&nbsp;&nbsp;&nbsp;First name :</td><td> <input type="text" class="text" name="fname" id="fname" required pattern="[A-Za-z]{3,15}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" ></td></tr>
<tr><td>
Middle name:</td><td> <input type="text" class="text"  name="mname" id="mname" required pattern="[A-Za-z]{1,15}"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Middle Name';}" >
</td>
<td>
&nbsp;&nbsp;&nbsp;Last name :</td><td><input type="text" class="text"  name="lname" id="lname" required pattern="[A-Za-z]{1,15}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" ></td></tr>

<tr><td>
Faculty ID :</td><td><input type="text" class="text"  name="username" id="username" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,15}"></td>
<td>

&nbsp;&nbsp;&nbsp;Contact No:</td><td><input type="text" class="text" name="phone" id="phone" required pattern="[0-9]{10}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone ';}"></td></tr>
<tr><td>E-mail Id</td><td>
<input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="E-mail format must be someone@example.com" placeholder="E-Mail" data-icon="U">
</td><td>
&nbsp;&nbsp;&nbsp;Designation :</td><td> <select name="designation" id="designation">
<option>Professor</option>
<option>Associate Professor</option>
<option>Assistant Professor</option>
</select></td></tr></table>
<table><tr><td><center>
Department Name :</td><td><select name="dept" style="width: 250px;" class="form-control" id="dept">
<?php
$con=mysql_connect("localhost","root","root") or die("Something went wrong");
mysql_select_db("Work_Diary",$con);
$sql1="select * from dept; ";
 $result1=mysql_query($sql1,$con);
while($row1=mysql_fetch_array($result1))
{
?>
<option value="<?php echo $row1['Dept_number']; ?>"><?php echo $row1['Dept_name']; ?></option>

<?php
}
?>
</select></td></tr><br><br>
<tr><td><center>
New Password :</td><td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password"></td></tr><center><tr><td>

Confirm Password :</td><td><input type="password" name="confirmpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="confirm_password" >
</td></tr></table>


<h3>By creating an account, you agree to our <span class="term"><a href="#">Terms & Conditions</a></span></h3>

<input type="submit" name="sub" value="Create account">
                   </div>
                   <div class="clear"> </div>
        </center></form>
                <!-----//end-main---->
                </div>
                 <!-----start-copyright---->

                                <!-----//end-copyright---->
</body>
</html>
