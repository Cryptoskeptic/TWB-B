<?php
include "linkers/common-head.html";
include "linkers/contact-page-css.html";
include "linkers/header-css.html";
?>

<body>
	<?php
	session_start();
	include "pages/header.php";
	include "pages/contact-page.html";	
	include "pages/footer.html";
	?>
</body>

<?php
include "linkers/fallback-resources.html";
?>

</html>