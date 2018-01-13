<nav class="navbar navbar-dark bg-dark" style="">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ChatRoom</a>
    </div>
    <ul class="nav  nav-pills navbar-nav navbar-right">
      <li><a href="index.php" style=""><span class="glyphicon glyphicon-user" ></span> Sign In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    </ul>
   <?php  if($on==1){ ?> <ul class="nav  nav-pills navbar-nav navbar-right">
      <li><a href="signup.php" style=""><span class="glyphicon glyphicon-user" ></span> Sign Up&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    </ul>
   <?php } ?>
  </div>
</nav>