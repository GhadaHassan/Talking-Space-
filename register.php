<?php require('core/init.php'); ?>

<?php
//create topic object
$topic = new Topic;

//create user object
$user = new User;

//create Validator object
$validate = new Validator;

if(isset($_POST['register']))
{
	//create Data Array
	$data = array('avatar' => 'noimage.png');
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] =md5( $_POST['password']);
	$data['password2'] =md5( $_POST['password2']);
	$data['about'] = $_POST['about'];// ? $_POST['about'] : "";
	$data['last_activity'] =date("Y-m-d H:i:s");
	//$date['avatar'] = ;
	//print_r($data); die();
	//Required fields
	$field_array = array('name','email','username','password','password2');

	if($validate->isRequired($field_array))
	{
		//print_r($data);
		//die();
		if($validate->isValidEmail($data['email']))
		{
			if($validate->passwordsMatch($data['password'] , $data['password2']))
			{
				//Upload Avatar Image

	            if(!empty($_FILES) && $user->uploadAvatar())
	            {
		            $data['avatar'] = $_FILES["avatar"]["name"];
	            }


                //Register User
	            if($user->register($data))
	            {
		            redirect('index.php', 'You are registered and can now log in','success');
	            }
	            else
	            {
		            redirect('index.php', 'something went wrong with Registeration','error');
	            }

			}
			else
			{
				redirect('register.php', 'Your password did not match' , 'error');
			}
		}
		else
		{
			redirect('register.php', 'Plz use a valid email address', 'error');
		}
	}
	else
	{
		redirect('register.php','Plz fill in all requied fields', 'error');
	}
}

	//Get Template & Assign Vars
    $template = new Template('templates/register.php');

	echo $template;
?>
