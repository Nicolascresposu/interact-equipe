<?php $name = $_POST["name"];
if (!preg_match ("/^[a-zA-z]*preg$/", $name) or !preg_match ("/^[a-zA-z]*preg$/", $lastname)) {
$errorstring = "Only alphabets and whitespace are allowed.";
echo $errorstring;
?><script type="text/javascript">
history.go(-1)
</script><?php }
else {echo $name;}?>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
Success!
