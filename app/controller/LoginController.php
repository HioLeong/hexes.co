<?php

class LoginController extends BaseController {

    public function index() {
        $this->registry->template->show('login');
    }

    /*
     * Handles if user from post is valid
     */
    public function isValidUserFromPost() {

        $data = json_decode($_POST['data']);
        if ((!$data->email) || (!$data->password)) {
        }  else {
            echo $this->isValidUser($data->email, $data->password);
        }
    }

    /*
     * Handles if user is valid
     */
    public function isValidUser($email, $password) {
        //TODO: Refactor to SQL helper class
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT idUser, password FROM User WHERE email=\''.$email.'\'';
        $results = mysqli_query($con, $query);
        $row = mysqli_fetch_array($results);

        if (strcmp($row['password'], $password) == 0) {
            if (isset($_SESSION['id'])) {
                $_SESSION['id'] = $row['idUser'];
            } else {
                $_SESSION['id'] = $row['idUser'];
            }
            return $_SESSION['id'];
        } else {
            return 'invalid';
        }
    }

    public function getSessionUserId() {
        if (isset($_SESSION['id'])) {
            echo $_SESSION['id'];
        } else {
            echo 'Error';
        }
    }

    public function logOut() {
        session_destroy();
        echo 'loggedOut';
    }

    public function registerUserFromPost() {
        $email = Input::get('email');
        $password = Input::get('password');
        if ((!$email) || (!$password)) {
            return 'empty';
        }  else {
            return $this->registerUser($email, $password);
        }
    }

    private function registerUser($email, $password) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'INSERT INTO User(password, email) VALUES(\''.$password.'\',\''.$email.'\')';
        $results = mysqli_query($con, $query);
        return var_dump($results);
    }

    public function showRegisterPage() {
        return View::make('register');
    }

    private function setField($userObj, $property) {
        $userObj->__set($property, Input::get($property));
    }

    public function updateUserDetailsFromPost() {
        $fields = array('email', 'password', 'firstName', 'lastName', 'nickname', 'dateOfBirth', 
            'gender', 'school', 'relStatus', 'currentLocation');
        $user = new User();
        /* Set all post fields */
        foreach ($fields as $field) {
            $this->setField($user, $field);
        }
        return $user->__get('gender');
    }

    public function updateUserDetails($user) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'INSERT INTO User(password, email) VALUES(\''.$password.'\',\''.$email.'\')';
        $results = mysqli_query($con, $query);
    }
}
