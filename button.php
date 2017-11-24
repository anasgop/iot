<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['on']))
{
$onstring = "ON";
fwrite($handle,$onstring);
fclose($handle);
sleep(2);
header("Location: index.html");

}
else if(isset($_POST['off']))
{
$offstring = "OFF";
fwrite($handle, $offstring);
fclose($handle);
sleep(2);
header("Location: index.html");
}
else if(isset($_POST['off1']))
{
$offstring = "OFF1";
fwrite($handle, $offstring);
fclose($handle);
sleep(2);
header("Location: index.html");
}
else if(isset($_POST['on1']))
{
$offstring = "ON1";
fwrite($handle, $offstring);
fclose($handle);
sleep(2);
header("Location: index.html");
}

?>