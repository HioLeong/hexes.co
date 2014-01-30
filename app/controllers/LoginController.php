<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
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
        return var_dump($results);

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

}
