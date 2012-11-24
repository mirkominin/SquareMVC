<?php
	include 'header.php';
?>
	<div id ="content">
	<h2><?php echo $data['title'];?></h2>
	<?php 
	//använder jag __loggedIn() funktion för att avgöra om en användare är redan inloggat, i så fall presentera jag alla uppgifter
	//om loggedIn() returnera falsk jag ska visa förmuläret för inlogging
	
	if(loggedIn()){
                if($_SESSION['group']==0) {$beharighet = "Administrator";}else{$beharighet = "User";}
		echo "<p>Hej ".$_SESSION['firstname']." här är dina uppgifter</p>
				<p>User id: ".$_SESSION['user_id']."</p>
				<p>Username: ".$_SESSION['username']."</p>
				<p>First name: ".$_SESSION['firstname']."</p>
				<p>Last name: ".$_SESSION['lastname']."</p>
				<p>E-mail: ".$_SESSION['email']."</p>
				<p>Group: ".$beharighet."</p>
				<a href='index.php?logout'>Logga ut</a>
				<p>" .$data['Ny_användare']."</p>
				<p><a href='index.php?edituser'>Redigera uppgifter</a></p>";
	}
	else
	{
	?>
	<form action="<?php SERVER_ROOT . 'controllers/' . "login.php";?>" method="POST" class="registration_form" >
	<fieldset>
	<legend><?php echo $data['content'];?></legend>

	<p><label for="user">Användarnamn</label><br /><input type="text" name="user" value =""/></p>
	<p><label for="password">Lösenord</label><br /><input type="password" name="password" value=""/></p>
	<input type="submit" value="Logga in">
	</fieldset>
	</form>

	<p><?php echo $data['Ny_användare'];?></p>
	 <p><?php 
	if(!empty($data['databaseMessage']))
		echo $data['databaseMessage'];
	 ?></p>
	 <?php
	 }
	 ?>
	</div><!--end content-->
 <?php
	include 'footer.php';
?>