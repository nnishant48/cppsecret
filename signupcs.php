<html>
<head>
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="stylecs.css">
<style>

table
{
color:black;
border:none;
border-color:black;
font-size:20px;
margin-left:10px;
margin-bottom:-5px;
}
input
{
font-size:15px;

}


.loginbox
{background:rgba(0,0,0,0.6);
position:absolute;
top:22%;
left:38%;
width:400px;
height:510px;

}

.avatar{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:-50px;
	left:calc(50% - 50px);
	border:2px solid white;
}
.loginbox h1
{
font-family:'Montserrat',sans-serif;
text-align:center;
margin-top:60px;
margin-bottom:0px;
 }
 
.loginbox input{
width:90%;
margin-bottom:10px;
font-family:'Open Sans',sans-serif;
}	
 
.loginbox input[type="text"],input[type="password"],input[type="number"]
{
border:none;
border-bottom:1px solid white;
background:transparent;
outline:none;
height:40px;
}

.loginbox tr
{
font-family:'Montserrat',sans-serif;
font-size:17px;
font-weight:bold;
}


form
{
color:black;
font-size:20px;
text-align:center;

}

#b1
{
background-color:gold;
    color:black;
    width:95%;
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
}
#b1:hover{
background-color:orange;
}


</style>
</head>

<body>

<div class="BGIMG">
     <div class="menu"> 
	      <div class="leftmenu">

          </div>
      
	     <div class="rightmenu">
          <ul>
          <li><a href="cppsecrethome.php">HOME</a></li>
		  <li><a href="logincs.php">LOGIN</a></li>
		  <li><a style="color:orange"; href="signupcs.php">SIGNUP</a></li>
		  <li><a href="#">ABOUT</a></li>
		  <li><a href="#">CONTACT</a></li>
          </ul>		 
         </div> 
     </div> 
	 
 <div class="loginbox">
	<img src="signupavatar.png" class="avatar">
	<h1>REGISTER</h1>
 <div class="d2">
<table>
<form action="signup.php"  method="post">
<tr>
<br/>
<td style="color:orange";>NAME</td>
<td> <input type="text" name="name" size="30"; placeholder="Enter Username" required/></td>
</tr>
<tr>
<td style="color:orange";>ADDRESS </td>
<td><input type="text" name="address" size="30"; placeholder="Enter Address" required/></td>
</tr>
<tr>
<td style="color:orange";>AGE</td>
<td><input type="number" name="age" size="30"; placeholder="Enter Age" required/></td>
</tr>
<tr>
<td style="color:orange";>MOBILE NO.</td>
 <td><input type="number" name="mobile" size="30"; placeholder="Enter mobile no." required/></td>
</tr>
<tr>
<td style="color:orange";>EMAIL ID </td>
<td><input type="text" name="email" size="30"; placeholder="Enter Email Id"required/></td>
</tr>
<tr>
<td style="color:orange";>CREATE PASSWORD </td>
<td><input type="text" name="password" size="30"; placeholder="Enter Password" required/></td>
</tr>
<td colspan="2"></br><input id="b1" type="submit" value="CREATE ACCOUNT" name="button"></td>
</form>
</table> 
</div>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['button']))
{
 include('datacon.php');
 $name=$_POST['name'];
 $address=$_POST['address'];
 $age=$_POST['age'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 
 $query = "insert into customer(name,address,age,mobile,email,password) values('$name','$address','$age','$mobile','$email','$password')" ;
 $run = mysqli_query($con,$query);
 if($run == true)
	{
		?>
		<script>
		alert('Signup Successfully!!');
		window.open('signup.php','_self');
		</script>
		<?php
	}
}
?>