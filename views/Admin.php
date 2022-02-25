<?php
  $data = new FlightController();
  $flights = $data->getAllFlights();
//   print_r($flights);
?>



<!-- 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="https://kit.fontawesome.com/62a937cd3d.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<body  class="home ">
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

                      
                        <li><a href="#"><i class="" aria-hidden=""></i><span class=""></span></a></li>
                        <li><a href="#"><i class="" aria-hidden=""></i><span class=""></span></a></li>
                        <li><a href="#"><i class="" aria-hidden=""></i><span class=""></span></a></li>
                        <li><a href="#"><i class="" aria-hidden=""></i><span class=""></span></a></li>
                        <li><a href="#"><i class="" aria-hidden=""></i><span class=""></span></a></li>
                        
                        
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <!-- <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header> -->
                </div>
                <div class="user-dashboard">
                <div class="container">
                    USEEEEEEEEEEEEEEEEEEEEEEEERS
        <div class="row mt-4">
        <div class="card-body bg-dark">
            <div class="col-md-20 mx-auto">  
         
            <a href="<?php echo BASE_URL; ?>addflight" class="btn btn-sm btn-primary mr-2 mb-2">
                <i class="fa fa-plus mr-4"></i>
            </a>

            <table class="table table-striped table-dark">
            <thead>
                <tr>
                         <th scope="col">
                         USERS
                        </th>

                        <th scope="col">
                        USERS
                        </th>

                        <th scope="col">
                        USERS
                        </th>
                        <th scope="col">
                        USERS
                        </th>

                        <th scope="col">
                            Departure Time
                        </th>
                       
                       
                        <th scope="col">
                            Arrival
                        </th>
                        <th scope="col">
                            Arrival Time
                        </th>
                        <th scope="col">
                            Price
                        </th>
                        
                        <th scope="col">
                            Action
                        </th>
                </tr>
            </thead>
             <tbody>
                    <?php foreach($flights as $flight):?>
		<tr>
                        <th><?php echo $flight['airline']; ?> </th>
                        <th><?php echo $flight['flight']; ?> </th>
                        <th><?php echo $flight['flight_date']; ?> </th>
                        <th><?php echo $flight['departure']; ?> </th>
                        <th><?php echo $flight['departure_time']; ?> </th>
                        <th><?php echo $flight['arrival']; ?> </th>
                        <th><?php echo $flight['arrival_time']; ?> </th>
                        <th><?php echo $flight['price']; ?> </th>
                        <td class="d-flex mx-1 my-3 flex-row">
                                        <form method="post" class="mr-1" action="update">
                                            <input type="hidden" name="id" value="<?php echo $flight['flight_id']; ?>">
                                            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form method="post" class="mr-1" action="delete">
                                            <input type="hidden" name="id" value="<?php echo $flight['flight_id']; ?>">
                                            <button class="btn btn-sm btn-danger"><i class="fa p-auto fa-trash"></i></button>
                                        </form>
                            </td>
		</tr>
                    <?php endforeach; ?>
             </tbody>
            </table>
            </div>
        </div>
    </div>
            

    
                            
                  
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
   

</body>