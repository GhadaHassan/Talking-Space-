</div>
</div>
</div>
<div class="col-md-4">
    <div class="sidebar">
  <div class="block">
        <h3>Login Form</h3>
  <form role="form">
      <div class="form-group">
        <label>Username</label>
      <input name="username" type="text" class="form-control"  placeholder="Enter Username"/>
    </div>
    <div class="form-group">
        <label>Password</label>
      <input name="password" type="password" class="form-control" placeholder="Enter Password"/>
    </div>
    <button name="do_login" type="submit" class="btn btn-primary">Login</button> <a class="btn btn-default" href="register.html">Create Account</a>
  </form>

</div>
<div class="block">
<h3>Categories</h3>
<div>
<div class="list-group">
  <a href="topics.php" class="list-group-item <?php echo is_active(null); ?>">All Topics<span class="badge pull-right"></span></a>
  <?php foreach(getCategories() as $category): ?>
  <a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>"><?php echo $category->name; ?></a>
  <?php endforeach; ?>
</div>
</div>
</div>

</div>
</div><!-- /.container -->
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
