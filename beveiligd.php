<?php
// We werken ook hier met sessies
session_start();

// Controleren of de bezoeker ingelogd is
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
    header('Location: login-form.php');
    exit();
}
?>
<?php include('header.php');?>
<div class="container">

<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-4">
<h1>Hallo</h1>

</div>
<div class="col-md-4"></div>

</div>

<?php include('footer.php');?>