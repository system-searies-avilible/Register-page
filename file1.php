<!-- -->

<form method="post">
<table border="2">
<tr>
<th>Name</th>
<td><input type="text" name="txtname"/></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email" name="txtemail"/></td>
</tr>

<tr>
<th>Password</th>
<td><input type="password" name="txtpass"/></td>
</tr>

<tr>
<th>:</th>
<td><input type="submit" name="btn_sub" value="Register"/></td>
</tr>
</table>
</form>

<?php
$connect=mysqli_connect("localhost","root","","test");

if(isset($_POST['btn_sub'])){
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
	
$select=mysqli_query($connect,"select * from register where email='$email'");
$num=mysqli_num_rows($select);

if($num>0){
	echo"<script>alert('email already existed');</script>";
}
else{
	$insert=mysqli_query($connect,"insert into register values('','$name','$email','$pass');");
	if($insert){
		
		
		
	echo"<script>alert('Data insert sucessfully');</script>";
	echo"<script>window.location.assign('mypage.php');</script>";
	
	}
	else{
	echo"<script>alert('Data  can't beinsert sucessfully');</script>";	
		
	}
}
	
	
	
}


?>