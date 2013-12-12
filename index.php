<?php
/* @Author Dharmawan Sukma
 * @Email waone.on1@gmail.com
 * @Juni 30th 2013
 */


include('conf.php');
?>

<HTML>
<HEAD>
	<title>Localhost</title>
<link rel="stylesheet" href="style.css">
<script src="js/jquery.js"></script>
<script type="text/javascript">
	<!--
	function show(object) {
	if (object == "buat")
        {
        document.getElementById('inputan').style.visibility = 'visible';
        }
        else
        {
        document.getElementById('inputan').style.visibility = 'hidden';
        }
	}
	//-->
</script>
</HEAD>
<BODY>
	<?php
	$scanned_directory = array_diff(scandir(DIR), array('..', '.'));
	?>
<div id="wrap">
	<div id="header">
		<div id="judul">
			<span><div class='half'>Local</div>Host</span>
			<span id="nd">Document Management</span>
		</div>
		<div id="mid1"></div>
		<div id="mid2"></div>
		<div id="mid3"></div>
		<a href="http://localhost/phpmyadmin/"><div id="content"></div></a>
	</div>
	<?php 
	echo '<a href="'.SUBLIME.'">';
	echo '<div class="sublime">';
	echo '</div>';
	echo '</a>';
	?>
	<div id="maincontent">
			<?php
				foreach ($scanned_directory as $dir) {
				if(is_dir($dir)){
				echo '<div id="box">';
					echo '<div id="dir">';
						echo '<a href="'.$dir.'">';
						echo '<div id="dirhead">'.$dir;
						echo '</div>'.'</a>';
					
						$folder = $dir.'/';
						//if(is_dir($folder)){
						//	print_r($folder);
						//}
						if(is_dir($folder)){
						$dh=opendir($folder) or die('error');
							while(($f=readdir($dh)) !== false){
								//if(is_file($folder.$f)){ }untuk filter file only
								if($f!='.' && $f!='..')
								echo '<a href="'.$folder.$f.'">
									<fieldset class="list">
									'.$f.'
									</fieldset>';
								echo '</a>';					
							}
						}
					echo "<br>";
					//closedir($dh);
					echo '</div>';
				echo '</div>';
				}
			}	
			?> 
	</div>
</div>
</BODY>
</HTML>

