<?php require views_path('partials/header');?>

	<div class="container-fluid border col-lg-5 col-md-6 mt-5 p-4" >
		
		<form method="post">
			<center>
				<h3><i class="fa fa-user"></i> Create User</h3>
				<div><?=esc(APP_NAME)?></div>
			</center>
			<br>
		 
			<div class="mb-3">
			  <input value="<?=set_value('firstname')?>" name="firstname" type="text" class="form-control <?=!empty($errors['firstname']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="Firstname">
				<?php if(!empty($errors['firstname'])):?>
					<small class="text-danger"><?=$errors['firstname']?></small>
				<?php endif;?>
			</div>
			
			<div class="mb-3">
			  <input value="<?=set_value('lastname')?>" name="lastname" type="text" class="form-control <?=!empty($errors['lastname']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="Lastname">
				<?php if(!empty($errors['lastname'])):?>
					<small class="text-danger"><?=$errors['lastname']?></small>
				<?php endif;?>
			</div>
			
			<div class="mb-3">
			  <input value="<?=set_value('email')?>" name="email" type="email" class="form-control  <?=!empty($errors['email']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="Email">
				<?php if(!empty($errors['email'])):?>
					<small class="text-danger"><?=$errors['email']?></small>
				<?php endif;?>
			</div>

			<div class="mb-3">
 				<select  name="gender" class="form-control  <?=!empty($errors['gender']) ? 'border-danger':''?>" >
				 	<option selected>Gender</option>
					<option>male</option>
					<option>female</option>
				</select>
				<?php if(!empty($errors['gender'])):?>
					<small class="text-danger"><?=$errors['gender']?></small>
				<?php endif;?>
			</div>

			<div class="input-group mb-3">
			  <input value="<?=set_value('password')?>" name="password" type="password" class="form-control  <?=!empty($errors['password']) ? 'border-danger':''?>" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
				<br>
				<?php if(!empty($errors['password'])):?>
					<small class="text-danger col-12"><?=$errors['password']?></small>
				<?php endif;?>
			</div>

			<div class="input-group mb-3">
			  <input value="<?=set_value('password_retype')?>" name="password_retype" type="password" class="form-control  <?=!empty($errors['password_retype']) ? 'border-danger':''?>" placeholder="Retype Password" aria-label="RetypePassword" aria-describedby="basic-addon1">
				<?php if(!empty($errors['password_retype'])):?>
					<small class="text-danger col-12"><?=$errors['password_retype']?></small>
				<?php endif;?>
			</div>

			<br>
			<button class="btn btn-primary float-end">Create</button>
			
			<a href="index.php?page_name=login">
				<button type="button" class="btn btn-danger">Cancel</button>
			</a>
		</form>
	</div>

<?php require views_path('partials/footer');?>
