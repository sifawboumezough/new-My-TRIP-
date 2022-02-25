<?php 

class reservation {


	  static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO reservation (flight_date,departure,departure_time,arrival,arrival_time,Adults,Children,Class,flight_type)
			VALUES (:flight_date,:Date_Depart,:Date_Roteur,:Class,:Adults,:Children)');
        
        $stmt->bindParam(':flight_date', $data['flight_date']);
        $stmt->bindParam(':departure', $data['departure']);
        $stmt->bindParam(':departure_time', $data['departure_time']);
        $stmt->bindParam(':type_flight', $data['type_flight']);
        $stmt->bindParam(':arrival',$data['arrival']);
        $stmt->bindParam(':Adults',$data['Adults']);
		$stmt->bindParam(':Children',$data['Children']);
        $stmt->bindParam(':Class',$data['Class']);
    

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		
}

}
?>
