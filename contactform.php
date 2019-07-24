<? php
if (isset($_POST['submit'])){
	$name =$_post['name'];
	$name =$_post['subject'];
	$name =$_post['mail'];
	$name =$_post['message'];

	$mailTO="sukalemohini.10@gmail.com";
	$holders="form:".$mailform;
	$txt ="you have recived an email from".$name"./n/n".$message;

	mail($mailTo.$subject,$text,$headers);
	header("Location: index.php?mailsend")
}
?>