<?php

  class Flight
  {
      static public function getAll()
      {
          $stmt = DB::connect()->prepare('SELECT * FROM flight');
          $stmt->execute();
          return $stmt->fetchAll();
        //   $stmt->close();
          // $stmt->db = null;
          $stmt = null;
      }
      
      
    static public function add($flght)
    {
        $stmt = DB::connect()->prepare('INSERT INTO flight
        (airline,flight,flight_date,departure,departure_time,arrival,arrival_time,price)
        VALUES(:airline,:flight,:flight_date,:departure,:departure_time,:arrival,:arrival_time,:price)');
        $stmt->bindParam(':airline', $flght['airline']);
        $stmt->bindParam(':flight', $flght['flight']);
        $stmt->bindParam(':flight_date', $flght['flight_date']);
        $stmt->bindParam(':departure', $flght['departure']);
        $stmt->bindParam(':departure_time', $flght['departure_time']);
        $stmt->bindParam(':arrival',$flght['arrival']);
        $stmt->bindParam(':arrival_time',$flght['arrival_time']);
        $stmt->bindParam(':price',$flght['price']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        
    }



    static public function getFlight($flght) {
        $id = $flght['flight_id'];
        try {
          $query = 'SELECT * FROM flight WHERE flight_id=:flight_id';
          $stmt = DB::connect()->prepare($query);
          $stmt->execute(array(":flight_id" => $id));
          $flight =$stmt->fetchAll(PDO::FETCH_OBJ);
          return $flight;
            } catch(PDOException $ex){
              echo 'error' .$ex->getMessage();
          }
      }    
      
      
      static public function update($flght)
      {
          $stmt = DB::connect()->prepare('UPDATE flight SET
          (airline=:airline,flight=:flight,flight_date = =:flight_date,departure=:departure,departure_time =:departure_time
           ,arrival=:arrival,arrival_time:arrival_time,price:price)
          VALUES(:airline,:flight,:flight_date,:departure,:departure_time,:arrival,:arrival_time,:price WHERE flight_id  = :flight_id');
          $stmt->bindParam(':flight_id', $flght['flight_id']);
          $stmt->bindParam(':airline', $flght['airline']);
          $stmt->bindParam(':flight', $flght['flight']);
          $stmt->bindParam(':flight_date', $flght['flight_date']);
          $stmt->bindParam(':departure', $flght['departure']);
          $stmt->bindParam(':departure_time', $flght['departure_time']);
          $stmt->bindParam(':arrival',$flght['arrival']);
          $stmt->bindParam(':arrival_time',$flght['arrival_time']);
          $stmt->bindParam(':price',$flght['price']);
  
          if ($stmt->execute()) {
              return 'ok';
          } else {
              return 'error';
          }
          
      }
    



      static public function delete($flght) {
        $id = $flght['id'];
        try {
          $query = 'DELETE  FROM flight WHERE flight_id=:flight_id';
          $stmt = DB::connect()->prepare($query);
          $stmt->execute(array(":flight_id" => $id));
          if($stmt->execute()) {
            return 'ok';
          }
            } catch(PDOException $ex){
              echo 'error' .$ex->getMessage();
          }
      }

      static public function searchFlight($flght){
        $srch = $flght['search'];
        try {
          $query = 'SELECT * FROM flight WHERE airline LIKE  ? OR flight LIKE ?';
          $stmt = DB::connect()->prepare($query);
          $stmt->execute(array('%'.$srch.'%','%'.$srch.'%'));
          $flights = $stmt->fetchAll();
          return $flights;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
      }
      




 }



?>