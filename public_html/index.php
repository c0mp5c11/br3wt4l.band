<?php
$title = "Home";
ob_start();
?>
<div class="container">   
	<div class="row mb-3">
		<h1 class="fw-bold">
			BR3WT4L, that of a tea. The genre of this music is Metal; having subgenre Grindcore.
		</h1>		
	</div>
	<div class="row mb-3">
		<h1>
			Links
		</h1>
		<ul class='h2'>
			<li>
				<a href="https://soundcloud.com/br3wt4l">SoundCloud</a>
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