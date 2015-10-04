<html>
<head>
	<title>iPugs Downloads</title>
	<link rel="stylesheet" type="text/css" href="http://leagueofcasuals.site.nfoservers.com/reset.css">
	<link rel="stylesheet" type="text/css" href="http://ipugs.tf/beigeify.css">
</head>
<body>
	<ul id="navbar">
		<li><a href="http://ipugs.tf" class="otherPage">Home</a></li>
		<li><a href="http://ipugs.tf/Info" class="otherPage">Info</a></li>
		<li><a href="http://ipugs.tf/Tournament" class="otherPage">Tournament - Presented by EyeGames</a></li>
		<li><a href="http://ipugs.tf/Downloads" id="curPage">Downloads</a></li>
		<li><a href="http://steamcommunity.com/groups/IronPugs" class="otherPage">Steam Group</a></li>
	</ul>
	<div class="body">
		<?php
			if(!($dir = scandir(getcwd()))){
				echo "<div><p>Error reading categories</p></dir>";
			}else{
				foreach($dir as $dlType){
					if(is_dir($dlType) && !($dlType == "." || $dlType == "..")){
						echo "<div><h3>" . $dlType . ": </h3>";
						if(!($downloads = scandir($dlType))){
							echo "<div><p>Error reading downloads for category</p></div>";
						}else{
							echo "<ul>";
							foreach($downloads as $download){
								if(!($download == "." || $download == ".." || is_dir($download))){
									echo "<li><a href='http://ipugs.tf/Downloads/" . $dlType . "/" . $download . "'>" . $download . "</a></li>";
								}
							}
							echo "</ul>";
						}
						echo "</div>";
					}
				}
			}
		?>
	</div>
</body>