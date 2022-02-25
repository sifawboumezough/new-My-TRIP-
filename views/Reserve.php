

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="col-md-11 mx-auto card card-body bg-light " >
    <div>
    <a href="<?php echo BASE_URL;?>home">Home</a>
    </div>
    
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Passenger name</th>
        <th scope="col">Email</th>
        <th scope="col">Passport Id</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Depart City</th>
        <th scope="col">Destination</th>
        <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($reservations as $reservation):?>
        <td><?php echo $reservation['id']; ?> </td>
        <td><?php echo $reservation['fullname']; ?> </td>
        <td><?php echo $reservation['email']; ?> </td>
        <td><?php echo $reservation['passportid']; ?> </td>
        <td><?php echo $reservation['flightDate']; ?> </td>
        <td><?php echo $reservation['flightTime']; ?> </td>
        <td><?php echo $reservation['departCity']; ?> </td>
        <td><?php echo $reservation['arriveCity']; ?> </td>
        <td><?php echo $reservation['price']; ?> </td>
        <td> 
        <!-- <form method="post" action="update"> 
        <input type="hidden" name="id" value="">
        <button class="btn btn-sm btn-warning" >Edit</button>
        </form>
        <form method="post" action="delete"> 
        <input type="hidden" name="id" value="">
        <button class="btn btn-sm btn-danger" >Delete</button>
        </form> -->
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</body>
</html>