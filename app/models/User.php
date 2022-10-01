<?php 


/**
 * users class
 */
class User extends Model
{
	
	protected $table = "users";
	protected $allowed_columns = [

				'firstname',
				'lastname',
				'email',
				'password',
				'gender',
				'date',
			];


 	public function validate($data, $id = null)
	{
		$errors = [];

			//check username
			if(empty($data['firstname']))
			{
				$errors['firstname'] = "Firstname is required";
			}else
			if(!preg_match('/^[a-zA-Z ]+$/', $data['firstname']))
			{
				$errors['firstname'] = "Only letters allowed in firstname";
			}

			if(empty($data['lastname']))
			{
				$errors['lastname'] = "Username is required";
			}else
			if(!preg_match('/^[a-zA-Z ]+$/', $data['lastname']))
			{
				$errors['lastname'] = "Only letters allowed in lastname";
			}


			//check email
			if(empty($data['email']))
			{
				$errors['email'] = "Email is required";
			}else
			if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
			{
				$errors['email'] = "Email is not valid";
			}

			//check password
			if(!$id){
				if(empty($data['password']))
				{
					$errors['password'] = "password is required";
				}else
				if($data['password'] !== $data['password_retype'])
				{
					$errors['password_retype'] = "Passwords do not match";
				}else
				if(strlen($data['password']) < 8)
				{
					$errors['password'] = "Password must be at least 8 characters long";
				}
			}else{

				if(!empty($data['password']))
				{
	 				if($data['password'] !== $data['password_retype'])
					{
						$errors['password_retype'] = "Passwords do not match";
					}else
					if(strlen($data['password']) < 8)
					{
						$errors['password'] = "Password must be at least 8 characters long";
					}
				}
			}

		return $errors;
	}



}