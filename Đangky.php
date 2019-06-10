<!doctype html>
<html>
<head>
<meta  charset="utf-8">
<title>Đăng ký</title>
</head>
<body>
      <form method="post" enctype="multipart/form-data" style="text-align:center">
             <table width="800px" cellspacing="5" cellpadding="0" bgcolor="#5782CD" border="1">
                    <tr>
                        <td colspan="2" align="center">Đăng Ký</td>
                    </tr>
                    <tr>
            	<td>Họ Và Tên</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
            	<td>Ðịa chỉ</td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr>
            	<td>Ðiện thoại</td>
                <td><input type="text" name="dt"></td>
            </tr>
            <tr>
            	<td>Giới Tính</td>
                <td><input type="radio" name="gt" value="Nam">Nam<input type="radio" name="gt" value="Nữ">Nữ</td>
            </tr>	
             <tr>
            	<td>Tên Tài Khoản</td>
                <td><input type="text" name="tk"></td>
            </tr>
            <tr>
            	<td>Mật khẩu</td>
                <td><input type="password" name="mk"></td>
            </tr>
            <tr>
            	<td>Nhập lại mật khẩu</td>
                <td><input type="password" name="nlmk"></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="ok" value="Đồng ý"></td>
                </tr>
		</table>
        </form>
        
<?php 
	include('connect.php');
	if(isset($_POST['ok']))
	{
		$name=$_POST['name'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dt'];
		$gioitinh=$_POST['gt'];
		$matkhau=$_POST['mk'];
		$tentaikhoan=$_POST['tk'];
		$nhaplaimatkhau=$_POST['nlmk'];	
		$sql="insert into dangky(name,address,phone,sex,account,password) 
		values('$name','$diachi','$dienthoai','$gioitinh','$tentaikhoan','$matkhau')";
		$thucthi=mysqli_query($conn,$sql);
		
		if(!$thucthi)
	  {echo  "<script> alert('Không thành công')</script>";}  
      else {echo  "<script> alert('thành công')</script>";
	 			 header('location:Dangnhap.php');}
	}
	  ?>
</body>
</html>