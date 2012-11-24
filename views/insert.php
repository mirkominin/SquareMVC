<?php
	include 'header.php';
?>
	<div id ="content">
	<h2><?php echo $data['title'];?></h2>
	
	<form action="<?php SERVER_ROOT . 'controllers/' .  $current_file.".php";?>" method="POST" class="registration_form" >
	<fieldset>
	<legend><?php echo $data['content'];?></legend>

	<p><label for="author">Sändare</label><br /><input type="text" name="author" value =""/></p>
	<p><label for="body">Meddelande</label><br /><textarea name="body" COLS=40 ROWS=6 value=""></textarea></p>
	<input type="submit" value="Lägga till">
	</fieldset>
</form>
	<p><?php echo $data['entrySucceded'];?></p>
	<p><?php echo $data['tillBlog'];?></p>
	<p><?php echo $data['entryFailed'];?></p>
	</div><!--end content-->
 <?php
	include 'footer.php';
?>
