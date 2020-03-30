<?php include('core/init.php'); ?>
<?php

    if(isset($_POST['do_login']))
	{
		//Get Vars
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //create user object
        $user = new User;
        if($user->login($username , $password))
        {
			redirect('index.php','You have been logged in','success');
		}
		else
		{
			redirect('index.php','That Login is not Valid','error');
		}
	}
	else
	{
		redirect('index.php');
	}
?>
