<html>

<form action="telnet2.php" method="post">
<p>IP Agent: <input type="text" name="ip_agent"/></p>
<p>IP Moxa: <input type="text" name="ip_moxa"/></p>
<p>Port Moxa : <input type="text" name="port_moxa"/></p>
<input type="submit" name="submit" value="TELNET!" />
</form>

<?php
if(isset($_POST["ip_agent"]))
	{

$ipagent=$_POST["ip_agent"];
$ipmoxa=$_POST["ip_moxa"];
$portmoxa=$_POST["port_moxa"];

exec("sudo -u system /opt/montools/telnet.sh '$ipagent' '$ipmoxa' '$portmoxa'");
$output = shell_exec("sudo -u system /opt/montools/telnet.sh '$ipagent' '$ipmoxa' '$portmoxa'");
echo "<pre>$output</pre>";

/*$cmd="sudo -u system /opt/montools/telnet.sh '$ipagent' '$ipmoxa' '$portmoxa'";
while (@ ob_end_flush()); // end all output buffers if any

$proc = popen($cmd, 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';
*/
	}
?>
</html>

