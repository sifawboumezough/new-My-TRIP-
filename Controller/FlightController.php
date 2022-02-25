<?php
class FlightController
{
    public function getAllFlights()
    {
        $flights = Flight::getAll();
        return $flights;
    }




    public function addFlight(){
        if(isset($_POST['submit'])) {
            $flght = array(
            
                'airline' => $_POST['airline'],
                'flight' => $_POST['flight'],
                'flight_date' => $_POST['date'],
                'departure' => $_POST['depart'],
                'departure_time' => $_POST['depart_time'],
                'arrival' => $_POST['arrival'],
                'arrival_time' => $_POST['arrival_time'],
                'price' => $_POST['price'],
            );

            $result = Flight::add($flght);
            if($result == 'ok') {
              
                  Session::set('success' , 'Flight Added');
                  header('location:'.BASE_URL.'avaibleFlights');
                  Redirect::to('avaibleFlights');
            }else {
                echo $result;
            }
        }
    }

    public function getOneFlight(){
                if(isset($_POST['id'])) {
                    $flght = array(
                        'flight_id' => $_POST['id']
                    );
    
                    $flight = Flight::getFlight($flght);
                    return $flight;
                 }
          }


             public function updateFlight(){
                if(isset($_POST['submit'])) {
                    $flght = array(
                        'flight_id' => $_POST['flight_id'],
                        'airline' => $_POST['airline'],
                        'flight' => $_POST['flight'],
                        'flight_date' => $_POST['date'],
                        'departure' => $_POST['depart'],
                        'departure_time' => $_POST['depart_time'],
                        'arrival' => $_POST['arrival'],
                        'arrival_time' => $_POST['arrival_time'],
                        'price' => $_POST['price'],
                    );
        
                    $result = Flight::update($flght);
                    if($result == 'ok') {
                          Session::set('success','Flight Updated');
                          header('location:'.BASE_URL .'avaibleFlights');
                          Redirect::to('avaibleFlights');
                    }else {
                        echo $result;
                    }
                }
            }


            public function deleteFlight() {
                if(isset($_POST['id'])) {
                     $flght['id'] = $_POST['id'];
                     $result = Flight::delete($flght);
                     if($result=='ok') {
                        Session::set('success' , 'Flight Deleted');
                        header('location:'.BASE_URL .'avaibleFlights');
                        Redirect::to('avaibleFlights');
                     } else {
                          echo $result;
                     }
                }
           }


           public function findFlight(){
            if(isset($_POST['search'])){
                $flght = array('search' => $_POST['search']);
            }
            $flights = Flight::searchFlight($flght);
            return $flights;
        } 


           




}


?>