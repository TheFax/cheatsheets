#############################################################################
# HTML
# Pagina col contenuto da variare
# Scaricare la jQuery da qui: https://jquery.com/download/
#############################################################################
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script type="text/javascript">
function getPage(id) {
	$('#output').html('<img src="LoaderIcon.gif" />');
	jQuery.ajax({
		url: "get_page.php",
		data:'id='+id,
		type: "POST",
		success:function(data){$('#output').html(data);}
	});
}
getPage(1);
</script>
<div id="output"></div>


#############################################################################
# PHP
# get_page.php
# Parte PHP che restituisce il contenuto richiesto:
#############################################################################
get_page.php
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$pages = $db_handle->runQuery("SELECT * FROM pages WHERE id = ".$_REQUEST['id']);
if(!empty($pages)) {
?>
<h3><?php echo $pages[0]['title'];?></h3>
<div><?php echo $pages[0]['content'];?></p>
<?php }
?>
