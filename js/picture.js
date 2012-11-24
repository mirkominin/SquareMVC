$(document).ready(function(){	
					$("#exitPic").hide();
					$("#picture_canvas").hide();
				});
			  function initPicture() 
			  {
			  $("#exitPic").show("slow");
			  $("#picture_canvas").show("slow");
				var picNum = Math.floor(Math.random() * 6) + 1;				
				imgSrc = "img/"+picNum+".jpg";
				document.getElementById("image").src = imgSrc;
				
				
			$('#exitPic').click(function() {
				 
							  $("#exitPic").hide("slow");
							  $("#picture_canvas").hide("slow");
							
					});		
			 }

			 function closePic(){
					$("#exitPic").hide("slow");
					$("#picture_canvas").hide("slow");
				
			 }
		