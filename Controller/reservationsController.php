<?php 




class reservationController{

	public function addReservation(){
		if(isset($_POST['submit'])){
			$data = array(
				'flight_date' => $_POST['flight_date'],
				'departure' => $_POST['departure'],
				'departure_time' => $_POST['departure_time'],
				'type_flight' => $_POST['type_flight'],
				'arrival' => $_POST['arrival'],
				'Adults' => $_POST['Adults'],
				'Children' => $_POST['Children'],
				'Class' => $_POST['Class'],
			);
			$result = reservation::add($data);
			if($result === 'ok'){
				Session::set('success','Reservation Add');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	
}



?>
