<?php
		$connect = mysqli_connect('localhost','stagi3g1_event','yjTLDaO!Iajq','stagi3g1_onlineevent_db');	
		//$connect = mysqli_connect('localhost','root','','online_event_db');
		if(!$connect){
			$data['conn']='err';
		}
		?>