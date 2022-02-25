<?php 

class Admin{
    static public function adminlogin($data){
        $fullname = $data['fullname'];
        try{
            $query = ('SELECT * FROM admins WHERE fullname =:fullname');
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":fullname" => $fullname));
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;
            if($stmt->execute()){
            return 'ok';
            }
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }


    
}


?>