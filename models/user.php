<?php


class User {


    static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO users (fullname,email_adresse,password,passporid,birthdate)
		VALUES (:fullname,:mail,:password,:passporid,:birthdate)');
		$stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':mail',$data['mail']);
        $stmt->bindParam(':password',$data['password']);
		$stmt->bindParam(':passporid',$data['passporid']);
		$stmt->bindParam(':birthdate',$data['birthdate']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
        
	}



    static public function login($data) {
            $fullname = $data['fullname'];
            try {
                $query = 'SELECT * FROM  users WHERE fullname = :fullname';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(
                    array(
                        ":fullname" => $fullname)
                    );
                    $user = $stmt->fetch(PDO::FETCH_OBJ);
                    return $user;
                    if($stmt->execute()) {
                        return 'ok';
                    }
            }catch (PDOException $ex){
                echo 'error' . $ex->getMessage();
            }
        }


}




?>