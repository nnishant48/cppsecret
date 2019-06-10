<html>
 <head>
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="style.css">
 <style>

.loginbox
{background:rgba(0,0,0,0.6);
position:absolute;
top:30%;
left:38%;
width:320px;
height:420px;

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
margin-bottom:30px;
 }
 
.loginbox input{
width:90%;
margin-bottom:20px;
font-family:'Open Sans',sans-serif;
}	
 
.loginbox input[type="text"],input[type="password"]
{
border:none;
border-bottom:1px solid white;
background:transparent;
outline:none;
height:40px;
}

.loginbox p
{margin-bottom:-15px;
margin-top:10px;
margin-left:-180px;
font-family:'Montserrat',sans-serif;
font-size:17px;
font-weight:bold;

}	


form
{
color:white;
font-size:20px;
text-align:center;
}

#b1
{
background-color:gold;
    color:black;
 
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
          <li><a href="home.php">HOME</a></li>
		  <li><a style="color:orange;" href="login.php">LOGIN</a></li>
		  <li><a href="signup.php">SIGNUP</a></li>
		  <li><a href="manager.php">MANAGER LOGIN</a></li>
		  <li><a href="#">ABOUT</a></li>
		  <li><a href="#">CONTACT</a></li>
          </ul>		 
         </div> 
     </div> 
	 
	
   
  
   
    <div class="loginbox">
	<img src="useravatar.png" class="avatar">
	<h1>LOGIN HERE</h1>
     <form action="login.php" method="post">
      <p>USERNAME</p> <br/><input type="text" placeholder="Enter Username" name="name" required/>
	  <p>PASSWORD</p> <br/><input type="password" placeholder="Enter Password" name="password" required/>
	 <br/><br/><input id="b1" type="submit" value="Log in" name="button"/>
	 
	</form>
	
    </div>
  
 
</div>

 </body>
 </html>
 <?php
 if(isset($_POST['button']))
 {
	 $name=$_POST['name'];
	 $password=$_POST['password'];
	 include('datacon.php');
	
$sql="SELECT * FROM `customer` WHERE `name`LIKE '$name' AND `password` LIKE '$password'";
$run= mysqli_query($con,$sql);
 $row=mysqli_num_rows($run);
 if($row<1)
	  {
		?>
		<script>
		alert('Username or Password is incorrect!!');
		window.open('login.php','_self');
		</script>
		<?php
	  } 

	while($data=mysqli_fetch_assoc($run))
	{
		?>
		<script>
		alert('You Login Successfully!!');
		window.open('show.php?sid=<?php echo $data['id'];?>','_self');
		</script>
<?php
	}
	

 }
 
 ?>
 