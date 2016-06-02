<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ITB Indoor Mapping Management</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Andre Pratama">
		<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-bug.css" rel="stylesheet">
		<style>
			ul.thumbfix.li.span12 + li { margin-left : 0px; }
			ul.thumbfix.li.span6:nth-child(2n + 3) { margin-left : 0px; }
			ul.thumbfix.li.span4:nth-child(3n + 4) { margin-left : 0px; }
			ul.thumbfix.li.span3:nth-child(4n + 5) { margin-left : 0px; }
			ul.thumbfix.li.span2:nth-child(6n + 7) { margin-left : 0px; }
			ul.thumbfix.li.span1:nth-child(12n + 13) { margin-left : 0px; }
		</style>
	</head>
	<body>
		<div class="container">
			<h1 id="data">
				
			</h1>
			<div class="row-fluid">
				<ul class="thumbnails" id="maps">
				</ul>
			</div>
			<form>
				<div class="controls">
					<input class="input-file" id="fileInput" type="file" name="file">
				</div>
			</form>
		</div>
	</body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://jpillora.com/jquery.rest/dist/1/jquery.rest.min.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-transition.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-alert.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-modal.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-dropdown.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-scrollspy.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tab.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tooltip.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-popover.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-button.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-carousel.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-typeahead.js"></script>
<script src="js/components.js"></script>

<script>

	var client = new $.RestClient('/itbmap-webservice/v1/');
	
	client.add('maps');
	client.add('regions');
	client.add('geofences');
	
	client.maps.create({a : 123, b : "asd"}).done(function (data){
		
		$("#data").html(data.message);
		
	});
		
	client.maps.read().done(function (data){
		
		var maps = data.data.maps;
		alert(JSON.stringify(maps));
		for (var index in maps){
			var map = maps[index];
			$("#maps").append(row_fluid(map.map_name, map.map_description, map.map_tile_image_url));
		}
		
	});
	
	//API-01
	function API_01(eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('regions');
		client.regions.read().done(eventHandler);
	}
	//API-02
	function API_02(eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.maps.read().done(eventHandler);
	}
	//API-03
	function API_03(minor_id, eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.maps.maps(minor_id).done(eventHandler);
	}
	//API-04
	function API_04(map, eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.maps.create({
			minor_id:map.minor_id, 
			uuid:map.uuid, 
			position_x_beacon_1:map.position_x_beacon_1, 
			position_x_beacon_2:map.position_x_beacon_2, 
			position_x_beacon_3:map.position_x_beacon_3, 
			position_y_beacon_1:map.position_y_beacon_1, 
			position_y_beacon_2:map.position_y_beacon_2, 
			position_y_beacon_3:map.position_y_beacon_3,
			map_name:map.map_name, 
			map_description:map.map_description, 
			map_real_width:map.map_real_width, 
			map_real_height:map_real_height, 
			map_raw_image_filename:map.map_raw_image_filename, 
			map_tile_image_url:map., 
			map_height, 
			map_width
		}).done(eventHandler);
	}
	//API-05
	function API_05(eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.add('regions');
		client.add('geofences');
		client.regions.read().done(eventHandler);
	}
	//API-06
	function API_06(eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.add('regions');
		client.add('geofences');
		client.regions.read().done(eventHandler);
	}
	//API-07
	function API_07(eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.add('regions');
		client.add('geofences');
		client.regions.read().done(eventHandler);
	}
	//API-08
	function API_08(eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.add('regions');
		client.add('geofences');
		client.regions.read().done(eventHandler);
	}
	//API-09
	function API_09(eventHandler){
		var client = new $.RestClient('/itbmap-webservice/v1/');
	
		client.add('maps');
		client.add('regions');
		client.add('geofences');
		client.regions.read().done(eventHandler);
	}
	
	
	
</script>