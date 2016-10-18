<?php include "header.php"; ?>
<p>
<h1>Welcome <?php echo $_POST["name"]; ?></h1>
Your email address is: <?php echo $_POST["email"]; ?>
You want to <?php echo $_POST["shipping"]; ?><p>
<?php include "footer.php"; ?>