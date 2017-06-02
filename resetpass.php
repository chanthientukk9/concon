<?php

if(empty($_GET['code']))
{
	header("Location: index.php");
}

if(isset($_GET['code']))
{
	$code = $_GET['code'];
	
	//Tương tác với server
	
	//End Tương tác server
	
	if(isset($_POST['btn-reset-pass']))
	{
		$pass = $_POST['pass'];
		$cpass = $_POST['confirm-pass'];
		
		if($cpass!==$pass)
		{
			$msg = "<div class='alert alert-block'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong>  Password Doesn't match. 
					</div>";
		}
		else
		{
			//Code xử lý gửi pass mới lên server
			$url = 'http://api2.concon.vn/users/password';
			$data = array('token'=>$code,'password'=>$cpass);
			$data_json = json_encode($data);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response  = curl_exec($ch);
			curl_close($ch);
			$encode_result = json_decode($response, true);
			if (isset($encode_result['err']) || $encode_result['status'] === false)
			{
				$msg = "<div style='color:red;' class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					Thay đổi mật khẩu thất bại.
					</div>
					<script> alert('".$encode_result['err'][0][message].$encode_result['err'][message]."'); </script>";
				
			}
			else
			{
				$msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					Thay đổi mật khẩu thành công.
					</div>";
				header("refresh:4;index.php");
			}
			//End
			
			
		}
	}	
	
	
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>LinkCare App Password Reset</title>
    <!-- Bootstrap -->
    <link href="resetpass/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="resetpass/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="resetpass/assets/styles.css" rel="stylesheet" media="screen">
	
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body id="login">
    <div class="container">
    	<div class='alert alert-success'>
			<center>LinkCare Xin chào bạn, hãy nhập mật khẩu mới để khởi tạo lại mật khẩu cho tài khoản LinkCare.</center>
		</div>
        <form class="form-signin" method="post">
        <h3 class="form-signin-heading">Password Reset.</h3><hr />
        <?php
        if(isset($msg))
		{
			echo $msg;
		}
		?>
        <input type="password" class="input-block-level" placeholder="New Password" name="pass" required />
        <input type="password" class="input-block-level" placeholder="Confirm New Password" name="confirm-pass" required />
     	<hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-reset-pass">Reset Your Password</button>
        
      </form>

    </div> <!-- /container -->
    <script src="resetpass/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="resetpass/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>