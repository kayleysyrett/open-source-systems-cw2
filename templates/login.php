
<?php echo $message; ?>

<form name="frmLogin" action="authenticate.php" method="post">
  <div class="mb-3">
    <label for="txtid" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="txtid" name="txtid">
  </div>
  <div class="mb-3">
    <label for="txtpwd" class="form-label">Password</label>
    <input type="password" class="form-control" id="txtpwd" name="txtpwd">
  </div>
  <input type="submit" class="btn btn-primary" value="submit"/>
</form>