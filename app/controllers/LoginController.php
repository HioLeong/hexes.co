<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	*/

    public function showPage() {
        $results = DB::table('User')->get();
        return View::make('login')->with('results', $results);
    }

    /*
     * Handles if user from post is valid
     */
    public function isValidUserFromPost() {
        $email = Input::get('email');
        $password = Input::get('password');
        if ((!$email) || (!$password)) {
            return 'empty';
        }  else {
            return $this->isValidUser($email, $password);
        }
    }

    /*
     * Handles if user is valid
     */
    private function isValidUser($email, $password) {
        //TODO: Refactor to SQL helper class
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT password FROM User WHERE email=\''.$email.'\'';
        $results = mysqli_query($con, $query);
        $row = mysqli_fetch_array($results);
        //$con = mysqli_close();

        if (strcmp($row['password'], $password)) {
            return 'valid';
        } else {
            return 'invalid';
        }
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
        $fields = array('email', 'password', 'firstName', 'lastName', 'nickname', 'dob', 
            'gender', 'school', 'currentLocation');
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
