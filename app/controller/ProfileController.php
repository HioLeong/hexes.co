<?php

class ProfileController extends baseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	*/

    public function index() {
        $this->registry->template->show('profile');
    }

    public function getUserDetails($id) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT * FROM User WHERE idUser=\''.$id.'\'';
        $results = mysqli_query($con, $query);
        echo $this->getResultAsJson($results);
    }

    private function getResultAsJson($results) {
        $result = array();
        $row = mysqli_fetch_assoc($results);
        return json_encode($row);
    }
}
