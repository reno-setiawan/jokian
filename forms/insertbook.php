<?php
include('conn.php');
$nama = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$query  = "INSERT INTO message (name,email,subject,message) values('$nama','$email','$subject','$message')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($result) {
  echo "<script type='text/javascript'>
	alert('Pesan Berhasil Dikirim..!');
</script>";
  echo "<meta http-equiv='refresh' content='0; url=..\index.php'>";
} else {
  echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal dikirim!');
	}
</script>";

  var_dump($_FILES);
  echo "data berhasil dimasukkan";
  echo "<meta http-equiv=refresh content=3;url=..\index.php>";
}