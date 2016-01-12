<?php include('header.php');?>
<div class="container">

<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-4">

<form role="form" method="post" action="php/login.php">
<div class="form-group"><br><br>
<label for="user">Gebruikersnaam:</label>
<input type="text" name="user" class="form-control" id="users"> 
</div>
 <div class="form-group">
    <label for="pass">Password:</label>
    <input type="password" class="form-control" name="pass" id="pass">
  </div>
  <button type="submit" class="btn btn-default">Verzenden</button>
</form>
</div>
<div class="col-md-4"></div>

</div>

<?php include('footer.php');?>