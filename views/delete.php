<?php 
	if(isset($_POST['id'])){
		$exitFlight = new FlightController();
		$exitFlight->deleteFlight();
	}
?>