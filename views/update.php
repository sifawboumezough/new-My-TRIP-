<?php
    if(isset($_POST['id'])){
        $existFlight = new FlightController();
        $flight = $existFlight->getOneFlight();    
    }else {
        Redirect::to('home');
    }
    if(isset($_POST['submit'])){
        $existFlight = new FlightController();
        $existFlight->updateFlight();    
    }
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<body  class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                    <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="./avaibleFlights"><i class="fa fa-plane" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Flights</span></a></li>
                        <li><a href="#"><i class="fa fa-ticket" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reservations</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                        <li><a href="#"><i class="" aria-hidden="true"></i><span class="hidden-xs hidden-sm"></span></a></li>
                        <li><a href="#"><i class="" aria-hidden="true"></i><span class="hidden-xs hidden-sm"></span></a></li>
                        <li><a href="#"><i class="" aria-hidden="true"></i><span class="hidden-xs hidden-sm"></span></a></li>
                        <li><a href="#"><i class="" aria-hidden="true"></i><span class="hidden-xs hidden-sm"></span></a></li>
                        <li><a href="#"><i class="" aria-hidden="true"></i><span class="hidden-xs hidden-sm"></span></a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="user-dashboard">
                <div class="container">
        <div class="row mt-4">
            <div class="col-md-10 mx-auto ">
                <div class="card">
                    <div class="card-header bg-dark "><span class="text_light">Modify Flights</span></div>
                        <div class="card-body bg-dark ">
                        <a href="<?php  echo BASE_URL;?>avaibleFlights" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"> </i>
                        </a>
                        <form method="post">
                        <div class="form-group">
                                <label for="airline" class="text-light">Airline</label>
                                <input type="text" name="airline" class="form-control" placeholder="Airline Name"
                                value="<?php echo $flight->airline; ?>" 
                                >
                            </div>
                            <div class="form-group">
                                <label for="flight" class="text-light">Flight</label>
                                <input type="text" name="flight" class="form-control" placeholder="Flight Number"
                                value="<?php echo $flight->flight; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="date" class="text-light">Date</label>
                                <input type="date" name="date" class="form-control" placeholder="Date"
                                value="<?php echo $flight->date; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="depart" class="text-light">Departure</label>
                                <input type="text" name="depart" class="form-control" placeholder="Departure"
                                value="<?php echo $flight->date; ?>"
                                >
                                <input type="hidden" name="flight_id" value="<?php echo $flight['flight_id'];?>">
                            </div>
                            <div class="form-group">
                                <label for="depart_time" class="text-light">Departure Time</label>
                                <input type="time" name="depart_time" class="form-control" placeholder="Departure Time"
                                value="<?php echo $flight->depart_time; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="arrival"class="text-light">Arrival</label>
                                <input type="text" name="arrival" class="form-control"
                                value="<?php echo $flight->arrival; ?>">
                            </div>
                            <div class="form-group">
                                <label for="arrival_time" class="text-light">Arrival Time</label>
                                <input type="time" name="arrival_time" class="form-control"
                                value="<?php echo $flight->arrival_time; ?>">
                            </div>
                            <div class="form-group">
                                <label for="price" class="text-light">Price</label>
                                <input type="text" name="price" class="form-control"
                                value="<?php echo $flight->price; ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Modify</button>
                            </div>
                        

                        </form>
                 


                         
                    </div>
                </div>
            </div>
        </div>

 </div>
                


          
                
                 </div>
        </div>

    </div>



    <!-- Modal -->
   

</body>


    


            

    






    



            

    






    