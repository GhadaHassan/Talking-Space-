<?php include_once ('includes/header.php');?>
<form role="from" enctype="multipaer/from-data" method="post" action="register.php">
    <div class="form-group">
        <label>Name*</label><input type="text" class="form-control" name="name" placeholder="Enter Your Name">
    </div>
    <div class="form-group">
      <label>Email Address*</label><input type="text" class="form-control" name="email" placeholder="Enter Your E">
    </div>
		<div class="form-group">
     <label>Choose Username*</label><input type="text" class="form-control" name="username" placeholder="Create Username">
    </div>
		<div class="form-group">
      <label>Pasword*</label><input type="password" class="form-control" name="password" placeholder="Enter Your Pasword">
    </div>
	  <div class="form-group">
      <label>confirm Password*</label><input type="password" class="form-control" name="password" placeholder="Enter Your Name">
    </div>
		<div class="form-group">
      <label for="exampleInputFile">Upload Avater</label>
      <input type="file" id="exampleInputFile">
    </div>
		<div class="form-group">
      <label for="exampleInputFile">About Me</label>
      <textarea class="form-control" rows="6" placeholder="Tell Us About yourself(Optional)"></textarea>
    </div>
			<button type="submit" class="btn btn-default">Register</button>
</form>
<?php include_once ('includes/footer.php');?>
