<?php 
     session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dangnhap</title>
</head>
<body>
     <form method="post"  enctype="multipart/form-data" >
       <table border="1" align="center" bgcolor="#5782CD" cellpadding="0" cellspacing="0" width="300px" height="100px" >
                <tr>
                     <td colspan="2" align="center">ĐĂNG NHẬP</td>
                </tr>
                <tr>
                     <td>Username :</td>
                     <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr align="center">
                     <td colspan="2"><input type="submit" name="ok" value="Đăng nhập"></td>
                </tr>
       </table>
     </form>   
     <?php 
	      include('connect.php');
	      if(isset($_POST['ok']))
		  {
			  $username = $_POST['username'];
			  $password = $_POST['password'];
			  if ($username == "" || $password == "")
			  {
				  echo "<script> alert ('mât khẩu và tài khoản không được để trống') </script>";
				  }
				  else{
				      $sql ="Select Account, Password from dangky where Account = '$username' And password = '$password' ";
					  $thucthi = mysqli_query($conn, $sql);
					  $nr = mysqli_num_rows($thucthi);
					  if ($nr)

						  {
							  header ('location:Trangchu.html');}
						  }	
						  		    
		  }
	  ?>  
</body>
</html>