
<?php
 include('./views/includes/alerts.php');
require_once './views/includes/header.php';
require_once './Controller/HomeController.php';
require_once './autoload.php';
require_once './Controller/admincontroller.php';
require_once './Controller/FlightController.php';
require_once './Controller/adminController.php';
require_once './Controller/reservationsController.php';




$home = new HomeController();
// $home->index($_GET['page']);
    $publicpages = ['register' , 'login' , 'adminlogin'];
    $adminpages = ['home', 'addflight', 'update' , 'delete', 'logout', 'reservations'];
    $pages= ['logout', 'home' , 'avaibleFlights' , 'booking' , 'myreservations'];
    $allpages = ['logout' , 'home' , 'avaibleFlights' , 'booking' , 'myreservations', 'flights', 'addflight', 'delete', 'update' , 'logout' ,'reservations' , 'admin', 'register', 'login' , 'loginadmin'];

    if(isset($_GET['page'])) {
        if(in_array($_GET['page'], $allpages)) {
            $page = $_GET['page'];
            $home->index($page);
        }else {
            include('views/includes/404.php');
        }
    }else {
        $home->index('home');
    }


?>

<?php
    // require_once './views/includes/footer.php';
?>