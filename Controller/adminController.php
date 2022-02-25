<?php 

class AdminController{
    public function adminlog() {
        if(isset($_POST['submit'])) {
            $data['fullname'] = $_POST['fullname'];
            $result= Admin::adminlogin($data);

            if($result->fullname === $_POST['fullname'] && password_verify($_POST['password'], $result->password)) {
                   $_SESSION['logged'] = true;
                   $_SESSION['fullname'] = $result->fullname;
                    Redirect::to('home');

            } else {
                Session::set('success', 'Your username or password may be incorrect');
                Redirect::to('loginadmin');
            }
        }
    }

}

?>