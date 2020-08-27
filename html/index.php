<?php
if ($_GET['update']) {
    shell_exec('sudo -u arne /home/arne/bin/updolmodcurrent 2>&1');
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
</div>
<h2>Getting Started Playing Online</h2>
<div class="section">
<div class=header>Joining existing games</div>
<div>To begin playing Overload online from within olmod:
<ol>
<li>Click "Play Multiplayer"
<li>Click "Internet Match"
<li>Click "Join Match"
<li>Enter the IP address of a server with an open match, found on the <a href="https://tracker.otl.gg">Tracker</a> page
<li>Click "Join Match" again
</ol>
</div>
</div>
<div class="section">
<div class=header>Creating a new game</div>
<div>To start a new multiplayer game from within olmod:
<ol>
<li>Select a server to play on from the Server Browser on the <a href="https://tracker.otl.gg">Tracker</a> page. Be sure a game is not currently running on it!
<li>Click "Play Multiplayer"
<li>Click "Internet Match"
<li>Click "Create Open Match" for a match where players can join the match at any time, or click "Create Match" for a closed match where no one else can join once the game starts
<li>Adjust the game settings to your liking
<li>Click "Create Match" again
<li>Enter the IP address of the server
<li>Click "Create Match" again
</ol>
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
