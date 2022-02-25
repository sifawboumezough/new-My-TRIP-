<?php


class UsersController {
    public function register(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' => 12
            ];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $data = array(
                'fullname' => $_POST['fullname'],
                'mail' => $_POST['mail'],
                'password' => $password,
                'passporid' => $_POST['passporid'],
                'birthdate' => $_POST['birthdate']
            );
            $result = user::createUser($data);
            if($result === 'ok'){
                Session::set('success', 'Account Created Successfully');
                Redirect::to('login');
            }else{
                echo $result;
            }
        }
    }




        public function log() {
            if(isset($_POST['submit'])) {
                $data['fullname'] = $_POST['fullname'];
                $result= user::login($data);

                if($result->fullname === $_POST['fullname'] && password_verify($_POST['password'], $result->password)) {
                    $_SESSION['logged'] = true;
                    $_SESSION['fullname'] = $result->fullname;
                        Redirect::to('booking');

                } else {
                    Session::set('success', 'Your username or password may be incorrect');
                    Redirect::to('login');
                }
            }
        }

        static public function logout(){
            session_destroy();
        }

    
}