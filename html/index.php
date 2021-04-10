<?php
if ($_GET['update']) {
    $upd = dirname(__FILE__, 2) . "/bin/updolmod";
    $user = posix_getpwuid(stat($upd)["uid"])["name"];
    shell_exec("sudo -u $user $upd");
}
$current = json_decode(file_get_contents("current.json"), true);
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OLMOD</title>
<link rel=stylesheet href="/css/common.css">
<div id=page>
<div id=header><h1>OLMOD</h1><!-- <span>community mods for</span> <img src="header_OLogo01.png" width="238" height="54">--></div>
<div id=body>
<div class="section">
OLMOD is a collection of community mods for <a href="https://playoverload.com">Overload</a>. It enhances multiplayer with a server browser, joining a match in progress, extra match modes such as capture the flag and more.
</div>
<div class="section">
<a class="button" href="<?php echo htmlspecialchars($current["url"]); ?>">Download OLMOD <?php echo htmlspecialchars($current["version"]); ?></a>
</div>
<div class="section">
<div class=header>Installation</div>
<div>Unzip the olmod package into the same directory as Overload. This directory is the same directory that contains the Overload executable as well as the subdirectory Overload_Data. You can then run olmod from within the same directory as Overload.
</div>
<div>To verify that olmod got correctly installed and started, look at the version banner at  the top right  of the game's main menu: <img src="olmod_version_banner.png" alt="overload main menu when olmod is installed" style="width:100%">
</div>
</div>
<h2>Getting Started Playing Online</h2>
<div class="section">
<div class=header>Using the in-game server browser</div>
<div>To begin playing Overload online from within olmod:
<ol>
<li>Click "Play Multiplayer"
<li>Click "Server Browser"
<li>If there are already running matches, click "Join" to instantly join the game on that server.
<li>Or to create a new game:
	<ol>
	<li> Click "Create" on one of the currently free servers
	<li> Change the game settings to your liking, when satifisfied click "Create Match"
	<li> The IP address of the server is already filled in, just click "Create Match" again
	</ol>
</ol>
Do not hesitate to join running matches. Games which you are not supposed to join are either presented as "Closed" (meaning "join in progress" has been disabled), or as "Join (PW)" (password required, see below) in the server browser. Note: Overload also features an in-game chat, by default it is bound to key <pre>B</pre>.
</div>
</div>
<div class="section">
<div class=header>Password-protected matches</div>
<div>To create a password-protected match, just append an underscore and the password to the server's IP address, like this: <pre>1.2.3.4_SuperSecret</pre>. Be careful to leave the IP intact. The server browser will show a "Join (PW)" button for such games. After clicking it, you must append the password to the IP in the same way.
</div>
</div>

<div class="section">
<div class=header>Playing as Observer (spectator)</div>
<div>To take part in a game as an observer, create a pilot called <pre>OBSERVER</pre> or <pre>OBSERVER_whatever</pre> and join the game.
</div>
</div>

<div class="section">
<div class=header>Playing without the server browser</div>
<div>You may also go to "Play Multiplayer", "Internet Match" to create or join games. You need to manually type in (or paste with <pre>Ctrl-V</pre>) the IP of the server you want to use. Look at the <a href="https://tracker.otl.gg">Tracker</a> page to find the IPs of currently running public servers (the in-game server browser uses the same data).
</div>
</div>

<div class="section">
<a class="button" href="https://discord.playoverload.com">Join the Overload Discord for support</a>
</div>
<div class="section">
For more information, see the <a href="https://github.com/overload-development-community/olmod">olmod project on github</a>.
</div>

<div class="section" style="color: #888;">
Overload is a registered trademark of Revival Productions, LLC. Site by Arne de Bruijn.
Installation and Getting Started sections and Tracker by roncli Productions.
</div>

</div>
</div>
</div>
