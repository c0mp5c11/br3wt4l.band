<?php
$title = "Home";
ob_start();
?>
<div class="container">   
	<div class="row mb-3">
		<h1 class="fw-bold">
			BR3WT4L, that of a tea. The genre of this music is Metal; having subgenre Grindcore, further defined as darkgrind with a splash of Hawaiian theme.
		</h1>		
	</div>
	<div class="row mb-3">
		<h1>
			Links
		</h1>
		<ul class='h2'>
			<li>
				<a href="https://www.patreon.com/cw/br3wt4l">patreon</a>
			</li>
			<li>
				<a href="https://www.youtube.com/@br3wt4l">youtube</a>
			</li>
			<li>
				<a href="https://pandora.app.link/GaFKxZ2UiYb">trill station</a>				
			</li>
			<li>
				<a href="https://pandora.app.link/M09iE9IViYb">hawaiian style</a>				
			</li>
			<li>
				<a href="https://soundcloud.com/br3wt4l">soundcloud</a>
			</li>
			<li>
				<a href="https://transfer.it/t/1CnszY8nhRDZ">BR3WT4L - COMPUTER SCIENCE BASS</a>
			</li>
			<li>
				<a href="mailto://email@br3wt4l.band">Contact Us</a>
			</li>
		</h2>
	</div>
</div>
<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/layout.php';
?>