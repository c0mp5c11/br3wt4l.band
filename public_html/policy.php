<?php
$title = "Policy";
ob_start(); 
?>
<h1>Privacy Policy</h1>
<h2>The music is published by C0MPU73R PR09R4M CHARITY is subject to laws in the United States of America. 
    This Uniform Resource Locator for this privacy policy, https://www.br3wt4l/policy/, is active.
    The specific digital media it refers to is image , audio , and video content types. User privacy is maintained 
    and not intended to be shared with third parties outside of the required system software for analysis.</h2>
<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/layout.php';
?>