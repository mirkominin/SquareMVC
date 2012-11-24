var map;
				$(document).ready(function(){	
					$("#exitMap").hide();
					$("#map_canvas").hide();
				});
			  function initialize() 
			  {
			  $("#exitMap").show("slow");
			  $("#map_canvas").show("slow");
				var me = new google.maps.LatLng(59.317188,18.034516);
				var myOptions = {
				  zoom: 15,
				  center: me,
				  mapTypeId: google.maps.MapTypeId.SATELLITE	
					};
				map = new google.maps.Map(document.getElementById("map_canvas"),
					myOptions);
				
				var marker = new google.maps.Marker({
					position: me, 
					map: map,
					title:"Här bor jag"	})
				
				
			$('#exitMap').click(function() {
				 
							  $("#exitMap").hide("slow");
							  $("#map_canvas").hide("slow");
				 
					});		
			 }

			 function closeMap(){
					$("#exitMap").hide("slow");
					$("#map_canvas").hide("slow");
				
			 }
		