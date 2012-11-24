<?php
	include 'header.php';
?>
	<div id ="content">
	<h2><?php echo $data['title'];?></h2>
	<?php 
	//jag ska kolla vilken värde $_SESSION['group'] har så att jag kan presentera den lämplig formuläret till användare
	//om en användare presentera sig med en $_SESSION['group'] == 0 det betyder att den har administratör behörighet därför
	//tilldela jag 0 i groups hidden input värde
	// om användare presentera sig med $_SESSION['group'] == 1 är den user då tilldela jag värde 1 i group input value.
	//på den här sätt en administratör ska skapa en annan administratör konto, i alla andra fallen en user konto ska skapas.
	
	if(isset($_SESSION['group']) && ($_SESSION['group'] == 0)){
	?>
	<form action="<?php SERVER_ROOT . 'controllers/' . 'newuser.php';?>" method="POST" class="registration_form" onsubmit="return validateForm(this);">
	<fieldset>
	<legend><?php echo $data['content'];?></legend>
	<p><?php 
	if(!empty($data['databaseMessage']))
	  echo $data['databaseMessage'];
	 ?></p>
	<p><label for="user">Användarnamn</label><br /><input type="text" id="user "name="user" value =""/></p>
	<p><label for="password">Lösenord</label><br /><input type="password" id="password" name="password" value=""/></p>
	<p><label for="firstname">Förstnamn</label><br /><input type="text" id="firstname" name="firstname" value =""/></p>
	<p><label for="lastname">Efternamn</label><br /><input type="text" id="lastname" name="lastname" value =""/></p>
	<p><label for="email">E-post adress</label><br /><input type="text" id="email" name="email" value =""/></p>
	<input type="hidden" name="group" value="0"/>

	<input type="submit" value="Registrera">
	</fieldset>
	</form>
	 
	 <?php
	
	  }
	else
	{
	?>
	<form action="<?php SERVER_ROOT . 'controllers/' . 'newuser.php';?>" method="POST" class="registration_form" onsubmit="return validateForm(this);">
	<fieldset>
	<legend><?php echo $data['content'];?></legend>
	<p><?php 
	if(!empty($data['databaseMessage']))
	  echo $data['databaseMessage'];
	 ?></p>
	<p><label for="user">Användarnamn</label><br /><input type="text" id="user "name="user" value =""/></p>
	<p><label for="password">Lösenord</label><br /><input type="password" id="password" name="password" value=""/></p>
	<p><label for="firstname">Förstnamn</label><br /><input type="text" id="firstname" name="firstname" value =""/></p>
	<p><label for="lastname">Efternamn</label><br /><input type="text" id="lastname" name="lastname" value =""/></p>
	<p><label for="email">E-post adress</label><br /><input type="text" id="email" name="email" value =""/></p>
	<input type="hidden" name="group" value="1"/>
	<input type="submit" value="Registrera">
	</fieldset>
	</form>
	 <?php
	 }
	 ?>
	</div><!--end content-->
 <?php
	include 'footer.php';
?>