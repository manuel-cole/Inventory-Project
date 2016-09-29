<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-yellow.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-yellow.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" method="post"><div class="title"><h2>RUCST INVENTORY</h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title">Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="name[first]" required="required"/><label class="subtitle">First Name</label></span><span class="nameLast"><input  type="text" size="14" name="name[last]" required="required"/><label class="subtitle">Last Name</label></span></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>" title="select faculty"><label class="title">FACULTY<span class="required">*</span></label><div class="medium"><span><select name="select1" required="required">

		<option value="SIET">SIET</option>
		<option value="FAS ">FAS </option>
		<option value="SBS">SBS</option>
		<option value="Staff">Staff</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Select department"><label class="title">DEPARTMENT<span class="required">*</span></label><div class="medium"><span><select name="select" required="required">

		<option value="Staff">Staff</option>
		<option value="Info. System Science">Info. System Science</option>
		<option value="Telecommunication">Telecommunication</option>
		<option value="School of Business">School of Business</option>
		<option value="Computer Science">Computer Science</option></select><i></i></span></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title">I.d Number<span class="required">*</span></label><input class="small" type="text" min="0" max="8" name="number" required="required" value=""/></div>
	<div class="element-date<?php frmd_add_class("date"); ?>"><label class="title">Date of request<span class="required">*</span></label><input class="small" data-format="yyyy-mm-dd" type="date" name="date" required="required" placeholder="yyyy-mm-dd"/></div>
	<div class="element-date<?php frmd_add_class("date1"); ?>"><label class="title">Date of return</label><input class="small" data-format="yyyy-mm-dd" type="date" name="date1" placeholder="yyyy-mm-dd"/></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">Item Name / Description<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required"></textarea></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-flat-yellow.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>