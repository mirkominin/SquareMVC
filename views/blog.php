<?php
	include 'header.php';
?>
	<div id ="content">
	<h2>My Guestbook</h2>
	<p><a href="index.php?insert">Lägga till en ny komment</a></p>
	<p><?php 
	//iterera data som kommer från controller.
	//det måste jag iterera två gånger för att första 
	//array har en array i varje rad
	foreach($data as $row)
	{
		foreach($row as $post)
		{
		echo "<h3>Author: ".$post['title']. " </h3>
		<p>date: ".$post['date']. "</p>
		<p>body:<br />". $post['body']. " </p><br />
		<hr>"
		;
		}
	}
	?>
	</p>	
	</div><!--end content-->
 <?php
	include 'footer.php';
?>
